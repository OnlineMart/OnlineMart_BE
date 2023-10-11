<?php

namespace App\Http\Requests\Shop;

use App\Http\Requests\BaseRequest;

class ShopRequestUpdate extends BaseRequest
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
        $shopId = $this->route()->parameter('shop');

        return [
            'name'        => 'required|string|min:6|max:255|unique:shops,name,' . $shopId->id,
            'avatar'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email'       => 'required|string|email|unique:shops,email,' . $shopId->id,
            'phone'       => ['nullable', 'numeric', 'regex:/^[0-9]{9,10}$/'],
            'address'     => 'required|string|max:255',
            'description' => 'nullable|string',
            'rating'      => 'nullable|integer',
            'status'      => 'required|in:0,1',
            'user_id'     => 'required|exists:users,id',
        ];
    }

    public function attributes(): array
    {
        return [
            'name'        => 'Shop Name',
            'avatar'      => 'Avatar Image',
            'email'       => 'Email Address',
            'phone'       => 'Phone Number',
            'address'     => 'Shop Address',
            'description' => 'Shop Description',
            'rating'      => 'Shop Rating',
            'status'      => 'Shop Status',
            'user_id'     => 'User ID',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'The :attribute field is required.',
            'string'   => 'The :attribute must be a string.',
            'regex'    => 'The :attribute is invalid.',
            'max'      => 'The :attribute may not be greater than :max characters.',
            'min'      => 'The :attribute must be more than :min characters',
            'image'    => 'The :attribute must be an image file.',
            'mimes'    => 'The :attribute must be a file of type: jpeg, png, jpg, gif.',
            'email'    => 'The :attribute must be a valid email address.',
            'numeric'  => 'The :attribute must be a number.',
            'in'       => 'The :attribute must be either "0" or "1".',
            'exists'   => 'The selected :attribute is invalid.',
            'unique'   => 'The :attribute has already been taken.',
            'integer'  => 'The :attribute must be an integer.',
        ];
    }
}
