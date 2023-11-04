<?php

namespace Database\Seeders;

use App\Models\Shop;
use App\Models\Category;
use App\Models\Supplier;
use Exception;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
            $products   = [];
            $categories = collect(Category::all()->modelKeys());
            $shops      = collect(Shop::all()->modelKeys());
            $suppliers  = collect(Supplier::all()->modelKeys());
            $this->command->getOutput()->progressStart($totalRecords / $chunkSize);

            for ($j = 1; $j <= $totalRecords; $j++) {
                $regularPrice = $faker->randomFloat(2, 10000, 10000000);
                $salePrice    = $faker->randomElement([0, 0, $faker->randomFloat(2, 0.01, $regularPrice)]);

                $products[] = [
                    'name'          => $faker->sentence,
                    'slug'          => $faker->slug,
                    'regular_price' => $regularPrice,
                    'sale_price'    => $salePrice,
                    'sku'           => $faker->unique()->ean13,
                    'rating'        => $faker->randomFloat(1, 0, 5),
                    'view_count'    => $faker->numberBetween(0, 10000),
                    'sold_count'    => $faker->numberBetween(0, 10000),
                    'origin'        => "VI",
                    'description'   => $faker->paragraphs(3, true),
                    'status'        => $faker->randomElement(["selling", "out-of-stock", "draft", "waiting-for-approve", "off"]),
                    'category_id'   => $categories->random(),
                    'shop_id'       => $shops->random(),
                    'supplier_id'   => $suppliers->random(),
                    'created_at'    => now()->toDateTimeString(),
                    'updated_at'    => now()->toDateTimeString()
                ];
            }

            $chunks = array_chunk($products, $chunkSize);

            foreach ($chunks as $chunk) {
                DB::table('products')->insert($chunk);
                $this->command->getOutput()->progressAdvance();
                $products = [];
            }

            $this->command->getOutput()->progressFinish();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
