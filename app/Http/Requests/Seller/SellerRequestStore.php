<?php

namespace App\Http\Requests\Seller;

use App\Http\Requests\BaseRequest;

class SellerRequestStore extends BaseRequest
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
            'name'        => 'required|max:255|unique:users,full_name',
            'email'       => 'required|max:255|unique:users,email',
            'phone'       => 'required|max:255|unique:users,phone',
            'password'    => 'required|min:6|max:255',
            'role'        => 'required_without:permissions|array',
            'permissions' => 'required_without:role|array'
        ];
    }

    /**
     * Get the messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages(): array
    {
        return [
            'required'         => ':attribute không được để trống',
            'max'              => ':attribute không được vượt quá :max ký tự',
            'min'              => ':attribute không được ít hơn :min ký tự',
            'unique'           => ':attribute đã tồn tại',
            'required_without' => 'Vui lòng chọn ít nhất 1 trong 2 trường :attribute hoặc :values'
        ];
    }

    /**
     * Get the attributes that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function attributes(): array
    {
        return [
            'name'        => 'Tên',
            'email'       => 'Email',
            'phone'       => 'Số điện thoại',
            'password'    => 'Mật khẩu',
            'role'        => 'Vai trò',
            'permissions' => 'Quyền',
            'values'      => 'Vai trò hoặc Quyền'
        ];
    }
}
