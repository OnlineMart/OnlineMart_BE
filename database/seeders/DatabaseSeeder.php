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
            ProductFullDataSeeder::class,
            WishlistSeeder::class,
            ProductStockSeeder::class,
            NotificationSeeder::class,
            VoucherSeeder::class,
            ShippingAddressSeeder::class,
            OrderStatusesSeeder::class,
            PaymentMethodsSeeder::class,
            ProductFullDataSeeder::class,
            OrdersSeeder::class,
            OrderDetailSeeder::class,
            ReviewSeeder::class,
            ReviewMediaSeeder::class,
            ViewCountSeeder::class,
            ReasonCancelSeeder::class
        ]);
    }
}