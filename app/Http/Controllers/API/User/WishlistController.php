<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wishlist\WishlistRequestStore;
use App\Models\User;
use App\Models\Wishlist;
use Exception;
use Illuminate\Http\JsonResponse;

class WishlistController extends Controller
{

    /**
     * Lấy danh sách sản phẩm yêu thích của user
     *
     * @param int $userId
     *
     * @return JsonResponse
     */
    public function getUserWishlist(int $userId): JsonResponse
    {
        try {
            $user      = User::find($userId);
            $data      = [];
            $wishlists = Wishlist::where('user_id', $userId)
                ->with('product')
                ->get();
            foreach ($wishlists as $wishlist) {
                $product = $wishlist->product;
                $product->load([
                    'product_media:id,product_id,media,is_main',
                ]);
                $values = $this->calculateProductValues($product);

                $data[] = [
                    "id"             => $wishlist->id,
                    "product_id"     => $wishlist->product_id,
                    "name"           => $product->name,
                    "slug"           => $product->slug,
                    "thumbnail_url"  => $product->product_media->firstWhere('is_main', true)->media ?: null,
                    'current_price'  => $values['price'],
                    'is_sale'        => $values['isSale'],
                    'regular_price'  => $values['regular_price'],
                    'sale_price'     => $values['sale_price'],
                    "discount_rate"  => $values['discount_rate'],
                    "discount_price" => $values['discount_price'],
                    "rating"         => $product->rating,
                ];
            }
            return jsonResponse($data, 200, 'Get wishlist successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
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
        $regular_price  = $product->regular_price;
        $sale_price     = $product->sale_price;
        $price          = $isSale ? $sale_price : $regular_price;
        $discount_rate  = $isSale ? 100 - (($sale_price / $regular_price) * 100) : 0;
        $discount_price = $isSale ? $regular_price - $sale_price : 0;

        return [
            "isSale"         => $isSale,
            "regular_price"  => $regular_price,
            "sale_price"     => $sale_price,
            "price"          => $price,
            "discount_rate"  => round($discount_rate, $roundedNumber),
            "discount_price" => $discount_price
        ];
    }

    /**
     * Thêm sản phẩm yêu thích
     *
     * @param WishlistRequestStore $request
     * @param int                  $productId
     *
     * @return JsonResponse
     */
    public function storeWishlist(WishlistRequestStore $request, int $productId): JsonResponse
    {
        try {
            $data     = $request->validated();
            $wishlist = Wishlist::where('product_id', $productId)
                ->where('user_id', $data['user_id'])
                ->first();
            if ($wishlist) {
                return jsonResponse(null, 409, 'Product already in wishlist');
            }
            $productWishlist = Wishlist::create([
                'product_id' => $productId,
                'user_id'    => $data['user_id']
            ]);
            return jsonResponse($productWishlist, 200, 'Create data successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Xóa một sản phẩm yêu thích
     *
     * @param int $wishlistId
     *
     * @return JsonResponse
     */
    public function destroy(int $wishlistId): JsonResponse
    {
        try {
            Wishlist::where('id', $wishlistId)->delete();
            return jsonResponse(null, 200, 'Product wishlist deleted successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }
}
