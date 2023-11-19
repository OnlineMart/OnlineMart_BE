<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            ShopSeeder::class,
            RolesAndPermissionsSeeder::class,
            CategorySeeder::class,
            UserAddressSeeder::class,
            SupplierSeeder::class,
            ProductSeeder::class,
            ProductMediaSeeder::class,
            ProductVariantSeeder::class,
            ProductVariantValueSeeder::class,
            WishlistSeeder::class,
            ProductStockSeeder::class,
            NotificationSeeder::class,
            VoucherSeeder::class,
            ReviewSeeder::class,
            ReviewMediaSeeder::class,
        ]);
    }
}
