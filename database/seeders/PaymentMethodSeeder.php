<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id'          => 1,
                'method_name' => 'COD',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'id'          => 2,
                'method_name' => 'VNPay',
                'created_at'  => now(),
                'updated_at'  => now()
            ]
        ];

        PaymentMethod::insert($data);
    }
}
