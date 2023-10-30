<?php

namespace Database\Seeders;

use App\Models\Wishlist;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id'    => 1,
                'product_id' => 1,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'user_id'    => 1,
                'product_id' => 2,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'user_id'    => 1,
                'product_id' => 3,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ]
        ];

        Wishlist::insert($data);
    }
}
