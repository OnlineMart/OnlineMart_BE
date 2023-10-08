<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['getCategoryProduct']);
    }

    /**
     * Lấy danh sách sản phẩm theo danh mục
     *
     * @param int $categoryId
     *
     * @return JsonResponse
     */
    public function getCategoryProduct(int $categoryId): JsonResponse
    {
        $minPrice = PHP_INT_MAX;
        $maxPrice = 0;
        try {
            $products = Product::with([
                'category',
                'product_media:id,product_id,media,is_main',
                'shop:id,name',
                'supplier:id,name',
                'variants:id,variation_name'
            ])
                ->where('category_id', $categoryId)
                ->where('status', Product::ENABLED)
                ->orderBy('sold_count', 'desc')
                ->get();

            // get all children categories
            $categories = Category::where('parent_id', $categoryId)->get();

            if ($products->isEmpty()) {
                return jsonResponse([], 404, 'No products found for the given category ID');
            }

            foreach ($products as $product) {
                $currentPrice = $product->sale_price > 0 ? $product->sale_price : $product->regular_price;

                $minPrice = min($minPrice, $currentPrice);
                $maxPrice = max($maxPrice, $currentPrice);
            }

            $categoryName = $products->first()->category->name;
            $totalPrice   = $products->sum(function ($product) {
                return $product->sale_price > 0 ? $product->sale_price : $product->regular_price;
            });
            $productCount = $products->count();
            $averagePrice = $totalPrice / $productCount;

            $response = [
                "category_name" => $categoryName,
                "category_slug" => Str::slug($categoryName),
                "products"      => $products->map(function ($product) {
                    $isSale       = $product->sale_price > 0;
                    $checkVariant = $product->variants->isNotEmpty();

                    $regular_price = $product->regular_price;
                    $sale_price    = $product->sale_price;

                    $price         = $isSale ? $sale_price : $regular_price;
                    $discount_rate = $isSale ? 100 - (($sale_price / $regular_price) * 100) : 0;

                    return [
                        "id"                => $product->id,
                        "name"              => $product->name,
                        "slug"              => $product->slug,
                        "thumbnail_url"     => $product->product_media->firstWhere('is_main', true)->media ?: null,
                        "current_price"     => $price,
                        "regular_price"     => $product->regular_price,
                        "sale_price"        => $product->sale_price,
                        "discount_rate"     => round($discount_rate, 1),
                        "discount_price"    => $regular_price - $sale_price,
                        "sku"               => $product->sku,
                        "rating"            => $product->rating,
                        "view_count"        => $product->view_count,
                        "sold_count"        => $product->sold_count,
                        "short_description" => $product->short_description,
                        "long_description"  => $product->short_description,
                        "status"            => $product->status,
                        "type"              => $checkVariant ? "configurable" : "simple",
                        "variant_name"      => $checkVariant ? $product->variants->pluck('variation_name') : null,
                        "shop_id"           => $product->shop->id,
                        "supplier_id"       => $product->supplier->id,
                        "created_at"        => $product->created_at,
                        "updated_at"        => $product->updated_at
                    ];
                }),
                "filters"       => [
                    "category"   => $categories->map(function ($category) {
                        return [
                            "id"   => $category->id,
                            "name" => $category->name,
                            "slug" => $category->slug
                        ];
                    }),
                    "sort_price" => [
                        "average_price" => roundToTwoSignificantDigits($averagePrice),
                        "max_price"     => roundToTwoSignificantDigits($products->max('regular_price') - $averagePrice * 0.5),
                        "min_price"     => roundToTwoSignificantDigits($products->min('regular_price') + $averagePrice * 0.5)
                    ],
                    "shop"       => $products->pluck('shop')->unique('id')->values()->map(function ($shop) {
                        return [
                            "id"   => $shop->id,
                            "name" => $shop->name
                        ];
                    }),
                    "supplier"   => $products->pluck('supplier')->unique('id')->values()->map(function ($supplier) {
                        return [
                            "id"   => $supplier->id,
                            "name" => $supplier->name
                        ];
                    })
                ]
            ];

            return jsonResponse($response, 200, "Get products of category successfully");
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }
}
