<?php

namespace App\Observers;

use Exception;
use App\Models\Shop;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ShopStatusObserver
{
    /**
     * Handle the Voucher "updated" event.
     *
     * @param Shop $shop
     *
     * @return void
     */
    public function updating(Shop $shop)
    {
        $this->checkStatus($shop);
    }

    /**
     * Undocumented function
     *
     * @param [type] $shop
     *
     * @return void
     */
    private function checkStatus($shop)
    {
        try {
            Log::info($shop);

            $currentDate = Carbon::now();
            Log::info($currentDate);

            if ($shop->isDirty('type')) {
                $newType = $shop->getAttribute('type');

                if ($newType === Shop::APPROVED) {
                    $shop->status = Shop::ENABLED;
                    Log::info("SHOP ENABLED");
                } else {
                    $shop->status = Shop::DISABLED;
                    Log::info("SHOP DISABLED");
                }
            }

        } catch (Exception $e) {
            Log::error('Error while saving shop: ' . $e->getMessage());
        }
    }
}
