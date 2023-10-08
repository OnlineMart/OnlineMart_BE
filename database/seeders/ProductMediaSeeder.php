<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory as Faker;
use App\Models\ProductMedia;
use Illuminate\Database\Seeder;

class ProductMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker    = Faker::create();

        foreach (range(1, 5000) as $index) {
            $media = $faker->imageUrl(280, 280);

            if ($media !== null) {
                ProductMedia::insert([
                    'product_id' => $index + 1,
                    'media'      => $media,
                    'is_main'    => 1,
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString()
                ]);
            }
        }
    }
}
