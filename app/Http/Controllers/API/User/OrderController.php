<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\AddReasonCancelRequest;
use App\Models\Order;
use Exception;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{


    /**
     * Lấy đơn hàng dựa trên người dùng
     *
     * @param $userId
     * @return JsonResponse
     */
    public function getOrderUser($userId): JsonResponse
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
            ])->where('user_id', $userId)->orderBy('id', 'desc')->get();

            $response = $orders->map(function ($order) {
                return [
                    'id' => $order->id,
                    'code' =>$order->code,
                    'status' => $order->order_status->status_name,
                    'full_name' => $order->user->full_name,
                    'shipping_unit' => $order->shipping_unit,
                    'shipping_fee' => $order->shipping_fee,
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
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id)
    {
        try {
            $order = Order::with([
                'order_detail.shop',
                'order_detail.product',
                'user:id,full_name,phone',
                'order_status:id,status_name',
                'payment_method:id,method_name',
                'shipping_address:id,street,district,city',
            ])->where('id', $id)->first();

            if (!$order) {
                return jsonResponse(null, 204, 'No order found');
            }

            $response = [
                'id' => $order->id,
                'code' =>$order->code,
                'status' => $order->order_status->status_name,
                'full_name' => $order->user->full_name,
                'shipping_unit' => $order->shipping_unit,
                'street' => $order->shipping_address->street,
                'district' => $order->shipping_address->district,
                'city' => $order->shipping_address->city,
                'delivery_date' => $order->delivery_date,
                'shipping_fee' => $order->shipping_fee,
                'created_at' => $order->created_at,
                'grand_total' => $order->total_price,
                'user' => $order->user,
                'order_item' => $order->order_detail->map(function ($order_detail) {
                    return [
                        'shop_id' => $order_detail->shop->id,
                        'shop_name' => $order_detail->shop->name,
                        'shop_image' => $order_detail->shop->avatar,
                        'product' => [
                            'product_id' => $order_detail->id,
                            'product_name' => $order_detail->product_name,
                            'product_image' => $order_detail->product_image,
                            'product_quantity' => $order_detail->product_quantity,
                            'product_price' => $order_detail->product_price,
                            'product_sale' => $order_detail->product->sale_price,
                            'product_sku' => $order_detail->product->sku,
                        ],
                    ];
                })->values(),
                'payment_method' => $order->payment_method,
             
            ];

            return jsonResponse($response, 200, "Successfully retrieved the order");
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }

    }


    /**
     *
     * Thêm lý do hủy đơn vào đơn hàng
     *
     * @param AddReasonCancelRequest $request
     * @return JsonResponse
     */
    public function addReasonCancel(AddReasonCancelRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $orderId = $data['order_id'];
            $addReasonCancel = Order::findOrFail($orderId)->update([
                'reason_cancel_id' => $data['reason_cancel_id'],
                'order_status_id' => 4
            ]);
            return jsonResponse($addReasonCancel, 200, 'Thêm lý do hủy đơn thành công');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Đã xảy ra lỗi');
        }
    }
}
