<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class ActivitiLogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Get all activities
     *
     * @return JsonResponse
     */
    public function getActivities(): JsonResponse
    {
        try {
            $shopId = Auth::user()->shop->id;

            $activities = Activity::where('event', $shopId)
                ->orderByDesc('created_at')
                ->get();

            $data = $activities->map(function ($activity) {

                return [
                    'id'          => $activity->id,
                    'author'      => $activity->properties['author'],
                    'avatar'      => $activity->properties['avatar'],
                    'shop'        => $activity->event,
                    'action_type' => $activity->log_name,
                    'action'      => $activity->description,
                    'content'     => $activity->properties['content'],
                    'data'        => $activity->properties['data'] ?? null,
                    'action_date' => $activity->created_at->format('d-m-Y'),
                    'ip'          => $activity->properties['ip'],
                    'userAgent'   => $activity->properties['user_agent'],
                ];
            })->toArray();

            return jsonResponse($data, 200, 'Get all activities successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }


    /**
     * Get all members shop
     *
     * @return JsonResponse
     */
    public function getMembersShop(): JsonResponse
    {
        try {
            $user    = Auth::user();
            $shop    = Shop::findOrFail($user->shop_id);
            $members = User::select('id', 'user_name', 'full_name')->where('shop_id', $shop->id)->get();

            $data = $members->map(function ($member) {
                return [
                    'id'    => $member->id,
                    'label' => $member->full_name,
                    'value' => $member->full_name,
                ];
            })->toArray();

            return jsonResponse($data, 200, 'Get members successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }
}
