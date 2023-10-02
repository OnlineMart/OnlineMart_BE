<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class CategoryRequestUpdate extends BaseRequest
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
        $categoryId = $this->route()->parameter('category');
        return [
            'name'          => 'required|string',
            'slug'          => 'required|string',
            'thumbnail_url' => 'required|string',
            'parent_id'     => 'required|exists:categories,id',
            'status'        => 'required|in:0,1',
            'shop_id'       => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function messages(): array
    {
        return [
            'required' => ':attribute không được để trống.',
            'string'   => ':attribute phải là chuỗi.',
            'unique'   => ':attribute đã tồn tại.',
            'exists'   => ':attribute không tồn tại.',
            'image'    => ':attribute phải là hình ảnh.',
            'max'      => ':attribute phải nhỏ hơn 2MB.',
            'in'       => ':attribute phải là 0 hoặc 1.'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function attributes(): array
    {
        return [
            'name'          => 'Tên danh mục',
            'slug'          => 'Slug',
            'thumbnail_url' => 'Ảnh đại diện',
            'parent_id'     => 'Danh mục cha',
            'status'        => 'Trạng thái',
            'shop_id'       => 'Cửa hàng'
        ];
    }
}
