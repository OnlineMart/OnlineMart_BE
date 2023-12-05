<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class SendVerificationRequest extends BaseRequest
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
            "address_receiver" => "required|string"
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
            "address_receiver.required" => "Address receiver is required",
            "address_receiver.string"   => "Address receiver must be string"
        ];
    }
}
