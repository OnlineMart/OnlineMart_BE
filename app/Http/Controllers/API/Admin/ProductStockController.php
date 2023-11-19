<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProductStockController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('permission:View inventory', ['only' => ['index']]);
    }


    /**
     * Show all products
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
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
