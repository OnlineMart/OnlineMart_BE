<?php

namespace Database\Seeders;

use App\Models\Product;
use Exception;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker        = Faker::create();
        $totalRecords = 100;
        $chunkSize    = 10;

        DB::beginTransaction();

        try {
            $this->command->getOutput()->progressStart($totalRecords / $chunkSize);
            $products = Product::all()->modelKeys();

            $variations = [];

            foreach ($products as $product) {
                // Determine if the product will have variations or not.
                $hasVariations = (rand(1, 10) <= 6);

                if ($hasVariations) {
                    // Determine the number of variations for this product (1 or 2).
                    $numVariations = rand(1, 2);

                    for ($j = 0; $j < $numVariations; $j++) {
                        $variationName = $faker->word;

                        if ($variationName !== null) {
                            $variations[] = [
                                'variation_name' => $variationName,
                                'product_id'     => $product,
                                'created_at'     => now(),
                                'updated_at'     => now()
                            ];
                        }
                    }
                }
            }

            $chunks = array_chunk($variations, $chunkSize);

            foreach ($chunks as $chunk) {
                DB::table('product_variations')->insert($chunk);
                $this->command->getOutput()->progressAdvance();
            }

            $this->command->getOutput()->progressFinish();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
