<?php

namespace Database\Seeders;

use App\Models\Shop;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::beginTransaction();

        try {
            for ($i = 0; $i < 200; $i++) {
                Shop::factory()->create();
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
