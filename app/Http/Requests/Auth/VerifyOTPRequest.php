<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class VerifyOTPRequest extends BaseRequest
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
            "otp" => "required|string|min:6|max:6"
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
            "otp.required" => "OTP is required",
            "otp.string"   => "OTP must be string",
            "otp.min"      => "OTP must be 6 characters",
            "otp.max"      => "OTP must be 6 characters"
        ];
    }
}
