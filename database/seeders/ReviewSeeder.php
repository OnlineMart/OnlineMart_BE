<?php

namespace Database\Seeders;

use App\Models\Review;
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
        $orderId  = 1;
        $agree = ["Êm chân", "Kiểu dáng đẹp, năng động", "Thoáng khí", "Trọng lượng nhẹ"];
        $disagree = ["Xấu", "Không đẹp"];

        for ($i = 1; $i <= 10; $i++) {
            $reviewData = [
                'content'    => "Review $i",
                'user_id'    => $userId,
                'product_id' => $i,
                'rating'     => rand(1, 5),
                'like_count' => rand(0, 100),
                'parent_id'  => $parentId,
                'shop_id'    => $shopId,
                'order_id'   => $orderId,
                'agree'      => $agree[array_rand($agree)],
                'disagree'   => $disagree[array_rand($disagree)],
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ];
            Review::create($reviewData);
        }
    }
}
