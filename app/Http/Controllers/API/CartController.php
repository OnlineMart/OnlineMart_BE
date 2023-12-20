<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\AddToCartRequest;
use App\Http\Requests\Cart\CartRequestUpdate;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $data = Cart::with('cartItems')->get();

            return jsonResponse($data, 200, 'Get data successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AddToCartRequest $request
     *
     * @return JsonResponse
     */
    public function store(AddToCartRequest $request): JsonResponse
    {
        try {
            $user = auth()->user();
            $cart = $user->cart;

            $validatedData = $request->validated();
            $product       = Product::findOrFail($validatedData['id']);

            if (!$cart) {
                $cart = Cart::create([
                    'token'   => Str::random(40),
                    'status'  => '0',
                    'user_id' => $user->id,
                ]);
            }
            if (isset($validatedData['productVariantValue'])) {
                $name = $validatedData['productName'] . ' -- ' . $validatedData['productVariantValue'];
            } else {
                $name = $validatedData['productName'];
            }

            $cartItem = $cart->cartItems()->where('product_id', $validatedData['id'])->first();
            if ($cartItem) {
                $cartItem->quantity += $validatedData['cartQuantity'];
                $cartItem->save();
            } else {
                $cartItem = $cart->cartItems()->create([
                    'name'       => $name,
                    'thumbnail'  => $validatedData['productImage'],
                    'price'      => $validatedData['currentPrice'],
                    'quantity'   => $validatedData['cartQuantity'],
                    'SKU'        => $product->sku,
                    'is_checked' => '0',
                    'product_id' => $validatedData['id'],
                    'shop_id'    => $product->shop_id,
                ]);
            }

            return jsonResponse($cartItem, 200, 'Add to cart successfully!');
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $userId
     *
     * @return JsonResponse
     */
    public function show(int $userId): JsonResponse
    {
        try {
            $cart = User::with(['cart.cartItems.shop'])->findOrFail($userId);

            $groupedItems = [];
            foreach ($cart->cart->cartItems as $item) {
                $shop   = $item->shop;
                $shopId = $shop->id;

                if (!isset($groupedItems[$shopId])) {
                    $groupedItems[$shopId] = [
                        'shop_id'   => $shopId,
                        'shop_name' => $shop->name,
                        'items'     => [],
                    ];
                }

                $groupedItems[$shopId]['items'][] = [
                    'id'            => $item->id,
                    'name'          => $item->name,
                    'thumbnail_url' => $item->thumbnail,
                    'price'         => $item->price,
                    'regular_price' => $item->product->regular_price,
                    'quantity'      => $item->quantity,
                    'sku'           => $item->SKU,
                    'is_checked'    => $item->is_checked,
                    'product_id'    => $item->product_id,
                    'cart_id'       => $item->cart_id,
                    'created_at'    => $item->created_at,
                    'updated_at'    => $item->updated_at,
                ];
            }

            $data = array_values($groupedItems);

            return jsonResponse($data, 200, 'Get data successfully');
        } catch (ModelNotFoundException $e) {
            return jsonResponse(null, 404, 'User not found');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    public function getCheckOutItem(int $userId): JsonResponse
    {
        try {
            $cart = User::with(['cart.cartItems.shop'])->findOrFail($userId);

            $checkedItems = $cart->cart->cartItems->where('is_checked', CartItem::CHECKED);

            $groupedItems = $checkedItems->groupBy('shop.id')->map(function (Collection $items, $shopId) {
                return [
                    'shop_id'   => $shopId,
                    'shop_name' => $items->first()->shop->name,
                    'items'     => $items->map(function ($item) {
                        return [
                            'id'            => $item->id,
                            'name'          => $item->name,
                            'thumbnail_url' => $item->thumbnail,
                            'price'         => $item->price,
                            'regular_price' => $item->product->regular_price,
                            'quantity'      => $item->quantity,
                            'sku'           => $item->SKU,
                            'is_checked'    => $item->is_checked,
                            'product_id'    => $item->product_id,
                            'cart_id'       => $item->cart_id,
                            'created_at'    => $item->created_at,
                            'updated_at'    => $item->updated_at,
                        ];
                    }),
                ];
            });

            $data = $groupedItems->values()->all();

            return jsonResponse($data, 200, 'Get data successfully');
        } catch (ModelNotFoundException $e) {
            return jsonResponse(null, 404, 'User not found');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    public function getRecentlyItem(int $userId): JsonResponse
    {
        try {
            $cart = User::findOrFail($userId)->cart;
            if (!$cart) {
                return jsonResponse(null, 200, 'Cart is not found');
            }

            $recentItem = $cart->cartItems()->orderByDesc('created_at')->get();

            $data = $recentItem->map(function ($item) {

                return [
                    'id'            => $item->id,
                    'name'          => $item->name,
                    'price'         => $item->price,
                    'thumbnail_url' => $item->thumbnail,
                    'sku'           => $item->SKU,
                    'quantity'      => $item->quantity,
                    'product_id'    => $item->product_id,
                    'cart_id'       => $item->cart_id,
                    'created_at'    => $item->created_at
                ];
            })->toArray();

            return jsonResponse($data, 200, 'Get recently items successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    public function updateCheckedItem(int $cartItemId): JsonResponse
    {
        try {
            $item = CartItem::findOrFail($cartItemId);

            $item->update([
                'is_checked' => $item->is_checked === CartItem::UNCHECKED ? CartItem::CHECKED : CartItem::UNCHECKED,
            ]);

            return jsonResponse($item, 200, 'Update checked items successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CartRequestUpdate $request
     * @param int               $cartItemId
     *
     * @return JsonResponse
     */
    public function update(CartRequestUpdate $request, int $cartItemId): JsonResponse
    {
        try {
            $cartItem = CartItem::findOrFail($cartItemId);
            $data     = $request->validated();

            if ($data['quantity'] === '0') {
                CartItem::destroy($cartItemId);
                return jsonResponse($cartItem, 200, 'Cart item removed successfully!');
            }

            $cartItem->update([
                'quantity' => $data['quantity'],
            ]);

            return jsonResponse($cartItem, 200, 'Cart item updated successfully!');
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $userId
     *
     * @return JsonResponse
     */
    public function destroy(int $userId): JsonResponse
    {
        try {
            $cart = User::findOrFail($userId)->cart;

            if (!$cart) {
                return jsonResponse(null, 200, 'Cart is not found');
            }

            if ($cart->cartItems->isEmpty()) {
                return jsonResponse(null, 200, 'Cart is empty');
            }

            $cart->cartItems()->delete();

            return jsonResponse(null, 200, 'Delete cart items successfully');
        } catch (ModelNotFoundException $e) {
            return jsonResponse(null, 404, 'User not found');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    public function updateCheckedItemShop(int $shopId, string $desiredState): JsonResponse
    {
        try {
            $user      = Auth::user();
            $cartItems = $user->cart->cartItems()->where('shop_id', $shopId)->get();

            foreach ($cartItems as $cartItem) {
                $cartItem->update([
                    'is_checked' => $desiredState,
                ]);
            }

            return jsonResponse($cartItems, 200, 'Update all items of shop successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    public function updateCheckedAll(int $userId, string $desiredState): JsonResponse
    {
        try {
            $user      = Auth::user();
            $cartItems = $user->cart->cartItems()->get();

            foreach ($cartItems as $cartItem) {
                $cartItem->update([
                    'is_checked' => $desiredState,
                ]);
            }

            return jsonResponse($cartItems, 200, 'Update all items successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }


    /**
     * Xoá duy nhất 1 sản phẩm trong giỏ hàng
     *
     * @param int $cartItemId
     *
     * @return JsonResponse
     */
    public function singleDelete(int $cartItemId): JsonResponse
    {
        try {
            $item = CartItem::findOrFail($cartItemId);

            $item->delete();

            return jsonResponse($item, 200, 'Delete cart item successfully');
        } catch (ModelNotFoundException $e) {
            return jsonResponse(null, 404, 'Item not found');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }
}
