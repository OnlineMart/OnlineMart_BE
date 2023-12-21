<?php

namespace Database\Seeders;

use App\Models\Shop;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
                'name'           => 'Online Mart',
                'type'           => Shop::ENABLED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'Online Mart Trading',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'Shop Chính Hãng',
                'type'           => Shop::ENABLED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'Shop trading',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'Techmorevn',
                'type'           => Shop::ENABLED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'Techmorevn',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'Viễn thông Hà Nhung',
                'type'           => Shop::ENABLED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'Viễn thông Hà Nhung',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'PKCB',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'PKCB',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'QuaTangMe Extaste',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'QuaTangMe Extaste',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'Kids Sky',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'Kids Sky',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'BANCANTOICO',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'BANCANTOICO',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'PhucKhangshop',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'PhucKhangshop',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'Điện Thoại TN Store',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'Điện Thoại TN Store',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'FORMEN SHOP',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'FORMEN SHOP',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'OnlineMart Official',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'OnlineMart Official',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'SEAVY NHA TRANG',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'SEAVY NHA TRANG',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'THẮNG THAO MOBILE',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'THẮNG THAO MOBILE',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'VinBuy',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'VinBuy',
                'status'         => Shop::ENABLED,
            ],
            [
                'name'           => 'Lemans Shoes',
                'type'           => Shop::NOT_YET_APPROVED,
                'profile_number' => Shop::ACCOUNT_INFORMATION,
                'description'    => 'Lemans Shoes',
                'status'         => Shop::ENABLED,
            ],
        ];

        foreach ($data as $item) {
            Shop::insert([
                'name'           => $item['name'],
                'type'           => $item['type'],
                'profile_number' => $item['profile_number'],
                'description'    => $item['description'],
                'status'         => $item['status'],
                'created_at'     => now()->toDateTimeString(),
                'updated_at'     => now()->toDateTimeString(),
                'url'            => Str::slug($item['name']),
            ]);
        }
    }
}
