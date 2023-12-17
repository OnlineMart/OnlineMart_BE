<?php

namespace Database\Seeders;

use App\Models\Shop;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();

        $data = [
            [
                'name' => 'Online Mart',
                'type' => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description' => 'Online Mart Trading',
                'status' => Shop::ENABLED,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
                'url' => 'online-mart',
            ],
            [
                'name' => 'Shop Chính Hãng',
                'type' => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description' => 'Shop trading',
                'status' => Shop::ENABLED,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
                'url' => 'shop-chinh-hang',
            ],
        ];

        Shop::insert($data);
    }
}