<?php

namespace App\Http\Requests\Product;

use Illuminate\Validation\Rule;
use App\Http\Requests\BaseRequest;

class ProductRequestStore extends BaseRequest
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
        $rules = [
            'name'             => 'required|min:3|max:255|string|unique:products,name',
            'sku'              => [
                'string',
                Rule::unique('products', 'sku')->ignore($this->id),
                Rule::unique('product_variation_values', 'sku')
            ],
            'thumbnail_url'    => 'required',
            'gallery'          => 'nullable|array',
            'gallery.*'        => 'nullable',
            'regular_price'    => [
                'numeric',
                function ($attribute, $value, $fail) {
                    $salePrice = $this->input('sale_price');
                    if ($salePrice != 0 && $salePrice >= $value) {
                        $fail("Giá gốc phải lớn hơn giá khuyến mãi.");
                    }
                }
            ],
            'sale_price'       => [
                'nullable',
                'numeric',
                function ($attribute, $value, $fail) {
                    $regularPrice = $this->input('regular_price');
                    if ($value != 0 && $value >= $regularPrice) {
                        $fail("Giá khuyến mãi phải nhỏ hơn giá gốc.");
                    }
                }
            ],
            'stock_qty'        => 'nullable|numeric',
            'origin'           => 'required|string',
            'description'      => 'nullable|string',
            'status'           => 'required',
            'shop_id'          => 'required|exists:shops,id',
            'supplier_id'      => 'required|exists:suppliers,id',
            'category_id'      => 'required|exists:categories,id',
            'meta_title'       => 'nullable|string',
            'meta_keywords'    => 'nullable|string',
            'meta_description' => 'nullable|string',
            'variants'         => 'nullable'
        ];

        if ($this->input('type') === 'normal') {
            $rules['regular_price'][] = 'required';
            $rules['sku'][] = 'required';
        } else {
            $rules['variants'] = 'required';
            $rules['variants.*.sku'] = [
                'required',
                'string',
                Rule::unique('product_variation_values', 'sku')
            ];
            $rules['variants.*.price'] = 'required|numeric';
            $rules['variants.*.sale_price'] = [
                'nullable',
                'numeric',
                function ($attribute, $value, $fail) {
                    $regularPrice = $this->input('variants.*.price');

                    if ($value != 0 && $value >= $regularPrice) {
                        $fail('The sale price must be less than the regular price when not zero.');
                    }
                }
            ];
            $rules['variants.*.stock_qty'] = 'required|numeric';
        }

        $rules['sale_price'] = array_merge($rules['sale_price'], [
            function ($attribute, $value, $fail) {
                $regularPrice = $this->input('regular_price');

                if ($value != 0 && $value >= $regularPrice) {
                    $fail('The sale price must be less than the regular price when not zero.');
                }
            }
        ]);

        return $rules;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống.',
            'string'   => ':attribute phải là chuỗi.',
            'unique'   => ':attribute đã tồn tại.',
            'exists'   => ':attribute không tồn tại.',
            'image'    => ':attribute phải là hình ảnh.',
            'max'      => ':attribute phải nhỏ hơn 2MB.',
            'in'       => ':attribute phải là 0 hoặc 1.',
            'numeric'  => ':attribute phải là số.',
            'array'    => ':attribute phải là mảng.',
            'min'      => ':attribute phải có ít nhất :min ký tự.',
            'max'      => ':attribute phải có nhiều nhất :max ký tự.',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function attributes()
    {
        return [
            'name'                  => 'Tên sản phẩm',
            'slug'                  => 'Slug',
            'sku'                   => 'SKU',
            'thumbnail_url'         => 'Ảnh đại diện',
            'gallery'               => 'Thư viện ảnh',
            'regular_price'         => 'Giá gốc',
            'sale_price'            => 'Giá khuyến mãi',
            'origin'                => 'Xuất xứ',
            'description'           => 'Mô tả',
            'short_description'     => 'Mô tả ngắn',
            'status'                => 'Trạng thái',
            'shop_id'               => 'Cửa hàng',
            'supplier_id'           => 'Nhà cung cấp',
            'category_id'           => 'Danh mục',
            'meta_title'            => 'Meta title',
            'meta_keywords'         => 'Meta keywords',
            'meta_description'      => 'Meta description',
            'variants'              => 'Biến thể',
            'variants.*.sku'        => 'SKU',
            'variants.*.price'      => 'Giá',
            'variants.*.sale_price' => 'Giá khuyến mãi',
            'variants.*.stock_qty'  => 'Số lượng',
        ];
    }
}
