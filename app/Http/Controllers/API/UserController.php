<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Helpers\S3Helper;
use App\Http\Requests\User\UserRequestStore;
use App\Http\Requests\User\UserRequestUpdate;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    private S3Helper $upload;

    public function __construct()
    {
        // $this->middleware('jwt.verify');
        // $this->middleware('auth:api');
        $this->upload = new S3Helper();
    }

    /**
     * Lấy danh sách users
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $users = User::orderBy('id', 'DESC')->get();
            return jsonResponse($users, 200, 'Users retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 403, 'Something went wrong');
        }
    }

    /**
     * Lưu user mới
     *
     * @param UserRequestStore $request
     *
     * @return JsonResponse
     */
    public function store(UserRequestStore $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $avatar = $this->upload->uploadSingleFileToS3($data['avatar'], 'user');
            if ($avatar) {
                $data['avatar'] = $avatar;
            }

            $user = User::create($data);

            return jsonResponse($user, 200, 'User created successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 403, 'Something went wrong');
        }
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
            $user = User::findOrFail($id);
            if (!$user) {
                return jsonResponse(null, 404, 'User not found');
            }

            $avatar = $this->upload->uploadSingleFileToS3($request->file('avatar'), 'users');
            if ($avatar) {
                $avatarUrl = $this->upload->getS3ObjectUrl();
                $user->update(['avatar' => $avatarUrl . $avatar]);
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
            Log::info($data);

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
            if (!$user) {
                return jsonResponse(null, 404, 'User not found');
            }

            $this->upload->deleteFileFromS3($user->avatar);

            $user->update(['avatar' => ""]);

            return jsonResponse($user, 200, 'Avatar deleted successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 403, 'Something went wrong');
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
            $user = auth()->user();
            return jsonResponse($user, 200, 'User retrieved successfully');
        } catch (Exception $e) {
            return jsonResponse(null, 403, 'Something went wrong');
        }
    }
}
