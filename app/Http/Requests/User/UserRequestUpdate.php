<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class UserRequestUpdate extends BaseRequest
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
        $userId = $this->route('user')->id;
        return [
            'full_name'         => 'nullable|string|min:2|max:255',
            'user_name'         => 'nullable|string|min:2|max:255',
            'email'             => 'nullable|string|email|max:255|unique:users,email,' . $userId,
            'password'          => 'nullable|string|min:6|max:255',
            'confirm_password ' => 'nullable|string|min:6|max:255|same:password',
            'birthday'          => 'nullable|string|min:2|max:255|date|before_or_equal:today',
            'gender'            => 'in:0,1,2',
            'phone'             => 'nullable|string|min:2|max:255',
            'avatar'            => 'nullable|image|max:2048',
            'address'           => 'nullable|string|min:2|max:255'
        ];
    }

    public function messages()
    {
        return [
            'required'        => 'Trường :attribute là bắt buộc',
            'in'              => 'Giá trị của :attribute không hợp lệ',
            'email'           => ':attribute không hợp lệ',
            'unique'          => ':attribute đã tồn tại',
            'min'             => ':attribute quá ngắn',
            'max'             => ':attribute quá dài',
            'date'            => ':attribute không hợp lệ',
            'before_or_equal' => ':attribute phải trước hoặc bằng ngày hiện tại',
            'same'            => ':attribute không khớp',
            'image'           => ':attribute không hợp lệ',
            'mimes'           => ':attribute không hợp lệ',
            'avatar.max'      => ':attribute quá lớn'
        ];
    }

    public function attributes()
    {
        return [
            'full_name' => 'Họ và tên',
            'user_name' => 'Tên người dùng',
            'email'     => 'Email',
            'password'  => 'Mật khẩu',
            'birthday'  => 'Ngày sinh',
            'gender'    => 'Giới tính',
            'phone'     => 'Số điện thoại',
            'avatar'    => 'Ảnh đại diện',
            'address'   => 'Địa chỉ'
        ];
    }

}
