<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariationValue;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PrintQRController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }


    // Lấy ra danh sách các sản phẩm muốn in QR theo product_id trên url
    public function getProductPrintQR(Request $request): JsonResponse {
        try {
            $productIds = explode(',', $request->product_id);
            $variantValueIds = explode(',', $request->variant_value_id);
            
            $products = Product::with([
                'category',
                'shop:id,name',
                'product_media:id,product_id,media,is_main',
                'supplier:id,name',
                'variants',
                'variants.values',
            ])
                ->whereIn('id', $productIds)
                ->whereHas('variants.values', function ($query) use ($variantValueIds) {
                    $query->whereIn('id', $variantValueIds);
                })            
                ->orderBy('id', 'ASC')
                ->get();
                
                $response = $products->flatMap(function ($product) use ($variantValueIds) {
                    $variants = $product->variants;
                    $isVariant = $variants->count() > 0;
        
                    if ($isVariant) {
                        return $variants->flatMap(function ($variant) use ($product, $variantValueIds) {
                            return $variant->values->whereIn('id', $variantValueIds)->map(function ($value) use ($product, $variant) {
                                return [
                                    'id'            => $product->id,
                                    'value_id'      => $value->id,
                                    'variant_id'    => $variant->id,
                                    'thumbnail_url' => $product->product_media->firstWhere('is_main', true)->media ?: null,
                                    'name'          => $product->name,
                                    'variant'       => $product->id . '-' . $variant->variation_name . '-' . $value->variation_value_name,
                                    'isVariant'     => true,
                                    'regular_price' => $value->regular_price,
                                    'qr_link'       => 'product' . '/' . $product->slug . '/' . $product->id . '?spid=' . $value->id,
                                ];
                            });
                        });
                    } else {
                        return [
                            [
                                'id'            => $product->id,
                                'name'          => $product->name,
                                'variant'       => $product->id,
                                'isVariant'     => false,
                                'regular_price' => $product->regular_price,
                                'qr_link'       => 'product' . '/' . $product->slug . '/' . $product->id,
                            ]
                        ];
                    }
                });

                if ($products->isEmpty()) {
                    return jsonResponse(null, Response::HTTP_NO_CONTENT, "No products found for the given IDs.");
                }
    
                return jsonResponse($response, Response::HTTP_OK, "Successfully retrieving the list of products intended for QR Code printing !");
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }
    

    // Lấy ra danh sách tất cả sản phẩm trong kho (chức năng tìm kiếm)
    public function getProductList(): JsonResponse {
        try {
            $products = Product::with([
                'category',
                'shop:id,name',
                'product_media:id,product_id,media,is_main',
                'supplier:id,name',
                'variants',
                'variants.values',
            ])
                ->where('shop_id', auth()->user()->shop_id)
                ->orderBy('id', 'ASC')->get();

            $response = $products->flatMap(function ($product) {
                $variants = $product->variants;
                $isVariant = $variants->count() > 0;

                if ($isVariant) {
                    return $variants->flatMap(function ($variant) use ($product) {
                        return $variant->values->map(function ($value) use ($product, $variant) {
                            return [
                                'id'            => $value->id,
                                'variant_id'    => $variant->id,
                                'product_id'    => $product->id,
                                'thumbnail_url' => $product->product_media->firstWhere('is_main', true)->media ?: null,
                                'name'          => $product->name,
                                'variant'       => $product->id . '-' . $variant->variation_name . '-' . $value->variation_value_name,
                                'isVariant'     => true,
                                'category'      => $product->category->name,
                                'brand'         => $product->supplier->name,
                                'stock_qty'     => $value->stock_qty,
                                'created_at'    => $value->created_at,
                                'regular_price' => $value->regular_price,
                                'sale_price'    => $value->sale_price,
                                'qr_link'       => 'product' . '/' . $product->slug . '/' . $product->id . '?spid=' . $value->id,
                                'supplier_name' => $product->supplier->name,
                                'status'        => $product->status,
                                // TODO: biến thể nên có hình ảnh riêng và trạng thái riêng cho từng biến thể
                            ];
                        });
                    });
                } else {
                    return [
                        [
                            'id'            => $product->id,
                            'name'          => $product->name,
                            'variant'       => $product->id,
                            'isVariant'     => false,
                            'category'      => $product->category->name,
                            'brand'         => $product->supplier->name,
                            'stock_qty'     => $product->stock_qty,
                            'created_at'    => $product->created_at,
                            'regular_price' => $product->regular_price,
                            'sale_price'    => $product->sale_price,
                            'qr_link'       => 'product' . '/' . $product->slug . '/' . $product->id,
                            'supplier_name' => $product->supplier->name,
                            'status'        => $product->status,
                        ]
                    ];
                }
            });

            return jsonResponse($response, Response::HTTP_OK, "Success");
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage());
        }
    }
}