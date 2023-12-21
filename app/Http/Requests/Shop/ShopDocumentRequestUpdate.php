<?php

namespace App\Http\Requests\Shop;

use App\Http\Requests\BaseRequest;
use App\Models\User;

class ShopDocumentRequestUpdate extends BaseRequest
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
        $shopId = $this->route()->parameter('shopId');
        $user = User::where('shop_id', $shopId)->firstOrFail();
        return [
            'national_id' => 'required|numeric|digits:12|unique:shops,national_id,' . $shopId,
            'full_name' => 'sometimes|required|string|min:6|max:255|unique:users,full_name,' . $user->id,
            'email' => 'sometimes|required|string|email|unique:users,email,' . $user->id,
            'phone' => 'sometimes|required|numeric|regex:/^[0-9]{9,10}$/|unique:users,phone,' . $user->id,
            'front_side' => 'sometimes|required',
            'back_side' => 'sometimes|required',
            'portrait_photo' => 'sometimes|required',
            'address' => 'required|string|max:255',
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
            'regex' => ':attribute is invalid.',
            'image' => ':attribute phải là hình ảnh',
            'mimes' => ':attribute must be a file of type: jpeg, png, jpg, gif.',
            'numeric' => ':attribute phải là số',
            'digits' => ':attribute phải là :digits số',
            'email' => ':attribute không đúng định dạng',
            'unique' => ':attribute đã tồn tại',
            'min' => ':attribute có độ dài tối thiểu :min ký tự',

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
            'full_name' => 'Họ và tên',
            'email' => 'Email',
            'national_id' => 'Số giấy tờ tùy thân',
            'phone' => 'Số điện thoại',
            'front_side' => 'Mặt trước giấy tờ tùy thân',
            'address' => 'Địa chỉ',
            'portrait_photo' => 'Ảnh chân dung',
            'back_side' => 'Mặt sau giấy tờ tùy thân',
        ];
    }
}
