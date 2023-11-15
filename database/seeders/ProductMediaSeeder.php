<?php

namespace Database\Seeders;

use App\Models\ProductMedia;
use Faker\Factory as Faker;
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
        $faker = Faker::create();

        foreach (range(0, 499) as $index) {
            $mainMedia = $faker->imageUrl(280, 280);

            if ($mainMedia !== null) {
                ProductMedia::insert([
                    'product_id' => $index + 1,
                    'media'      => $mainMedia,
                    'is_main'    => 1,
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString()
                ]);

                $numAdditionalMedia = rand(1, 10);

                for ($i = 0; $i < $numAdditionalMedia; $i++) {
                    $additionalMedia = $faker->imageUrl(280, 280);

                    if ($additionalMedia !== null) {
                        ProductMedia::insert([
                            'product_id' => $index + 1,
                            'media'      => $additionalMedia,
                            'is_main'    => 0,
                            'created_at' => now()->toDateTimeString(),
                            'updated_at' => now()->toDateTimeString()
                        ]);
                    }
                }
            }
        }
    }
}
