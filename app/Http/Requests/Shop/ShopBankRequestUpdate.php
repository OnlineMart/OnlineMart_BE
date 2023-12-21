<?php

namespace App\Http\Requests\Shop;

use App\Http\Requests\BaseRequest;

class ShopBankRequestUpdate extends BaseRequest
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
            'name_bank' => 'sometimes|required|string|max:255',
            'user_name_bank' => 'sometimes|required|string|max:255|',
            'number_bank' => 'sometimes|required|numeric|digits_between:9,15',
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
            'string' => ':attribute phải là chuỗi',
            'unique' => ':attribute đã tồn tại',
            'numeric' => ':attribute phải là số',
            'digits_between' => ':attribute phải có độ dài từ :min đến :max số',
            'max' => ':attribute có độ dài tối đa :max ký tự',
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
            'name_bank' => 'Tên ngân hàng',
            'user_name_bank' => 'Tên chủ tài khoản',
            'number_bank' => 'Số tài khoản',
        ];
    } 
}