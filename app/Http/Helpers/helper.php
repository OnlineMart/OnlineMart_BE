<?php


use App\Models\User;
use Illuminate\Support\Facades\Auth;

if (!function_exists('roundToTwoSignificantDigits')) {
    /**
     * Làm tròn số về 2 chữ số đầu tiên
     *
     * @param $number
     *
     * @return float|int
     */
    function roundToTwoSignificantDigits($number): float|int
    {
        if ($number == 0) return 0;
        $powerOfTen = pow(10, floor(log10($number)) - 1);

        return round($number / $powerOfTen) * $powerOfTen;
    }
}


if (!function_exists('logActivity')) {

    /**
     * Helper logging activity
     *
     * @param string $log_name
     * @param mixed  $request
     * @param string $content
     * @param string $action
     *
     * @return void
     */
    function logActivity(string $log_name, mixed $request, string $content, string $action): void
    {
        $user = Auth::user();
        if ($user->type === User::ADMIN_SHOP) {
            activity($log_name)
                ->causedBy(Auth::user())
                ->event(Auth::user()->shop->id)
                ->withProperties([
                    'ip'         => $request->getClientIp(),
                    'user_agent' => $request->header('User-Agent'),
                    'content'    => $content,
                ])
                ->log($action);
        }
    }
}
