<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Helpers\S3Helper;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Requests\User\UserRequestUpdate;

class UserController extends Controller
{
    private S3Helper $upload;

    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('jwt.verify', ['only' => ['me']]);
        $this->upload = new S3Helper();
    }

    /**
     * Upload avatar cho user
     *
     * @param Request $request
     * @param         $id
     *
     * @return JsonResponse
     */
    public function uploadAvatar(Request $request, $id): JsonResponse
    {
        try {
            $data = $request->all();
            $user = User::findOrFail($id);
            if (!$user) {
                return jsonResponse(null, 404, 'User not found');
            }

            $avatar = $this->upload->uploadSingleFileToS3($data['avatar'], 'users');
            if ($avatar) {
                $user->update(['avatar' => $avatar]);
            }

            return jsonResponse($user, 200, 'Avatar uploaded successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 403, 'Something went wrong');
        }
    }

    /**
     * Cập nhật thông tin user
     *
     * @param UserRequestUpdate $request
     * @param User              $user
     *
     * @return JsonResponse
     */
    public function update(UserRequestUpdate $request, User $user): JsonResponse
    {
        try {
            $data = $request->validated();

            $avatar = $user->avatar;
            if (isset($data['avatar']) && $data['avatar']) {
                $avatar = $this->upload->uploadSingleFileToS3($data['avatar'], 'users');
            }

            if (isset($data['password'])) {
                $hashedPassword = Hash::make($data['password']);
            } else {
                $hashedPassword = $user->password;
            }

            $user->update([
                'full_name' => $data['full_name'] ?? $user->full_name,
                'user_name' => $data['user_name'] ?? $user->user_name,
                'email'     => $data['email'] ?? $user->email,
                'phone'     => $data['phone'] ?? $user->phone,
                'gender'    => $data['gender'] ?? $user->gender,
                'birthday'  => $data['birthday'] ?? $user->birthday,
                'address'   => $data['address'] ?? $user->address,
                'avatar'    => $avatar,
                'password'  => $hashedPassword
            ]);

            return jsonResponse($user, 200, 'User updated successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 403, 'Something went wrong');
        }
    }

    /**
     * Xóa avatar user
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function deleteAvatar(int $id): JsonResponse
    {
        try {
            $user = User::findOrFail($id);

            if (!empty($user->avatar)) {
                $this->upload->deleteFileFromS3($user->avatar);

                $user->update(['avatar' => ""]);

                return jsonResponse($user, 200, 'Avatar deleted successfully');
            } else {
                return jsonResponse(null, 404, 'User avatar not found');
            }
        } catch (Exception $e) {
            return jsonResponse(null, 403, $e->getMessage());
        }
    }

    /**
     * Xóa user
     *
     * @param $id
     *
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        try {
            $user = auth()->user();
            $user->delete();
            return jsonResponse(null, 200, 'User deleted successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 403, 'Something went wrong');
        }
    }

    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function me(): JsonResponse
    {
        try {
            $user = auth()->user()->makeHidden(['roles', 'permissions']);

            if (!$user) {
                return jsonResponse(null, 404, 'User not found');
            }

            $permissions = auth()->user()->getAllPermissions()->pluck('name') ?? null;

            $user->load(['shop:id,name,avatar']);

            $shopData = $user->shop;

            $userData = array_merge($user->toArray(), [
                'permissions' => $permissions->toArray(),
                'shop'        => $shopData ? $shopData->toArray() : null
            ]);

            setPermissionsTeamId($shopData->id ?? null);

            return jsonResponse($userData, 200, 'User retrieved successfully');
        } catch (JWTException $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }
}
