<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderStatuses = [
            ['status_name' => 'awaiting'],
            ['status_name' => 'processing'],
            ['status_name' => 'shipping'],
            ['status_name' => 'canceled'],
            ['status_name' => 'delivered'],
        ];

        DB::table('order_statuses')->insert($orderStatuses);
    }
}