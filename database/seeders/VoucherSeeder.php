<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
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
                'code' => 'Tiki0310',
                'usage_limit' => 10,
                'min_discount_amount' => 100000,
                'max_discount_amount' => 150000,
                'discount' => 10.0,
                'unit' => '0',
                'start_date' => Carbon::now(),
                'expired_date' => Carbon::now()->addDays(30),
                'shop_id' => 1,
                'status' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => '5tw120',
                'usage_limit' => 5,
                'min_discount_amount' => 1500000,
                'max_discount_amount' => 500000,
                'discount' => 15.0,
                'unit' => '1',
                'start_date' => Carbon::now(),
                'expired_date' => Carbon::now()->addDays(60),
                'shop_id' => 2,
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'code' => 'sale123',
                'usage_limit' => 5,
                'min_discount_amount' => 500000,
                'max_discount_amount' => 2000000,
                'discount' => 15.0,
                'unit' => '1',
                'start_date' => Carbon::now(),
                'expired_date' => Carbon::now()->addDays(60),
                'shop_id' => 1,
                'status' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($data as $item) {
            Voucher::insert($item);
        }
    }
}
