<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $permissions = Permission::all();

        $response = $permissions->map(function ($permission) {
            return [
                'id'   => $permission->id,
                'name' => $permission->name
            ];
        });

        return jsonResponse($response, 200, 'Lấy danh sách permission thành công');
    }
}
