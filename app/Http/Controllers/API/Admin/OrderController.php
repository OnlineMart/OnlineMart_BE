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
     *
     *
     * @param
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $orders = Order::with([
                'order_detail',
                'order_detail.shop',
                'order_detail.product',
                'user:id,full_name,phone',
                'voucher:id,discount,max_discount_amount',
                'order_status:id,status_name',
                'payment_method:id,method_name',
                'shipping_address:id,street,district,city',
            ])->get();

            if ($orders->isEmpty()) {
                return jsonResponse([], 404, 'No orders');
            }
            $response = $orders->map(function ($order) {
                return [
                    'id' => $order->id,
                    'status' => $order->order_status->status_name,
                    'full_name' => $order->user->full_name,
                    'shipping_unit' => $order->shipping_unit,
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

    // /**
    //  * Tạo 1 đơn hàng
    //  *
    //  * @param  OrderRequestStore  $request
    //  * @return JsonResponse
    //  */
    // public function store(OrderRequestStore $request): JsonResponse
    // {
    //     dd($request->product_id);
    //     try{
    //         $data = $request->validated();

    //         $order = Order::create([
    //             'product_id' => $data['product_id'],
    //             'user_id' => $data['user_id'],
    //             'voucher_id' => $data['voucher_id'],
    //             'order_status_id' => $data['order_status_id'],
    //             'payment_method_id' => $data['payment_method_id'],
    //             'shipping_address_id' => $data['shipping_address_id'],
    //             'delivery_date' => $data['delivery_date'],
    //             'total_price' => $data['total_price'],
    //             'shipping_unit' => $data['shipping_unit'],
    //         ]);
    //         return jsonResponse($order,200,'Order created successfully');
    //     } catch(Exception $e){
    //         return jsonResponse($e->getMessage(),500,'Something went wrong');
    //     }
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
