<?php

namespace App\Http\Requests\Shop;

use App\Http\Requests\BaseRequest;

class ManagerShopAccpectRequest extends BaseRequest
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
            'reason_accpect' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'reason_accpect.required' => 'Vui lòng nhập lý do duyệt.',
        ];
    }
}