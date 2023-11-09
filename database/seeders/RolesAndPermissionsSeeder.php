<?php

namespace Database\Seeders;

use Exception;
use Carbon\Carbon;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
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
            $permissions = collect(config('authorize.permissions'));

            Permission::insert($permissions->toArray());

            $shops = collect(Shop::all());

            $users = collect([
                [
                    'full_name' => 'Admin',
                    'user_name' => 'admin',
                    'email'     => 'admintiki@gmail.com',
                    'birthday'  => Carbon::createFromFormat('d-m-Y', '10-10-2003')->format('Y-m-d'),
                    'gender'    => '0',
                    'avatar'    => null,
                    'phone'     => null,
                    'password'  => Hash::make('12345678'),
                    'type'      => User::ADMIN_SHOP,
                    'shop_id'   => 1,
                    'status'    => User::ACTIVE,
                    'position'  => User::OWNER
                ],
                [
                    'full_name' => 'Admin',
                    'user_name' => 'admin',
                    'email'     => 'adminnesle@gmail.com',
                    'birthday'  => Carbon::createFromFormat('d-m-Y', '10-10-2003')->format('Y-m-d'),
                    'gender'    => '0',
                    'avatar'    => null,
                    'phone'     => null,
                    'password'  => Hash::make('12345678'),
                    'type'      => User::ADMIN_SHOP,
                    'shop_id'   => 2,
                    'status'    => User::ACTIVE,
                    'position'  => User::OWNER
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
                    'type'      => User::ADMIN_SHOP,
                    'shop_id'   => 1,
                    'status'    => User::ACTIVE,
                    'position'  => USER::SELLER
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
                    'type'      => User::ADMIN_SHOP,
                    'shop_id'   => 1,
                    'status'    => User::ACTIVE,
                    'position'  => USER::SELLER
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
                    'type'      => User::USER,
                    'shop_id'   => null,
                    'status'    => User::ACTIVE,
                    'position'  => null
                ]
            ]);

            User::insert($users->toArray());

            foreach ($shops as $shop) {
                $rolesAdmin = collect([
                    [
                        'guard_name'  => 'api',
                        'name'        => 'admin',
                        'description' => 'Vai trò này có quyền truy cập vào tất cả các chức năng của hệ thống',
                        'created_at'  => now()->toDateTimeString(),
                        'updated_at'  => now()->toDateTimeString()
                    ],
                    [
                        'guard_name'  => 'api',
                        'name'        => 'owner',
                        'description' => 'Vai trò này có quyền truy cập vào tất cả các chức năng của hệ thống',
                        'created_at'  => now()->toDateTimeString(),
                        'updated_at'  => now()->toDateTimeString()
                    ],
                    [
                        'guard_name'  => 'api',
                        'name'        => 'editor',
                        'description' => 'Vai trò này có quyền truy cập vào tất cả các chức năng của hệ thống',
                        'created_at'  => now()->toDateTimeString(),
                        'updated_at'  => now()->toDateTimeString()
                    ]
                ]);
                // add shop_id to $roles
                $rolesAdmin = $rolesAdmin->map(function ($role) use ($shop) {
                    $role['name']    = $role['name'] . '_' . $shop['name'];
                    $role['shop_id'] = $shop->id;
                    return $role;
                });

                Role::insert($rolesAdmin->toArray());

                $roles = Role::all();

                // Assign permissions to roles
                $adminPermissions  = Permission::pluck('id')->toArray();
                $ownerPermissions  = Permission::where('name', 'not like', 'Authorizations')->pluck('id')->toArray();
                $editorPermissions = Permission::where('name', 'like', 'View products')->pluck('id')->toArray();

                // foreach ($roles as $role) {
                //     Role::find($role)->permissions()->sync($adminPermissions);
                // }
                foreach ($roles as $role) {
                    if ($role->name === 'admin_' . $shop->name) {
                        $role->permissions()->sync($adminPermissions);
                    } else if ($role->name === 'owner_' . $shop->name) {
                        $role->permissions()->sync($ownerPermissions);
                    } else if ($role->name === 'editor_' . $shop->name) {
                        $role->permissions()->sync($editorPermissions);
                    }
                }

                $users = User::where('shop_id', $shop->id)->get();
                setPermissionsTeamId($shop->id);

                foreach ($users as $user) {
                    if ($user->full_name === 'Admin') {
                        $user->assignRole('admin_' . $shop->name);
                    } else if ($user->full_name === 'Owner') {
                        $user->assignRole('owner_' . $shop->name);
                    } else if ($user->full_name === 'Editor') {
                        $user->assignRole('editor_' . $shop->name);
                    }
                }
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
