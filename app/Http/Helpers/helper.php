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
     * @param null   $data
     *
     * @return void
     */
    function logActivity(string $log_name, mixed $request, string $content, string $action, $data = null): void
    {
        $user = Auth::user();
        if ($user->type === User::ADMIN_SHOP) {
            activity($log_name)
                ->event(Auth::user()->shop->id)
                ->withProperties([
                    'ip'         => $request->getClientIp(),
                    'user_agent' => $request->header('User-Agent'),
                    'author'     => $user->full_name ?? 'Không xác định',
                    'avatar'     => $user->avatar ?? 'images/users/2023/9/default_avatar.jpg',
                    'content'    => $content,
                    'data'       => $data,
                ])
                ->log($action);
        }
    }

}

if (!function_exists('formatPrice')) {
    /**
     * Định dạng giá thành
     *
     * @param float|int $price
     * @param string $currency
     * @param string $locale
     * @return string
     */
    function formatPrice($price, $currency = 'VND', $locale = 'vi_VN')
    {
        $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
        $formatter->setSymbol(NumberFormatter::CURRENCY_SYMBOL, $currency);
        return $formatter->formatCurrency($price, $currency);
    }

}
