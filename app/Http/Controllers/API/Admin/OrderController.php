<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Exception;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('permission:View orders', ['only' => ['show', 'index']]);
        $this->middleware('permission:Create order', ['only' => ['store']]);
        $this->middleware('permission:Update order', ['only' => ['update']]);
        $this->middleware('permission:Delete order', ['only' => ['destroy', 'deleteVoucher']]);
    }


    /**
     * Lấy đơn hàng theo shopId
     *
     * @param
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {

        $shopId = auth()->user()->id;

        try {
            $orders = Order::with([
                'order_detail',
                'order_detail.shop',
                'order_detail.product',
                'user:id,full_name,phone',
                'order_status:id,status_name',
                'payment_method:id,method_name',
                'shipping_address:id,street,district,city',
            ])->where('shop_id',$shopId)->orderByDesc('id')->get();

            if ($orders->isEmpty()) {
                return jsonResponse([], 404, 'No orders');
            }
            $response = $orders->map(function ($order) {
                return [
                    'id' => $order->id,
                    'status' => $order->order_status->status_name,
                    'full_name' => $order->user->full_name,
                    'code' => $order->code,
                    'shipping_unit' => $order->shipping_unit,
                    'shipping_fee' =>$order->shipping_fee,
                    'street' => $order->shipping_address->street,
                    'district' => $order->shipping_address->district,
                    'city' => $order->shipping_address->city,
                    'delivery_date' => $order->delivery_date,
                    'created_at' => $order->created_at,
                    'grand_total' => $order->total_price,
                    'user' => $order->user,
                    'order_item' => $order->order_detail->map(function ($order_detail) {
                        return [
                            'shop_id' => $order_detail->shop->id,
                            'shop_name' => $order_detail->shop->name,
                            'product' => [
                                'product_name' => $order_detail->product_name,
                                'product_image' => $order_detail->product_image,
                                'product_quantity' => $order_detail->product_quantity,
                                'product_price' => $order_detail->product_price,
                                'product_sale' => $order_detail->product->sale_price,
                                'product_sku' => $order_detail->product->sku,
                            ],
                        ];
                    })->values(),
                ];
            })->values();

            return jsonResponse($response, 200, "Get orders successfully");
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }

    /**
     * Lấy chi tiết đơn hàng theo shopId
     *
     * @param $shopId
     * @return JsonResponse
     */
    public function getOrderShop($shopId): JsonResponse
    {
       try {
            $orders = Order::with([
                'order_detail',
                'order_detail.shop',
                'order_detail.product',
                'user:id,full_name,phone',
                'order_status:id,status_name',
                'payment_method:id,method_name',
                'shipping_address:id,street,district,city',
            ])->where('shop_id',$shopId)->orderByDesc('id')->get();

            if ($orders->isEmpty()) {
                return jsonResponse([], 404, 'No orders');
            }
            $response = $orders->map(function ($order) {
                return [
                    'id' => $order->id,
                    'code' => $order->code,
                    'status' => $order->order_status->status_name,
                    'full_name' => $order->user->full_name,
                    'shipping_unit' => $order->shipping_unit,
                    'shipping_fee'  => $order->shipping_fee,
                    'street' => $order->shipping_address->street,
                    'district' => $order->shipping_address->district,
                    'city' => $order->shipping_address->city,
                    'delivery_date' => $order->delivery_date,
                    'created_at' => $order->created_at,
                    'grand_total' => $order->total_price,
                    'user' => $order->user,
                    'order_item' => $order->order_detail->map(function ($order_detail) {
                        return [
                            'shop_id' => $order_detail->shop->id,
                            'shop_name' => $order_detail->shop->name,
                            'product' => [
                                'product_name' => $order_detail->product_name,
                                'product_image' => $order_detail->product_image,
                                'product_quantity' => $order_detail->product_quantity,
                                'product_price' => $order_detail->product_price,
                                'product_sale' => $order_detail->product->sale_price,
                                'product_sku' => $order_detail->product->sku,
                            ],
                        ];
                    })->values(),
                ];
            })->values();

            return jsonResponse($response, 200, "Get orders successfully");
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }

    /**
     * Lấy chi tiết đơn hàng
     *
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        try {
            $orders = Order::with([
                'order_detail',
                'order_detail.shop',
                'order_detail.product',
                'user:id,full_name,phone',
                'order_status:id,status_name',
                'payment_method:id,method_name',
                'shipping_address:id,street,district,city',
            ])->where('id', $id)->first();

            $response = [
                'id' => $orders->id,
                'code' =>$orders->code,
                'status' => $orders->order_status->status_name,
                'full_name' => $orders->user->full_name,
                'shipping_unit' => $orders->shipping_unit,
                'shipping_fee' => $orders->shipping_fee,
                'street' => $orders->shipping_address->street,
                'district' => $orders->shipping_address->district,
                'city' => $orders->shipping_address->city,
                'delivery_date' => $orders->delivery_date,
                'created_at' => $orders->created_at,
                'grand_total' => $orders->total_price,
                'user' => $orders->user,
                'order_item' => $orders->order_detail->map(function ($order_detail) {
                    $totalMoney = $order_detail->product_quantity * $order_detail->product_price - $order_detail->sale_price;
                    return [
                        'shop_id' => $order_detail->shop->id,
                        'shop_name' => $order_detail->shop->name,
                        'product' => [
                            'id'          => $order_detail->id,
                            'product_name' => $order_detail->product_name,
                            'product_image' => $order_detail->product_image,
                            'product_quantity' => $order_detail->product_quantity,
                            'product_price' => $order_detail->product_price,
                            'product_sale' => $order_detail->product->sale_price,
                            'product_sku' => $order_detail->product->sku,
                            'total_money' => $totalMoney
                        ],
                    ];
                })->values(),
            ];
            return jsonResponse($response, 200, "Get orders successfully");
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }
}
