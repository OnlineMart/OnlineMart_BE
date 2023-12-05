<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class ResetPasswordRequest extends BaseRequest
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
            'address_receiver' => 'required',
            'password' => 'required|min:6|max:20|same:confirm_password',
            'confirm_password' => 'required|same:password'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc phải nhập',
            'email' => ':attribute phải đúng định dạng email',
            'min' => ':attribute phải có ít nhất :min ký tự',
            'max' => ':attribute phải có nhiều nhất :max ký tự',
            'same' => ':attribute phải giống với :other',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function attributes()
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
            'confirm_password' => 'Confirm password'
        ];
    }
}
