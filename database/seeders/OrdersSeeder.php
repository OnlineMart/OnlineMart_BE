<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use App\Models\PaymentMethod;
use App\Models\ShippingAddress;
use App\Models\User;
use App\Models\Voucher;
use Exception;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();
        $totalRecords = 10;
        $chunkSize = 10;

        DB::beginTransaction();

        try {
            $orders = [];
            $users = collect(User::all()->modelKeys());
            $vouchers = collect(Voucher::all()->modelKeys());
            $orderStatus = collect(OrderStatus::all()->modelKeys());
            $paymentMethod = collect(PaymentMethod::all()->modelKeys());
            $shippingAddress = collect(ShippingAddress::all()->modelKeys());

            for ($j = 1; $j <= $totalRecords; $j++) {
                $totalPrice = $faker->randomFloat(2, 10000, 10000000);

                $orders[] = [
                    'id' => 1,
                    'shipping_address_id' => 1,
                    'delivery_date' => $faker->dateTimeBetween('now', '+1 week'),
                    'total_price' => $totalPrice,
                    'shipping_unit' => $faker->company,
                    'user_id' => 1,
                    'voucher_id' => 1,
                    'order_status_id' => 1,
                    'payment_method_id' => 1,
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString()
                ];
            }

            $chunks = array_chunk($orders, $chunkSize);
            foreach ($chunks as $chunk) {
                DB::table('orders')->insert($chunk);
                $this->command->getOutput()->progressAdvance();
                $orders = [];
            }

            $this->command->getOutput()->progressAdvance();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
