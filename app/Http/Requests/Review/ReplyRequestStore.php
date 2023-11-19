<?php

namespace App\Http\Requests\Review;

use App\Http\Requests\BaseRequest;

class ReplyRequestStore extends BaseRequest
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
            'content' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute không được để trống.',
            'string'   => ':attribute phải là chuỗi.',
        ];
    }

    public function attributes(): array
    {
        return [
            'content' => 'Nội dung',
        ];
    }
}
