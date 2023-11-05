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
    public function rules(): array
    {
        $voucherId = $this->route()->parameter('voucher')->id;
        return [
            'code' => 'required|max:10|min:5|unique:vouchers,code,' . $voucherId,
            'usage_limit' => 'integer|min:0',
            'min_discount_amount' => 'required|numeric|min:0',
            'max_discount_amount' => 'required|numeric|min:0|gte:min_discount_amount',
            'discount' => 'required|min:0',
            'unit' => 'required|in:0,1',
            'start_date' => 'required',
            'expired_date' => 'required',
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
            'max_discount_amount.gte' => 'Trường phải lớn hơn hoặc bằng :min_discount_amount.',
            'discount.required' => 'Trường là bắt buộc.',
            'discount.min' => 'Trường phải là một số không âm.',
            'start_date.required' => 'Trường là bắt buộc.',
            'expired_date.required' => 'Trường là bắt buộc.',
            'expired_date.date' => 'Trường phải là một ngày hợp lệ.',
            'expired_date.after' => 'Trường phải sau trường :start_date.',
            'shop_id.required' => 'Trường là bắt buộc.',
        ];
    }
}
