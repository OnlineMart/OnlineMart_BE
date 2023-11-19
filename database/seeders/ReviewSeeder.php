<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shopId   = 1;
        $parentId = null;
        $userId   = 4;

        for ($i = 1; $i <= 10; $i++) {
            $reviewData = [
                'content'    => "Review $i",
                'user_id'    => $userId,
                'product_id' => $i,
                'rating'     => rand(1, 5),
                'like_count' => rand(0, 100),
                'parent_id'  => $parentId,
                'shop_id'    => $shopId,
            ];
            Review::create($reviewData);
        }
    }
}
