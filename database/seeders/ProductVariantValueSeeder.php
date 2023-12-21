<?php

namespace Database\Seeders;

use Exception;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\ProductVariation;
use Illuminate\Support\Facades\DB;

class ProductVariantValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker           = Faker::create();
        $totalVariations = ProductVariation::count();

        DB::beginTransaction();

        try {
            for ($i = 1; $i <= $totalVariations; $i++) {
                $valuesPerVariation = rand(1, 3);
                $variationValues    = [];

                for ($j = 0; $j < $valuesPerVariation; $j++) {
                    $variationValue = $faker->word;
                    $thumbnailUrl   = null;

                    if (rand(0, 1) === 1) {
                        $thumbnailUrl = $faker->imageUrl(100, 100);
                    }

                    if ($variationValue !== null) {
                        $variationValues[] = [
                            'product_variation_id' => $i,
                            'variation_value_name' => $variationValue,
                            'thumbnail_url'        => $thumbnailUrl,
                            'sku'                  => $faker->uuid,
                            'regular_price'        => rand(10000, 100000),
                            'sale_price'           => rand(10000, 10000),
                            'created_at'           => now(),
                            'updated_at'           => now()
                        ];
                    }
                }

                if (!empty($variationValues)) {
                    DB::table('product_variation_values')->insert($variationValues);
                }
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
