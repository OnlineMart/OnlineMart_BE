<?php

namespace App\Http\Controllers\API\Admin;

use Exception;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\Seller\SellerRequestStore;
use App\Http\Requests\Seller\SellerRequestUpdate;

class SellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('permission:Authorizations')->except('index');
    }

    /**
     * Lấy danh sách nhân viên bán hàng của shop
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $shopId = auth()->user()->shop_id;

            $sellers   = User::where('shop_id', $shopId)->with('roles.permissions', 'permissions')->get();
            $shopOwner = User::where('shop_id', $shopId)->first();

            $response = $sellers->map(function ($seller) use ($shopOwner) {
                $rolePermissions   = $seller->roles->pluck('permissions')->flatten()->pluck('id', 'name')->toArray();
                $sellerPermissions = $seller->permissions->pluck('id', 'name')->toArray();
                $permissions       = array_unique(array_merge($rolePermissions, $sellerPermissions));

                $permissionsData = collect($permissions)->map(function ($id, $name) {
                    return [
                        'id'   => $id,
                        'name' => $name
                    ];
                })->values();

                return [
                    'id'          => $seller->id,
                    'name'        => $seller->full_name,
                    'email'       => $seller->email,
                    'phone'       => $seller->phone,
                    'shop_name'   => $shopOwner->shop->name,
                    'status'      => $seller->status,
                    'shop_owner'  => $shopOwner->shop,
                    'is_owner'    => $seller->id === $shopOwner->id,
                    'roles'       => $seller->roles->map(function ($role) {
                        return [
                            'id'   => $role->id,
                            'name' => $role->name
                        ];
                    }),
                    'permissions' => $permissionsData
                ];
            });

            return jsonResponse($response, 200, 'success');
        } catch (Exception $e) {
            return jsonResponse(null, 400, $e->getMessage());
        }
    }

    /**
     * Thêm nhân viên nhà bán
     *
     * @param SellerRequestStore $request
     *
     * @return JsonResponse
     */
    public function store(SellerRequestStore $request): JsonResponse
    {
        try {
            $validatedData = $request->validated();

            $seller = User::create([
                'full_name' => $validatedData['name'],
                'email'     => $validatedData['email'],
                'phone'     => $validatedData['phone'],
                'password'  => Hash::make($validatedData['password']),
                'shop_id'   => auth()->user()->shop_id,
                'status'    => User::ACTIVE
            ]);

            if (isset($validatedData['role'])) {
                $role = Role::whereIn('id', $request->role)->select('name')->get()->pluck('name')->toArray();
                $seller->assignRole($role);
            }

            if (isset($validatedData['permissions'])) {
                $permissions = Permission::whereIn('id', $request->permissions)->select('name')->get()->pluck('name')->toArray();
                $seller->givePermissionTo($permissions);
            }

            return jsonResponse($seller, 200, 'success');
        } catch (Exception $e) {
            return jsonResponse(null, $e->getCode(), $e->getMessage());
        }
    }

    /**
     * Cập nhật vai trò và quyền của nhân viên
     *
     * @param SellerRequestUpdate $request
     * @param User                $seller
     *
     * @return JsonResponse
     */
    public function update(SellerRequestUpdate $request, User $seller): JsonResponse
    {
        try {
            $validatedData = $request->validated();

            $seller->update([
                'full_name' => $validatedData['name'],
                'email'     => $validatedData['email'],
                'password'  => $seller->password,
                'status'    => $seller->status
            ]);

            if (isset($validatedData['role'])) {
                $role = Role::whereIn('id', $request->role)->select('name')->get()->pluck('name')->toArray();
                $seller->syncRoles($role);
            }

            if (isset($validatedData['permissions'])) {
                $permissions = Permission::whereIn('id', $request->permissions)->select('name')->get()->pluck('name')->toArray();
                $seller->syncPermissions($permissions);
            }

            logActivity('system', $request, "Cập nhật quyền hạn cho nhân viên $seller->full_name", 'Phân quyền');

            return jsonResponse($seller, 200, 'success');
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }

    /**
     * Xóa nhân viên nhà bán
     *
     * @param User $seller
     *
     * @return JsonResponse
     */
    public function destroy(User $seller): JsonResponse
    {
        try {
            $seller->delete();

            return jsonResponse(null, 200, 'success');
        } catch (Exception $e) {
            return jsonResponse(null, 500, $e->getMessage());
        }
    }
}
