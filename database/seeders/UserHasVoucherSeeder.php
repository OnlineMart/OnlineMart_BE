<?php

namespace Database\Seeders;

use App\Models\UserHasVoucher;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserHasVoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'status' => '0',
                'received_date' => Carbon::now(),
                'user_id' => 1,
                'coupon_id' => 2,
            ],
            [
                'status' => '1',
                'received_date' => Carbon::now()->subDays(5),
                'user_id' => 1,
                'coupon_id' => 3,

            ],
        ];

        foreach ($data as $item) {
            UserHasVoucher::create($item);
        }
    }
}
