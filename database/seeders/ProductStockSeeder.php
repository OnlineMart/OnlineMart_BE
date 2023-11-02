<?php

namespace Database\Seeders;

use App\Models\ProductStock;
use App\Models\ProductVariationValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $variantValueIds = ProductVariationValue::all()->pluck('id')->toArray();

        foreach ($variantValueIds as $variantValueId) {
            if (!ProductStock::where('product_variation_value_id', $variantValueId)->exists()) {
                DB::table('product_stocks')->insert([
                    'sku' => 'SKU-' . $variantValueId,
                    'import_price' => rand(10, 100),
                    'retail_price' => rand(100, 200),
                    'wholesale_price' => rand(80, 150),
                    'qty_inventory' => rand(0, 100),
                    'product_variation_value_id' => $variantValueId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
