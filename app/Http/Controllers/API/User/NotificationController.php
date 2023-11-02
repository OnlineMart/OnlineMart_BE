<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Notification\NotificationRequestStore;
use App\Models\Notification;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class NotificationController extends Controller
{
    public function __construct()
    {
        // $this->middleware("auth:api");
    // tạm bỏ này tối nay merge lấy code mới hả mở lại
    // dòng này bắt đăng nhập mới cho vô
    }


    /**
     * Lấy thông tin của thông báo theo từng user_id
     *
     * @param $userId
     *
     * @return JsonResponse
     */
    public function getNotificationByUser($userId): JsonResponse
    {
        try {
            $notification = Notification::where("user_id", $userId)->get();

            return jsonResponse($notification, 200, 'Notification render successfull');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }


    /**
     * Thêm mới một thông báo mới
     *
     * @param NotificationRequestStore $request
     *
     * @return JsonResponse
     */
    public function store(NotificationRequestStore $request): JsonResponse
    {
        try {
            $data = $request->validated();

            $notification = Notification::create([
                "title"   => $data["title"],
                "content" => $data["content"],
                "status"  => $data["status"],
                "type"    => $data["type"],
                "user_id" => $data["user_id"]
            ]);

            return jsonResponse($notification, 201, 'Notification created successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }


    /**
     * Lấy thông tin của một thông báo
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        try {
            $notification = Notification::findOrFail($id);

            return jsonResponse($notification, 200, 'Notification show successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }


    /**
     * Thay đổi trạng thái của 1 thông báo (từ unread sang read)
     *
     * @param $id
     *
     * @return JsonResponse
     */
    public function changeStatusNotification($id): JsonResponse
    {
        try {
            $notification = Notification::findOrFail($id);

            if (!$notification) {
                return jsonResponse(null, Response::HTTP_NOT_FOUND, 'Notification not found');
            }

            if ($notification->status === Notification::UNREAD) {
                $notification->status = Notification::READ;
                $notification->save();
            }
            return jsonResponse($notification, Response::HTTP_OK, 'Notification status changed successfully');

        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }



    /**
     * Thay đổi trạng thái của tất cả các thông báo trong một tab (từ unread sang read)
     *
     * @param $type
     *
     * @return JsonResponse
     */
    public function massChangeStatusNotifications($type): JsonResponse
    {
        try {
            if($type === "home") {
                $notifications = Notification::all();
            } else {
                $notifications = Notification::where('type', $type)->get();
            }

            if ($notifications->isEmpty()) {
                return jsonResponse(null, Response::HTTP_NOT_FOUND, 'Notifications not found');
            }

            $notifications->each(function ($notification) {
                if ($notification->status === Notification::UNREAD) {
                    $notification->status = Notification::READ;
                }
                $notification->save();
            });

            return jsonResponse($notifications, Response::HTTP_OK, 'Notifications status changed successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }


    /**
     * Xóa 1 thông báo
     *
     * @param Notification $notification
     *
     * @return JsonResponse
     */
    public function destroy(Notification $notification): JsonResponse
    {
        try {
            $notification->delete();

            return JsonResponse(null, Response::HTTP_OK, 'Notification deleted successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }


    /**
     * Xóa tất cả các thông báo trong 1 tab
     *
     * @param $type
     *
     * @return JsonResponse
     */
    public function massDeleteNotifications($type): JsonResponse
    {
        try {
            $notifications = Notification::where('type', $type)->get();

            if ($notifications->isEmpty()) {
                return jsonResponse(null, Response::HTTP_NOT_FOUND, 'Notifications not found');
            }

            foreach ($notifications as $notification) {
                $notification->delete();
            }

            return jsonResponse(null, Response::HTTP_OK, 'Notifications deleted successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }

}