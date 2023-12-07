<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentMethod = [
            ['method_name' => 'COD'],
            ['method_name' => "CK"]
        ];

        DB::table('payment_methods')->insert($paymentMethod);
    }
}
