<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Shop;
use Exception;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        $items = [];
        $faker = Faker::create();

        DB::beginTransaction();

        try {
            $cart = collect(Cart::all()->modelKeys());
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }

        $data = [
            [
                'id'         => '1',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 1790000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '2',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 500000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '3',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 400000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '4',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 400000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '5',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 350000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '6',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 2900000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '7',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 2400000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '8',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 7600000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '9',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 1500000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '10',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 5600000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '11',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 9999000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '12',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 1260000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '13',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 10000000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '14',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 89000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '15',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 3890000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '16',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 5000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '17',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 50000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '18',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 120000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '19',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 2370000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
            [
                'id'         => '20',
                'name'       => $faker->name(),
                'thumbnail'  => $faker->imageUrl(),
                'price'      => 4650000,
                'quantity'   => $faker->numberBetween(1, 50),
                'SKU'        => $faker->unique()->ean13(),
                'is_checked' => '0',
                'product_id' => $faker->randomNumber(1, 20),
                'shop_id'    => Shop::pluck('id')->random(),
                'cart_id'    => Cart::pluck('id')->random(),
            ],
        ];

        foreach ($data as $item) {
            CartItem::create($item);
        }
    }
}
