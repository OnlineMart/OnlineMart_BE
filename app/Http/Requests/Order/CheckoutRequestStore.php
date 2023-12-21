<?php

namespace App\Http\Requests\Order;

use App\Http\Requests\BaseRequest;

class CheckoutRequestStore extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name'                  => 'required|string|max:255',
            'code'                  => 'required|string|max:255',
            'phone'                 => 'required|string|max:20',
            'street'                => 'required|string|max:255',
            'ward'                  => 'required|string|max:255',
            'district'              => 'required|string|max:255',
            'city'                  => 'required|string|max:255',
            'shipping_unit'         => 'required|string|max:255',
            'shipping_fee'          => 'required|integer',
            'delivery_date'         => 'required|date_format:Y-m-d\TH:i:s\Z',
            'transaction_status'    => 'required|integer',
            'transaction_type'      => 'required|integer',
            'user_id'               => 'required|integer',
            'payment_method'        => 'required|integer',
            'total_price'           => 'required|numeric',
            'items'                 => 'required|array',
            'items.*.cart_id'       => 'required|integer',
            'items.*.created_at'    => 'required|date_format:Y-m-d\TH:i:s.u\Z',
            'items.*.id'            => 'required|integer',
            'items.*.is_checked'    => 'required|string|in:0,1',
            'items.*.name'          => 'required|string|max:255',
            'items.*.price'         => 'required|numeric',
            'items.*.product_id'    => 'required|integer',
            'items.*.quantity'      => 'required|integer',
            'items.*.regular_price' => 'required|numeric',
            'items.*.shop_id'       => 'required|integer',
            'items.*.sku'           => 'required|string|max:255',
            'items.*.thumbnail_url' => 'required|string|max:255',
            'items.*.updated_at'    => 'required|date_format:Y-m-d\TH:i:s.u\Z',
        ];
    }

    public function messages(): array
    {
        return [
            'required'    => 'The :attribute field is required.',
            'string'      => 'The :attribute field must be a string.',
            'max'         => 'The :attribute field must not exceed :max characters.',
            'date_format' => 'The :attribute field must be in the format :format.',
            'integer'     => 'The :attribute field must be an integer.',
            'numeric'     => 'The :attribute field must be a number.',
            'in'          => 'The selected :attribute is invalid.',
        ];
    }
}
