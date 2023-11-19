<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
            $shop_id = Auth::user()->shop->id;

            $activities = Activity::query()
                ->where('event', $shop_id)
                ->orderByDesc('created_at')
                ->get();

            $data = $activities->map(function ($activity) {
                return [
                    'id'          => $activity->id,
                    'author'      => $activity->causer ? $activity->causer->full_name : 'Anonymous',
                    'shop'        => $activity->event,
                    'action_type' => $activity->log_name,
                    'action'      => $activity->description,
                    'content'     => $activity->properties['content'],
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
}