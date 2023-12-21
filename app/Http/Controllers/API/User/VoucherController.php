<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Models\UserHasVoucher;
use Exception;
use Illuminate\Http\JsonResponse;

class VoucherController extends Controller
{


    /**
     * Nguời dùng thu thập voucher
     * @param int $voucherId
     *
     * @return JsonResponse
     */
    public function store(int $voucherId): JsonResponse
    {
        try {

            $voucher = UserHasVoucher::insert([
                "user_id" => auth()->user()->id,
                'voucher_id' => $voucherId,
                "received_date" => now(),
                'status' => UserHasVoucher::UNUSED,
            ]);

            return jsonResponse($voucher, 201, 'User collected voucher successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }


    /**
     * Hiển thị voucher theo người dùng
     *
     * @return JsonResponse
     */
    public function getVoucherByUser(): JsonResponse
    {
        try {
            $userHasVouchers = UserHasVoucher::with('voucher')->where('user_id', auth()->user()->id)->get();

            $response = $userHasVouchers->map(function ($userHasVoucher) {

                return [
                    'user_id' => $userHasVoucher->user_id,
                    'discount' => $userHasVoucher->voucher->discount,
                    'min_discount_amount' => $userHasVoucher->voucher->min_discount_amount,
                    'max_discount_amount' => $userHasVoucher->voucher->max_discount_amount,
                    'code' => $userHasVoucher->voucher->code,
                    'expired_date' => $userHasVoucher->voucher->expired_date,
                ];
            });

            return jsonResponse($response, 200, 'Get all voucher successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }
}
