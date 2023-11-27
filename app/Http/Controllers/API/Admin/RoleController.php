<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\RoleRequestStore;
use App\Http\Requests\Role\RoleRequestUpdate;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('permission:Authorizations');
    }

    /**
     * Liệt kê danh sách vài trò
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $roles = Role::with('permissions')->where('shop_id', auth()->user()->shop_id)->get();
        $shop = auth()->user()->shop;

        $response = $roles->map(function ($role)  use ($shop) {
            $nameWithoutShop = str_replace('_' . $shop->name, '', $role->name);
            $permissions = $role->permissions->map(function ($permission) {
                return [
                    'id'   => $permission->id,
                    'name' => $permission->name
                ];
            });

            return [
                'id'          => $role->id,
                'name'        => $nameWithoutShop,
                'description' => $role->description,
                'permissions' => $permissions,
                'created_at'  => $role->created_at,
                'updated_at'  => $role->updated_at
            ];
        });

        return jsonResponse($response, 200, 'Lấy danh sách role thành công');
    }

    /**
     * Create new role
     *
     * @param RoleRequestStore $request
     *
     * @return JsonResponse
     */
    public function store(RoleRequestStore $request): JsonResponse
    {
        $validatedData = $request->validated();
        Log::info("Validation passed", $validatedData);

        $role = Role::create([
            'name'        => $validatedData['name'],
            'description' => $validatedData['description'],
            'guard_name'  => 'api'
        ]);
        logActivity('create', $request, 'Thêm vai trò mới', 'Thêm vai trò', $role);

        $role->givePermissionTo($validatedData['permissions']);

        return jsonResponse($role, 201, 'Thêm mới role thành công');
    }

    /**
     * Update role
     *
     * @param RoleRequestUpdate $request
     * @param                   $id
     *
     * @return JsonResponse
     */
    public function update(RoleRequestUpdate $request, $id): JsonResponse
    {
        try {
            $validatedData = $request->validated();

            $role = Role::findOrFail($id);

            $role->update([
                'name'        => $validatedData['name'],
                'description' => $validatedData['description'],
                'guard_name'  => 'api'
            ]);
            logActivity('update', $request, 'Cập nhập vai trò', 'Cập nhật vai trò', $role);


            $role->syncPermissions($validatedData['permissions']);

            return jsonResponse($role, 200, 'Cập nhật role thành công');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Có lỗi xảy ra');
        }
    }

    /**
     * Delete role
     *
     * @param $id
     *
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        try {
            $role = Role::findOrFail($id);
            logActivity('delete', request(), 'Xoá vai trò', 'Xoá vai trò', $role);
            $role->delete();

            return jsonResponse(null, 200, 'Xóa role thành công');
        } catch (Exception $e) {
            return jsonResponse(null, 500, 'Có lỗi xảy ra');
        }
    }
}
