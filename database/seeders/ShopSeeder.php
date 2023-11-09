<?php

namespace Database\Seeders;

use App\Models\Shop;
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
        $data = [
            [
                'name'        => 'Tiki Trading',
                'email'       => 'tiki_trading@gmail.com',
                'avatar'      => 'https://salt.tikicdn.com/cache/w220/ts/seller/21/ce/5c/b52d0b8576680dc3666474ae31b091ec.jpg',
                'phone'       => '0774060610',
                'address'     => 'Cần Thơ',
                'description' => 'Tiki Trading',
                'rating'      => 4.7,
                'status'      => Shop::ENABLED,
                'created_at'  => now()->toDateTimeString(),
                'updated_at'  => now()->toDateTimeString()
            ],
            [
                'name'        => 'Nestlé Chính Hãng',
                'email'       => 'nestlé_chính_hã@gmail.com',
                'avatar'      => 'https://salt.tikicdn.com/cache/w220/ts/seller/94/a6/98/1a684931b4f44e3e26cd821f1858a13d.jpg',
                'phone'       => '0774060610',
                'address'     => 'Cần Thơ',
                'description' => 'Nestlé Chính Hãng',
                'rating'      => 4.7,
                'status'      => Shop::ENABLED,
                'created_at'  => now()->toDateTimeString(),
                'updated_at'  => now()->toDateTimeString()
            ]
        ];

        Shop::insert($data);
    }
}
