<?php

namespace App\Http\Requests\Notification;

use App\Http\Requests\BaseRequest;

class NotificationRequestStore extends BaseRequest
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
            'title'   => 'required|string',
            'content' => 'required|string',
            'status'  => 'required|string',
            'type'    => 'required|string',
            'user_id' => 'required|exists:users,id'
        ];
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages(): array
    {
        return [
            'required' => ':attribute không được để trống',
            'string'   => ':attribute phải là chuỗi',
            'exists'   => ':attribute không tồn tại'
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
            'title'   => 'Tiêu đề thông báo',
            'content' => 'Nội dung thông báo',
            'status'  => 'Trạng thái',
            'type'    => 'Loại thông báo',
            'user_id' => 'Người dùng'
        ];
    }
}
