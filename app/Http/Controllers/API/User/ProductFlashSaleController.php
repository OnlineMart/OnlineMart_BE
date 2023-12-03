<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\JsonResponse;

class ProductFlashSaleController extends Controller
{

    /**
     * Lấy danh sách sản phẩm trang chủ
     * @return JsonResponse
     */
    public function getAllFlashsaleProduct()
    {
        try {
            $product = Product::with([
                'product_media:id,product_id,media,is_main',
                'shop:id,name,avatar,rating,followed',
                'supplier:id,name',
                'variants',
                'variants.values'
            ])
                ->where('status', Product::SELLING)
                ->where('sale_price', '>', 0)
                ->orderBy('id', 'desc')
                ->get();
            if ($product->isEmpty()) {
                return jsonResponse([], 404, 'Product not found');
            }

            $response = $product->map(function ($product) {
                return $this->formatDataProductList($product);
            });

            return jsonResponse($response, 200, 'Get all flashsale products successfully');
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
        $isSale       = $product->sale_price > 0;
        $checkVariant = $product->variants->isNotEmpty();

        $price = 0;

        if ($checkVariant) {
            $regular_price = $product->variants->first()->values->first()->regular_price;
            $sale_price    = $product->variants->first()->values->first()->sale_price;

            $discount_rate  = $isSale ? 100 - (($sale_price / $regular_price) * 100) : 0;
            $discount_price = $isSale ? $regular_price - $sale_price : 0;

            $price = $isSale ? $sale_price : $regular_price;
        } else {
            $regular_price  = $product->regular_price;
            $sale_price     = $product->sale_price;
            $discount_rate  = $isSale ? 100 - (($sale_price / $regular_price) * 100) : 0;
            $discount_price = $isSale ? $regular_price - $sale_price : 0;

            $price = $isSale ? $sale_price : $regular_price;
        }

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
