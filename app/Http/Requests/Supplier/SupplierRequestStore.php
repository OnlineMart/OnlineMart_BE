<?php

namespace App\Http\Requests\Supplier;

use App\Http\Requests\BaseRequest;

class SupplierRequestStore extends BaseRequest
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
    public function rules(): array
    {
        return [
            'name'    => 'required|string|min:6|max:255',
            'email'   => 'required|email|max:255|unique:suppliers,email',
            'phone'   => 'required|string|min:2|max:255|unique:suppliers,phone',
            'address' => 'required|string|max:255',
            'code'    => 'required|string|max:255',
            'shop_id' => 'required|numeric',
            'website' => 'nullable|string|max:255',
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
            'required' => ':attribute không được để trống',
            'string'   => ':attribute phải là chuỗi',
            'numeric'  => ':attribute phải là số',
            'email'    => ':attribute không đúng định dạng',
            'unique'   => ':attribute đã tồn tại',
            'min'      => ':attribute có độ dài tối thiểu :min ký tự',
            'max'      => ':attribute có độ dài tối đa :max ký tự',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function attributes(): array
    {
        return [
            'name'    => 'Tên nhà cung cấp',
            'email'   => 'Địa chỉ email',
            'code'    => 'Mã nhà cung cấp',
            'phone'   => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'shop_id' => 'Cửa hàng'
        ];
    }
}
