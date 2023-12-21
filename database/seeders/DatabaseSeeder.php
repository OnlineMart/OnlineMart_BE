<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PaymentMethod;
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
            NotificationSeeder::class,
            VoucherSeeder::class,
            ShippingAddressSeeder::class,
            OrderStatusesSeeder::class,
            PaymentMethodSeeder::class,
            ReviewSeeder::class,
            ViewCountSeeder::class,
            ReasonCancelSeeder::class,
            CheckoutSeeder::class,
            ReasonCancelSeeder::class,
            userShopFollowersSeeder::class
        ]);
    }
}
