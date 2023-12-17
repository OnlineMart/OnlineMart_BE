<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Exception;
use Illuminate\Http\JsonResponse;

class ShopController extends Controller
{

    /**
     * Lấy danh sách shop cùng với nhà cung cấp
     *
     * @return JsonResponse
     * **/
    public function index(): JsonResponse
    {
        try {
            $shops = Shop::with('supplier')
                ->where('type', '1')
                ->orderBy('id', 'DESC')
                ->get();

            $response = $shops->map(function ($shop) {
                return [
                    'id' => $shop->id,
                    'name' => $shop->name,
                    'avatar' => $shop->avatar,
                    'followed' => $shop->followed,
                    'description' => $shop->description,
                    'rating' => $shop->rating,
                    'url' => $shop->url,
                    'supplier' => $shop->supplier->map(function ($suppliers) {
                        return [
                            'id' => $suppliers->id,
                            'name' => $suppliers->name,
                            'code' => $suppliers->code,
                            'avatar' => $suppliers->avatar,
                        ];
                    })->values(),
                ];
            });

            return jsonResponse($response, 200, 'Get data successfully.');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }

    /**
     * Lấy chi tiết shop
     *
     * @param Shop $shop
     *
     * @return JsonResponse
     */
    public function getShop($slug): JsonResponse
    {
        try {
            $shop = Shop::with(['voucher', 'product', 'category', 'review' => function ($query) {
                $query->where('parent_id', null);
            }])->where('url', $slug);
            $response = [
                'id' => $shop->id,
                'name' => $shop->name,
                'avatar' => $shop->avatar,
                'followed' => $shop->followed,
                'description' => $shop->description,
                'category' => $shop->category,
                'url' => $shop->url,
                'created_at' => $shop->created_at,
                'rating' => $shop->rating,
                'review' => $shop->review->map(function ($review) {
                    return [
                        'rating' => $review->rating,
                    ];
                })->values(),
                'product_sale' => $shop->product->where('sale_price', '>', 0)->map(function ($product) {
                    $thumbnail_url = $product->product_media->firstWhere('is_main', true)->media ?: null;
                    return [
                        'id' => $product->id,
                        'category_id' => $product->category_id,
                        'name' => $product->name,
                        'slug' => $product->slug,
                        'thumbnail' => $thumbnail_url,
                        'regular_price' => $product->regular_price,
                        'sale_price' => $product->sale_price,
                        'sku' => $product->sku,
                        'view_count' => $product->view_count,
                        'sold_count' => $product->sold_count,
                    ];
                })->values(),
                'product' => $shop->product->map(function ($product) {
                    $thumbnail_url = $product->product_media->firstWhere('is_main', true)->media ?: null;
                    return [
                        'id' => $product->id,
                        'category_id' => $product->category_id,
                        'name' => $product->name,
                        'slug' => $product->slug,
                        'thumbnail' => $thumbnail_url,
                        'regular_price' => $product->regular_price,
                        'sale_price' => $product->sale_price,
                        'sku' => $product->sku,
                        'view_count' => $product->view_count,
                        'sold_count' => $product->sold_count,
                    ];
                })->values(),
                'voucher' => $shop->voucher->map(function ($voucher) {
                    return [
                        'id' => $voucher->id,
                        'code' => $voucher->code,
                        'usage_limit' => $voucher->usage_limit,
                        'min_discount_amount' => $voucher->min_discount_amount,
                        'max_discount_amount' => $voucher->max_discount_amount,
                        'discount' => $voucher->discount,
                        'unit' => $voucher->unit,
                        'status' => $voucher->status,
                        'start_date' => $voucher->start_date,
                        'expired_date' => $voucher->expired_date,
                    ];
                })->values(),
            ];

            return jsonResponse($response, 200, 'Get data successfully.');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }
}