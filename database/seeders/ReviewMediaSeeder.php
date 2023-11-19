<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\ReviewMedia;
use Illuminate\Database\Seeder;

class ReviewMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(0, 9) as $index) {
            $mainMedia = $faker->imageUrl(280, 280);

            if ($mainMedia !== null) {
                ReviewMedia::insert([
                    'review_id'  => $index + 1,
                    'media'      => $mainMedia,
                    'created_at' => now()->toDateTimeString(),
                    'updated_at' => now()->toDateTimeString()
                ]);

                $numAdditionalMedia = rand(0, 3);

                for ($i = 0; $i < $numAdditionalMedia; $i++) {
                    $additionalMedia = $faker->imageUrl(280, 280);

                    if ($additionalMedia !== null) {
                        ReviewMedia::insert([
                            'review_id'  => $index + 1,
                            'media'      => $additionalMedia,
                            'created_at' => now()->toDateTimeString(),
                            'updated_at' => now()->toDateTimeString()
                        ]);
                    }
                }
            }
        }
    }
}
