<?php

namespace Database\Seeders;

use Exception;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ProductMedia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductFullDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $productData = config('data.products');

            foreach ($productData as $data) {
                $product = Product::create([
                    'name'             => $data['name'],
                    'slug'             => Str::slug($data['name']),
                    'regular_price'    => $data['regular_price'] ?? 0,
                    'sale_price'       => $data['sale_price'] ?? 0,
                    'sku'              => $data['sku'] ?? null,
                    'stock_qty'        => $data['stock_qty'] ?? 0,
                    'rating'           => 0,
                    'view_count'       => 0,
                    'sold_count'       => 0,
                    'description'      => $data['description'],
                    'origin'           => $data['origin'],
                    'status'           => $data['status'],
                    'category_id'      => $data['category_id'],
                    'shop_id'          => $data['shop_id'],
                    'supplier_id'      => $data['supplier_id'],
                    'meta_title'       => $data['meta_title'] ?? '',
                    'meta_keyword'     => $data['meta_keyword'] ?? '',
                    'meta_description' => $data['meta_description'] ?? ''
                ]);

                ProductMedia::create([
                    'product_id' => $product->id,
                    'media'      => $data['thumbnail_url'],
                    'is_main'    => true
                ]);

                if (isset($data['gallery'])) {
                    foreach (json_decode($data['gallery']) as $image) {
                        ProductMedia::create([
                            'product_id' => $product->id,
                            'media'      => $image,
                            'is_main'    => false
                        ]);
                    }
                }

                if (isset($data['variants'])) {
                    foreach (json_decode($data['variants'], true) as $variantData) {
                        $variant = $product->variants()->create([
                            'variation_name' => $variantData['variant_name']
                        ]);

                        foreach ($variantData['variant_values'] as $valueName => $valueAttributes) {
                            $variant->values()->create([
                                'variation_value_name' => $valueName,
                                'sku'                  => $valueAttributes['product_code'],
                                'regular_price'        => $valueAttributes['selling_price'],
                                'sale_price'           => $valueAttributes['sale_price'] ?? 0,
                                'stock_qty'            => $valueAttributes['quantity'] ?? 0
                            ]);
                        }
                    }
                }
            }

            DB::commit();
        } catch (Exception $e) {
            echo $e->getMessage();
            DB::rollBack();
        }
    }
}