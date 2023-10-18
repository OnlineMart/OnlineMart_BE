<?php

namespace App\Http\Requests\Role;

use App\Http\Requests\BaseRequest;

class RoleRequestStore extends BaseRequest
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
            'name'          => 'required|unique:roles,name',
            'permissions'   => 'required|array',
            'permissions.*' => 'exists:permissions,id',
            'description'   => 'nullable|string'
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
            'string'   => ':attribute phải là chuỗi.',
            'unique'   => ':attribute đã tồn tại.',
            'exists'   => ':attribute không tồn tại.',
            'array'    => ':attribute phải là mảng.'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function attributes()
    {
        return [
            'name'        => 'Tên role',
            'permissions' => 'Danh sách quyền',
            'description' => 'Mô tả'
        ];
    }
}
