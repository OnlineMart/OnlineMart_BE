<?php

namespace App\Http\Requests\Shop;

use App\Http\Requests\BaseRequest;
use App\Models\Shop;
use App\Models\User;

class ShopBoothRequestUpdate extends BaseRequest
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
        $shop = Shop::where('id', $shopId)->firstOrFail();
        $user = User::where('shop_id', $shopId)->firstOrFail();
        return [
            'name' => 'sometimes|required|string|min:6|max:255|unique:shops,name,' . $shop->id,
            'url'   => 'sometimes|required|string|max:255|unique:shops,url,' . $shop->id,
            'name_manager' => 'sometimes|required|string|min:6|max:255',
            'avatar' => 'nullable|image',
            'email_manager' => 'sometimes|required|string|email|unique:users,email,' . $user->id,
            'phone_manager' => 'sometimes|required|numeric|regex:/^[0-9]{9,10}$/',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name' => 'Tên cửa hàng',
            'url'   => 'URL gian hàng',
            'avatar' => 'Logo gian hàng',
            'name_manager' => 'Họ tên người quản lý',
            'email_manager' => 'Địa chỉ email',
            'phone_manager' => 'Số điện thoại',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => 'Trường :attribute là bắt buộc.',
            'string'   => 'Trường :attribute phải là một chuỗi.',
            'regex'    => 'Trường :attribute không hợp lệ.',
            'image'    => 'Trường :attribute phải là hình ảnh.',
            'max'      => 'Trường :attribute không được lớn hơn :max ký tự.',
        ];
    }
}