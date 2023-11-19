<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

return [
    'permissions' => [
        ['name' => 'View products', 'guard_name' => 'api'],
        ['name' => 'Create product', 'guard_name' => 'api'],
        ['name' => 'Update product', 'guard_name' => 'api'],
        ['name' => 'Delete product', 'guard_name' => 'api'],
        ['name' => 'View categories', 'guard_name' => 'api'],
        ['name' => 'Create category', 'guard_name' => 'api'],
        ['name' => 'Update category', 'guard_name' => 'api'],
        ['name' => 'Delete category', 'guard_name' => 'api'],
        ['name' => 'View suppliers', 'guard_name' => 'api'],
        ['name' => 'Create supllier', 'guard_name' => 'api'],
        ['name' => 'Update supllier', 'guard_name' => 'api'],
        ['name' => 'Delete supllier', 'guard_name' => 'api'],
        ['name' => 'View coupons', 'guard_name' => 'api'],
        ['name' => 'View vouchers', 'guard_name' => 'api'],
        ['name' => 'Create voucher', 'guard_name' => 'api'],
        ['name' => 'Update voucher', 'guard_name' => 'api'],
        ['name' => 'Delete voucher', 'guard_name' => 'api'],
        ['name' => 'Manage users', 'guard_name' => 'api'],
        ['name' => 'View inventory', 'guard_name' => 'api'],
        ['name' => 'Print QR', 'guard_name' => 'api'],
        ['name' => 'Authorizations', 'guard_name' => 'api']
    ],

    'roles' => [
        [
            'guard_name'  => 'api',
            'name'        => 'admin',
            'description' => 'Vai trò này có quyền truy cập vào tất cả các chức năng của hệ thống',
            'created_at'  => now()->toDateTimeString(),
            'updated_at'  => now()->toDateTimeString()
        ]
    ],
];