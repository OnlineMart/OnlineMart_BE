<?php

namespace App\Http\Requests\Supplier;

use App\Http\Requests\BaseRequest;

class SupplierRequestUpdate extends BaseRequest
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

    /**k
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $supplierId = $this->route()->parameter('supplier')->id;
        return [
            'name'    => 'required|string|min:6|max:255',
            'email'   => 'required|email|max:255|unique:suppliers,email,' . $supplierId,
            'phone'   => 'required|string|min:2|max:255|unique:suppliers,phone,' . $supplierId,
            'address' => 'required|string|max:255',
            'code'    => 'required|string|max:255',
            'website' => 'nullable|string|max:255',
        ];
    }

    /** Get the validation rules that apply to the request.
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
        ];
    }
}
