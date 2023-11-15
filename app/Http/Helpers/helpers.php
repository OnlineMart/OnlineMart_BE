<?php

use Illuminate\Foundation\Mix;
use Illuminate\Support\Facades\Auth;

if (!function_exists('logActivity')) {

    function logActivity(string $log_name, mixed $request, string $content, string $action)
    {
        activity($log_name)
            ->causedBy(Auth::user())
            ->withProperties([
                'ip' => $request->getClientIp(),
                'user_agent' => $request->header('User-Agent'),
                'content' => $content
            ])
            ->log($action);
    }
}
