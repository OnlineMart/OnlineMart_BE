<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class RegisterRequest extends BaseRequest
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
            'full_name'        => 'required|string|min:3|max:255',
            'email'            => 'required|email|max:255|unique:users,email',
            'phone'            => 'nullable|numeric|digits_between:10,11|unique:users,phone',
            'password'         => 'required|string|min:6',
            'confirm_password' => 'required|string|same:password',
            'type'             => 'nullable|string|in:user,adminShop,superAdmin'
        ];
    }

    public function messages(): array
    {
        return [
            'required'       => 'The :attribute field is required.',
            'string'         => 'The :attribute must be a string.',
            'max'            => 'The :attribute may not be greater than :max characters.',
            'email'          => 'The :attribute must be a valid email address.',
            'unique'         => 'The :attribute has already been taken.',
            'min'            => 'The :attribute must be at least :min characters.',
            'same'           => 'The :attribute and :other must match.',
            'in'             => 'The :attribute must be one of the following types: :values',
            'numeric'        => 'The :attribute must be a number.',
            'digits_between' => 'The :attribute must be between :min and :max digits.'
        ];
    }

    public function attributes(): array
    {
        return [
            'full_name'        => 'Full name',
            'email'            => 'Email',
            'password'         => 'Password',
            'confirm_password' => 'Confirm password'
        ];
    }

}
