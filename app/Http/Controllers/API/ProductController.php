<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api')->except(['getCategoryProduct']);
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
                'variants'
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
                    return $this->formatDataProductList($product);
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

    /**
     * Lấy sản phẩm chi tiết
     *
     * @param Product $product
     *
     * @return JsonResponse
     */
    public function show(Product $product): JsonResponse
    {
        try {
            $product = Product::with([
                'product_media:id,product_id,media,is_main',
                'shop:id,name,avatar,rating,followed',
                'supplier:id,name',
                'variants',
                'variants.values'
            ])->findOrFail($product->id);

            if (!$product) {
                return jsonResponse([], 404, 'Product not found');
            }

            $values = $this->calculateProductValues($product);

            $response = [
                'id'                => $product->id,
                'name'              => $product->name,
                'slug'              => $product->slug,
                'current_price'     => $values['price'],
                'is_sale'           => $values['isSale'],
                'regular_price'     => $values['regular_price'],
                'sale_price'        => $values['sale_price'],
                "discount_rate"     => $values['discount_rate'],
                "discount_price"    => $values['discount_price'],
                'sku'               => $product->sku,
                'status'            => $product->status == "0" ? "disabled" : "enabled",
                'rating'            => $product->rating,
                'view_count'        => $product->view_count,
                'sold_count'        => $product->sold_count,
                'thumbnail_url'     => $product->product_media->firstWhere('is_main', true)->media ?: null,
                'gallery'           => $product->product_media->where('is_main', false)->values()->map(function ($media) {
                    return [
                        'id'    => $media->id,
                        'image' => $media->media
                    ];
                }),
                'short_description' => $product->short_description,
                'long_description'  => $product->long_description,
                'meta_title'        => $product->meta_title,
                'meta_keyword'      => $product->meta_keyword,
                'meta_description'  => $product->meta_description,
                'supplier_name'     => $product->supplier->name,
                'shop'              => $product->shop,
                'is_variant'        => $values['checkVariant'],
                'variants'          => $product->variants->map(function ($variant) {
                    return [
                        'id'     => $variant->id,
                        'name'   => $variant->variation_name,
                        'values' => $variant->values->map(function ($value) {
                            return [
                                'id'       => $value->id,
                                'label'    => $value->variation_value_name,
                                'image'    => $value->thumbnail_url,
                                'is_image' => $value->thumbnail_url ? true : false
                            ];
                        })
                    ];
                })
            ];

            return jsonResponse($response, 200, 'Product found successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }

    /**
     * Lấy danh sách sản phẩm liên quan
     *
     * @param int $productId
     *
     * @return JsonResponse
     */
    public function getRelatedProducts(int $productId): JsonResponse
    {
        try {
            $product = Product::findOrFail($productId);

            if (!$product) {
                return jsonResponse([], 404, 'Product not found');
            }

            $relatedProducts = Product::with([
                'product_media:id,product_id,media,is_main',
                'shop:id,name,avatar,rating,followed',
                'supplier:id,name',
                'variants',
                'variants.values'
            ])
                ->where('category_id', $product->category_id)
                ->where('id', '!=', $productId)
                ->where('status', Product::ENABLED)
                ->orderBy('sold_count', 'desc')
                ->limit(Product::RELATED_LIMIT)
                ->get();

            if ($relatedProducts->isEmpty()) {
                return jsonResponse([], 404, 'No related products found');
            }

            $response = $relatedProducts->map(function ($product) {
                return $this->formatDataProductList($product);
            });

            return jsonResponse($response, 200, 'Get related products successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }

    /**
     * Trả về response sản phẩm theo định dạng
     *
     * @param $product
     *
     * @return array
     */
    private function formatDataProductList($product): array
    {
        $values = $this->calculateProductValues($product);

        return [
            "id"                => $product->id,
            "name"              => $product->name,
            "slug"              => $product->slug,
            "thumbnail_url"     => $product->product_media->firstWhere('is_main', true)->media ?: null,
            'current_price'     => $values['price'],
            'is_sale'           => $values['isSale'],
            'regular_price'     => $values['regular_price'],
            'sale_price'        => $values['sale_price'],
            "discount_rate"     => $values['discount_rate'],
            "discount_price"    => $values['discount_price'],
            "sku"               => $product->sku,
            "rating"            => $product->rating,
            "view_count"        => $product->view_count,
            "sold_count"        => $product->sold_count,
            "short_description" => $product->short_description,
            "long_description"  => $product->short_description,
            "status"            => $product->status == "0" ? "disabled" : "enabled",
            "type"              => $values['checkVariant'] ? "configurable" : "simple",
            "variant_name"      => $values['checkVariant'] ? $product->variants->pluck('variation_name') : null,
            "shop_id"           => $product->shop->id,
            "supplier_id"       => $product->supplier->id,
            "created_at"        => $product->created_at,
            "updated_at"        => $product->updated_at
        ];
    }

    /**
     * Tính toán giá trị của sản phẩm (giá bán, giá gốc, giảm giá, ...)
     *
     * @param $product
     *
     * @return array
     */
    private function calculateProductValues($product, int $roundedNumber = 0): array
    {
        $isSale         = $product->sale_price > 0;
        $checkVariant   = $product->variants->isNotEmpty();
        $regular_price  = $product->regular_price;
        $sale_price     = $product->sale_price;
        $price          = $isSale ? $sale_price : $regular_price;
        $discount_rate  = $isSale ? 100 - (($sale_price / $regular_price) * 100) : 0;
        $discount_price = $isSale ? $regular_price - $sale_price : 0;

        return [
            "isSale"         => $isSale,
            "checkVariant"   => $checkVariant,
            "regular_price"  => $regular_price,
            "sale_price"     => $sale_price,
            "price"          => $price,
            "discount_rate"  => round($discount_rate, $roundedNumber),
            "discount_price" => $discount_price
        ];
    }
}
