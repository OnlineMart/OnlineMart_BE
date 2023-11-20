<?php

namespace App\Observers;

use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class VoucherObserve
{
    /**
     * Handle the Voucher "created" event.
     *
     * @param Voucher $voucher
     * @return void
     */
    public function created(Voucher $voucher)
    {
        $this->checkStatus($voucher);
    }

    /**
     * Handle the Voucher "updated" event.
     *
     * @param Voucher $voucher
     * @return void
     */
    public function updated(Voucher $voucher)
    {
        $this->checkStatus($voucher);
    }

    public function checkStatus($voucher)
    {
        try {
            Log::info($voucher);

            $currentDate = Carbon::now();
            Log::info($currentDate);

            // Convert the start_date and expired_date to Carbon objects
            $startDate = Carbon::parse($voucher->start_date); // Replace 'Asia/Ho_Chi_Minh' with the actual time zone
            $expiredDate = Carbon::parse($voucher->expired_date); // Replace 'your_timezone' with the actual time zone

            if ($currentDate >= $expiredDate) {
                Log::info("expired");
                $voucher->status = Voucher::EXPIRED;
            } elseif ($startDate > $currentDate) {
                Log::info("not activated");
                $voucher->status = Voucher::NOT_ACTIVATED;
            } else {
                Log::info("valid");
                $voucher->status = Voucher::VALID;
            }

            // Save the updated status
            $voucher->save();
        } catch (\Exception $e) {
            Log::error('Error while saving voucher: ' . $e->getMessage());
        }
    }

}
