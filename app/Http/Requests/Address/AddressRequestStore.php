<?php

namespace App\Http\Requests\Address;

use App\Http\Requests\BaseRequest;

class AddressRequestStore extends BaseRequest
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
        return [
            'name'      => 'required|string|min:6|unique:user_addresses,name',
            'phone'     => 'required|string|unique:user_addresses,phone',
            'city'      => 'required|string',
            'district'  => 'required|string',
            'ward'      => 'required|string',
            'user_id'   => 'required|numeric',
            'is_default' => 'required|in:0,1',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages(): array
    {
        return [
            'required'  => ':attribute không được để trống.',
            'string'    => ':attribute phải là chuỗi.',
            'min'       => ':attribute có độ dài tối thiểu 6 ký tự.',
            'unique'    => ':attribute đã tồn tại.',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function attributes(): array
    {
        return [
            'name'     => 'Họ và tên',
            'phone'    => 'Số điện thoại',
        ];
    }
}
