<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ShippingAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
            $shippingAddress = [
                [
                    'name' => 'Ty',
                    'phone' => '0915661392',
                    'street' => 'so 1 15',
                    'ward' => 'an khanh',
                    'district' => 'ninh kieu',
                    'city' => 'can tho',
                    'status' => '0',
                    'user_id' => 1,
                ],
                [
                    'name' => 'Thai',
                    'phone' => '0915661392',
                    'street' => 'phu my ha',
                    'ward' => 'phu tho',
                    'district' => 'phu tan',
                    'city' => 'an gang',
                    'status' => '0',
                    'user_id' => 4,
                ],
                [
                    'name' => 'Juan',
                    'phone' => '0915661392',
                    'street' => 'long my',
                    'ward' => 'chai thanh',
                    'district' => 'hau gang',
                    'city' => 'nga bay',
                    'status' => '0',
                    'user_id' => 2,
                ],

            ];

            DB::table('shipping_address')->insert($shippingAddress);
    }
}
