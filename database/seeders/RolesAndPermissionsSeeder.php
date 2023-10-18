<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            // Reset cached roles and permissions
            app()[PermissionRegistrar::class]->forgetCachedPermissions();

            // Create permissions in bulk
            $permissions = collect([
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
                ['name' => 'Manage users', 'guard_name' => 'api'],
                ['name' => 'Authorizations', 'guard_name' => 'api']
            ]);

            Permission::insert($permissions->toArray());

            $roles = collect([
                ['guard_name' => 'api', 'name' => 'admin', 'description' => 'Vai trò này có quyền truy cập vào tất cả các chức năng của hệ thống', 'created_at' => now()->toDateTimeString(), 'updated_at' => now()->toDateTimeString()],
                ['guard_name' => 'api', 'name' => 'owner', 'description' => 'Vai trò này có quyền truy cập vào tất cả các chức năng của hệ thống, ngoại trừ phân quyền', 'created_at' => now()->toDateTimeString(), 'updated_at' => now()->toDateTimeString()],
                ['guard_name' => 'api', 'name' => 'editor', 'description' => 'Vai trò này có quyền truy cập vào các chức năng quản lý sản phẩm', 'created_at' => now()->toDateTimeString(), 'updated_at' => now()->toDateTimeString()]
            ]);

            Role::insert($roles->toArray());

            $permissionIds = Permission::pluck('id')->toArray();

            // Assign permissions to roles
            $adminPermissions  = $permissionIds;
            $ownerPermissions  = array_diff($permissionIds, [10]); // exclude 'Authorizations' permission
            $editorPermissions = [1, 2]; // 'View products', 'Create product'

            Role::find(1)->permissions()->sync($adminPermissions);
            Role::find(2)->permissions()->sync($ownerPermissions);
            Role::find(3)->permissions()->sync($editorPermissions);

            $users = collect([
                [
                    'full_name' => 'Admin',
                    'user_name' => 'admin',
                    'email'     => 'admin@gmail.com',
                    'birthday'  => Carbon::createFromFormat('d-m-Y', '10-10-2003')->format('Y-m-d'),
                    'gender'    => '0',
                    'avatar'    => null,
                    'phone'     => null,
                    'password'  => Hash::make('12345678'),
                    'type'      => 'admin',
                    'shop_id'   => 1
                ],
                [
                    'full_name' => 'Owner',
                    'user_name' => 'owner',
                    'email'     => 'owner@gmail.com',
                    'birthday'  => Carbon::createFromFormat('d-m-Y', '10-10-2003')->format('Y-m-d'),
                    'gender'    => '0',
                    'avatar'    => null,
                    'phone'     => null,
                    'password'  => Hash::make('12345678'),
                    'type'      => 'admin',
                    'shop_id'   => 1
                ],
                [
                    'full_name' => 'Editor',
                    'user_name' => 'editor',
                    'email'     => 'editor@gmail.com',
                    'birthday'  => Carbon::createFromFormat('d-m-Y', '10-10-2003')->format('Y-m-d'),
                    'gender'    => '0',
                    'avatar'    => null,
                    'phone'     => null,
                    'password'  => Hash::make('12345678'),
                    'type'      => 'admin',
                    'shop_id'   => 1
                ],
                [
                    'user_name' => 'quangthai',
                    'full_name' => 'Trần Quang Thái',
                    'email'     => 'quangthai@gmail.com',
                    'birthday'  => Carbon::createFromFormat('d-m-Y', '10-10-2003')->format('Y-m-d'),
                    'gender'    => '0',
                    'avatar'    => 'https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg',
                    'phone'     => '0774060610',
                    'password'  => bcrypt('123456'),
                    'type'      => 'user',
                    'shop_id'   => null
                ]
            ]);

            User::insert($users->toArray());

            // Assign roles to users
            User::find(1)->assignRole('admin');
            User::find(2)->assignRole('owner');
            User::find(3)->assignRole('editor');

            DB::commit();

        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
