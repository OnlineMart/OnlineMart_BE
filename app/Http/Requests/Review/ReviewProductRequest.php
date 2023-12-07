<?php

namespace App\Http\Requests\Review;

use App\Http\Requests\BaseRequest;

class ReviewProductRequest extends BaseRequest
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
            'images' => 'nullable',
            'images.*' => 'nullable|file|max:2048',
            'product_id' => 'required',
            'order_id'  => 'required',
            'content' => 'string',
            'rating' => 'min:0',
            'agree' =>'nullable|string',
            'disagree' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute không được để trống.',
            'string' => ':attribute phải là chuỗi.',
        ];
    }

    public function attributes(): array
    {
        return [
            'content' => 'Nội dung',
            'image' => 'Ảnh',
            'rating' => 'Đánh giá',
            'agree' => 'Đồng ý',
            'order_id'  => 'Mã đơn hàng',
            'disagree' => 'Không đồng ý'
        ];
    }
}
