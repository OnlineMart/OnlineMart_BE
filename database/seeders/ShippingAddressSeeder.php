<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\ShippingAddress;
use App\Models\User;
use DB;
use Exception;
use Faker\Factory as Faker;
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
        $faker = Faker::create();
        $totalRecords = 2;
        $chunkSize = 1;

        DB::beginTransaction();

        try {
            $shippingAddresses = [];
            $users = collect(User::all()->modelKeys())->toArray();
            $orders = collect(Order::all()->modelKeys())->toArray();

            for ($j = 1; $j <= $totalRecords; $j++) {
                $shippingAddresses[] = [
                    'user_id' => 1,
                    'order_id' => 1,
                    'address' => $faker->address,
                    'city' => $faker->city,
                    'state' => $faker->state,
                    'country' => $faker->country,
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString()
                ];
            }

            $chunks = array_chunk($shippingAddresses, $chunkSize);
            foreach ($chunks as $chunk) {
                ShippingAddress::insert($chunk);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}