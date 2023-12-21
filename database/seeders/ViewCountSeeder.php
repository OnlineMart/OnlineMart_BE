<?php

namespace Database\Seeders;

use App\Models\Shop;
use App\Models\User;
use App\Models\ViewCount;
use Illuminate\Database\Seeder;

class ViewCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = Shop::pluck('id')->toArray();

        for ($i = 0; $i < 100; $i++) {
            ViewCount::create([
                'shop_id'     => $shops[array_rand($shops)],
                'device_type' => ['desktop', 'mobile', 'tablet'][array_rand(['desktop', 'mobile', 'tablet'])],
                'page_type'   => ['product', 'shop'][array_rand(['product', 'shop'])],
                'count'       => rand(50, 200),
                'is_buy'      => rand(0, 50),
                'expired_at'  => now()->addDays(rand(0, 31)),
                'date_viewed' => now()->subDays(rand(0, 31))
            ]);
        }
    }
}
