<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\API\VNPayPayment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Order\CheckoutRequestStore;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderStatus;
use App\Models\Product;
use App\Models\ShippingAddress;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class CheckOutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function checkout(Request $request): JsonResponse
    {
        try {
            $pay = new VNPayPayment();

            $data = $pay->generateUrl($request->order_code, $request->total);

            return jsonResponse($data, 200, 'Get redirect successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    public function createOrder(CheckoutRequestStore $request): JsonResponse
    {
        try {
            $data = $request->validated();

            DB::beginTransaction();
            try {
                if (isset($data['items']) && is_array($data['items'])) {
                    $groups = collect($data['items'])->groupBy('shop_id');

                    $groups = $groups->map(function ($group) {
                        return $group->sum(function ($item) {
                            return $item['quantity'] * $item['price'];
                        });
                    });

                    foreach ($groups as $shop_id => $total_price) {
                        $shippingData = [
                            'name'     => $data['name'],
                            'phone'    => $data['phone'],
                            'street'   => $data['street'],
                            'ward'     => $data['ward'],
                            'district' => $data['district'],
                            'city'     => $data['city'],
                            'user_id'  => $data['user_id'],
                        ];

                        $shippingAddress = ShippingAddress::create($shippingData);

                        $deliveryDate = Carbon::parse($data['delivery_date'])->format('Y-m-d H:i:s');

                        $orderData = [
                            'delivery_date'       => $deliveryDate,
                            'code'                => $data['code'],
                            'total_price'         => $total_price,
                            'shipping_fee'        => $data['shipping_fee'],
                            'shipping_unit'       => $data['shipping_unit'],
                            'shipping_address_id' => $shippingAddress->id,
                            'user_id'             => $data['user_id'],
                            'voucher_id'          => null,
                            'order_status_id'     => OrderStatus::STATUS_SHIPPING,
                            'shop_id'             => $shop_id,
                            'payment_method_id'   => $data['payment_method'],
                        ];


                        $order = Order::create($orderData);

                        $transaction = Transaction::create([
                            'order_id' => $order->id,
                            'user_id'  => $data['user_id'],
                            'type'     => $data['transaction_type'],
                            'status'   => Transaction::PENDING,
                        ]);

                        $items = collect($data['items'])->where('shop_id', $shop_id);

                        foreach ($items as $item) {

                            $product             = Product::findOrFail($item['product_id']);
                            $product->sold_count += 1;
                            $product->save();


                            $parts = explode('--', $item['name']);
                            if (count($parts) == 2) {
                                $variant_name = trim($parts[1]);
                            } else {
                                $variant_name = null;
                            }

                            $detail = [
                                'order_id'         => $order->id,
                                'product_id'       => $item['product_id'],
                                'shop_id'          => $item['shop_id'],
                                'product_name'     => $item['name'],
                                'product_price'    => $item['price'],
                                'product_quantity' => $item['quantity'],
                                'product_variant'  => $variant_name,
                                'product_image'    => $item['thumbnail_url'],
                            ];

                            OrderDetail::create($detail);
                        }
                    }
                }

                $user        = User::findOrFail($data['user_id']);
                $cartItemIds = array_column($data['items'], 'id');

                $cartItems = $user->cart->cartItems()->whereIn('id', $cartItemIds)->get();

                foreach ($cartItems as $cartItem) {
                    $cartItem->delete();
                }


                DB::commit();
                return jsonResponse(null, 200, 'Checkout Successfully');
            } catch (Throwable $e) {
                DB::rollBack();
                return jsonResponse($e->getMessage(), 400, 'Error');
            }

        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }

    public function updateStatusTransaction(string $order_code, string $status_code): JsonResponse
    {
        try {
            $order       = Order::where('code', $order_code)->firstOrFail();
            $transaction = Transaction::where('order_id', $order->id)->firstOrFail();

            $transaction->update([
                'status' => $status_code,
            ]);

            return jsonResponse($order, 200, 'Update status payment successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Something went wrong');
        }
    }
}
