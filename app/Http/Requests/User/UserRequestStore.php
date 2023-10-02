<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class UserRequestStore extends BaseRequest
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
            'full_name' => 'nullable|string|min:2|max:255',
            'user_name' => 'nullable|string|min:2|max:255',
            'email'     => 'nullable|string|email|max:255|unique:users,email',
            'password'  => 'nullable|string|min:6|max:255',
            'birthday'  => 'nullable|string|min:2|max:255|date|before_or_equal:today',
            'gender'    => 'in:0,1',
            'phone'     => 'nullable|string|min:2|max:255',
            'avatar'    => 'nullable|image|max:2048',
            'address'   => 'nullable|string|min:2|max:255'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute is required',
            'in'       => ':attribute is invalid',
            'email'    => ':attribute is invalid',
            'unique'   => ':attribute already exists',
            'in'       => ':attribute is invalid',
            'min'      => ':attribute is too short',
            'max'      => ':attribute is too long'
        ];
    }

    public function attributes()
    {
        return [
            'full_name' => 'Full name',
            'user_name' => 'User name',
            'email'     => 'Email',
            'password'  => 'Password',
            'birthday'  => 'Birthday',
            'gender'    => 'Gender',
            'phone'     => 'Phone',
            'avatar'    => 'Avatar'
        ];
    }
}
