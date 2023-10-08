<?php

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
        if($number == 0) return 0;
        $powerOfTen = pow(10, floor(log10($number)) - 1);

        return round($number / $powerOfTen) * $powerOfTen;
    }
}
