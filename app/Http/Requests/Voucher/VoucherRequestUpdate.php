<?php

namespace App\Http\Requests\Voucher;

use App\Http\Requests\BaseRequest;

class VoucherRequestUpdate extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Kiểm tra xem người dùng có quyền thực hiện yêu cầu hay không
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => 'required|max:10|min:5|unique:vouchers,code',
            'usage_limit' => 'integer|min:0',
            'min_discount_amount' => 'required|numeric|min:0',
            'max_discount_amount' => 'required|numeric|min:0',
            'discount' => 'required|min:0',
            'unit' => 'required|in:0,1',
            'start_date' => 'required|date',
            'expired_date' => 'required|date|after:start_date',
            'shop_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'code.required' => 'Trường là bắt buộc.',
            'code.max' => 'Trường không được vượt quá :max kí tự.',
            'code.min' => 'Trường phải có ít nhất :min kí tự.',
            'code.unique' => 'Mã phiếu giảm giá đã tồn tại.',
            'usage_limit.integer' => 'Trường phải là một số nguyên.',
            'usage_limit.min' => 'Trường phải là một số không âm.',
            'min_discount_amount.required' => 'Trường là bắt buộc.',
            'min_discount_amount.numeric' => 'Trường phải là một số.',
            'min_discount_amount.min' => 'Trường phải là một số không âm.',
            'max_discount_amount.required' => 'Trường là bắt buộc.',
            'max_discount_amount.numeric' => 'Trường phải là một số.',
            'max_discount_amount.min' => 'Trường phải là một số không âm.',
            'discount.required' => 'Trường là bắt buộc.',
            'unit.in' => 'Đơn vị phải có giá trị là 0 hoặc 1',
            'unit.required' => 'Trường này là bắt buộc.',
            'discount.min' => 'Trường phải là một số không âm.',
            'start_date.required' => 'Trường là bắt buộc.',
            'start_date.date' => 'Trường phải là một ngày hợp lệ.',
            'expired_date.required' => 'Trường là bắt buộc.',
            'expired_date.date' => 'Trường phải là một ngày hợp lệ.',
            'expired_date.after' => 'Trường phải sau trường :ngày bắt đầu.',
            'shop_id.required' => 'Trường là bắt buộc.',
        ];
    }
}
