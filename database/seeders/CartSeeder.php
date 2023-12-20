<?php

namespace Database\Seeders;

use App\Models\Cart;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {
        Cart::factory()->count(5)->create();
    }
}
