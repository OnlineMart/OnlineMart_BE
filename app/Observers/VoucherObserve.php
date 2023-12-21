<?php

namespace App\Observers;

use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class VoucherObserve
{

    public function retrieved(Voucher $voucher)
    {
        $this->checkStatus($voucher);
    }


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

            $startDate = Carbon::parse($voucher->start_date);
            $expiredDate = Carbon::parse($voucher->expired_date);

            if ($currentDate < $startDate) {
                Log::info("not activated");
                $voucher->status = Voucher::NOT_ACTIVATED;
            } else if ($currentDate >= $startDate && $currentDate <= $expiredDate) {
                Log::info("activated");
                $voucher->status = Voucher::VALID;
            } else {
                Log::info("expired");
                $voucher->status = Voucher::EXPIRED;
            }


            $voucher->save();
        } catch (\Exception $e) {
            Log::error('Error while saving voucher: ' . $e->getMessage());
        }
    }

}
