<?php

namespace App\Http\Requests\Order;

use App\Http\Requests\BaseRequest;

class AddReasonCancelRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Set this to true if authorization is required
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'reason_cancel_id' => 'required',
            'order_id' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống.'
        ];
    }

    /**
     * Get the custom attribute names for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function attributes()
    {
        return [
            'reason_cancel_id' => 'Mã hủy đơn',
            'order_id' => 'Mã đơn hàng'
        ];
    }
}