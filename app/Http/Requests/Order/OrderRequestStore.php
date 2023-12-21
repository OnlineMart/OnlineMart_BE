<?php

namespace App\Http\Requests\Order;

use App\Http\Requests\BaseRequest;

class OrderRequestStore extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'product_id'         => 'required|exists:products,id'  ,
            'user_id'            => 'required|exists:users,id',
            'voucher_id'         => 'required|exists:vouchers,id',
            'order_status_id'    => 'required|exists:order_statuses,id',
            'payment_method_id'  => 'required|exists:payment_methods,id',
            'shipping_address_id'=> 'required|exists:shipping_address,id',
            'shop_id'            => 'required|exists:shops,id',
            'delivery_date'      => 'required|date',
            'total_price'        => 'required|numeric',
            'shipping_unit'      => 'required'
        ];
        return $rules;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống.',
            'unique'   => ':attribute đã tồn tại.',
            'exists'   => ':attribute không tồn tại.',
            'numeric'  => ':attribute phải là số.',
            'array'    => ':attribute phải là mảng.',
            'date'     => ':attribute phải là định dạng ngày tháng năm'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function attributes()
    {
        return [
            'product_id'            => 'Sản phẩm',
            'user_id'               => 'Người dùng',
            'voucher_id'            => 'Mã giảm giá',
            'order_status_id'       => 'Trạng thái đơn hàng',
            'payment_method_id'     => 'Phương thức thanh toán',
            'shipping_address_id'   => 'Địa chỉ nhận hàng',
            'shop_id'               => 'Cửa hàng',
            'delivery_date'         => 'Ngày giao hàng',
            'total_price'           => 'Tổng giá trị đơn hàng',
            'shipping_unit'         => 'Đơn vị vận chuyển'
             
        ];
    }
}
