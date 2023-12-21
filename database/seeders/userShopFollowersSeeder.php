<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class userShopFollowersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo dữ liệu mẫu cho bảng 'user_shop_followers'
        $userShopFollowers = [
            [
                'user_id' => 1,
                'shop_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'shop_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm các bản ghi khác tại đây (nếu cần)
        ];

        // Thêm dữ liệu vào bảng 'user_shop_followers'
        DB::table('user_shop_followers')->insert($userShopFollowers);
    }
}
