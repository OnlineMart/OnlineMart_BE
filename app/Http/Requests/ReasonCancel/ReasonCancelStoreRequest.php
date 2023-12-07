<?php

namespace App\Http\Requests\ReasonCancel;

use App\Http\Requests\BaseRequest;

class ReasonCancelStoreRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Sửa giá trị trả về thành true nếu bạn muốn cho phép request này
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'reason_name' => 'required|min:10',
            'shop_id'     => 'required|exists:shops,id',
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
            'reason_name' => 'Lý do',
            'shop_id' => 'Cửa hàng',
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
            'required' => ':attribute không được để trống.',
            'min' => ':attribute không được nhập ít hơn 10 ký tự.',
        ];
    }
}