<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class ActivitiLogController extends Controller
{
    public function getActivities()
    {
        try {
            $data = [];

            $activities = Activity::query()->orderByRaw('created_at DESC')
                ->get();
            foreach ($activities as $activity) {
                $data[] = [
                    'id' => $activity->id,
                    'author' => $activity->causer ? $activity->causer->full_name : null,
                    'action_type' => $activity->log_name,
                    'action' => $activity->description,
                    'content' => $activity->properties['content'],
                    'action_date' => date('d-m-Y', strtotime($activity->created_at)),
                    'ip' => $activity->properties['ip'],
                    'userAgent' => $activity->properties['user_agent'],
                ];
            }

            return jsonResponse($data, 200, 'Get all activities successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong.');
        }
    }
}
