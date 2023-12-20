<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\ShippingAddress;
use Illuminate\Database\Seeder;

class CheckoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $shipping_address = [
            'name'     => 'Phạm Trươờng Xuân',
            'phone'    => '0961518977',
            'street'   => '125/2 hòa hưng',
            'ward'     => 'Phường an khánh',
            'district' => 'Quận ninh kiều',
            'city'     => 'Cần thơ',
            'status'   => '0',
            'user_id'  => 1,
        ];

        ShippingAddress::create($shipping_address);

        $data = [
            [
                'delivery_date'       => '2023-12-16 23:59:59',
                'total_price'         => 100000,
                'shipping_unit'       => 'GHN',
                'shipping_fee'        => 23500,
                'code'                => 'LF73RF',
                'shipping_address_id' => 1,
                'user_id'             => 1,
                'shop_id'             => 1,
                'voucher_id'          => null,
                'order_status_id'     => 1,
                'payment_method_id'   => 1,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                'delivery_date'       => '2023-12-16 23:59:59',
                'total_price'         => 25000,
                'shipping_fee'        => 23500,
                'shipping_unit'       => 'GHN',
                'code'                => 'LF73RF',
                'shipping_address_id' => 1,
                'user_id'             => 1,
                'shop_id'             => 1,
                'voucher_id'          => null,
                'order_status_id'     => 3,
                'payment_method_id'   => 1,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                'delivery_date'       => '2023-12-16 23:59:59',
                'total_price'         => 45000,
                'shipping_fee'        => 23500,
                'shipping_unit'       => 'GHN',
                'code'                => 'LF73RE',
                'shipping_address_id' => 1,
                'user_id'             => 2,
                'shop_id'             => 1,
                'voucher_id'          => null,
                'order_status_id'     => 4,
                'payment_method_id'   => 1,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                'delivery_date'       => '2023-12-16 23:59:59',
                'total_price'         => 25000,
                'shipping_fee'        => 23500,
                'shipping_unit'       => 'GHN',
                'code'                => 'LF73RE',
                'shipping_address_id' => 1,
                'user_id'             => 2,
                'shop_id'             => 1,
                'voucher_id'          => null,
                'order_status_id'     => 5,
                'payment_method_id'   => 1,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                'delivery_date'       => '2023-12-16 23:59:59',
                'total_price'         => 55000,
                'shipping_fee'        => 52000,
                'shipping_unit'       => 'GHN',
                'code'                => 'LF73RX',
                'shipping_address_id' => 1,
                'user_id'             => 2,
                'shop_id'             => 1,
                'voucher_id'          => null,
                'order_status_id'     => 1,
                'payment_method_id'   => 2,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
            [
                'delivery_date'       => '2023-12-16 23:59:59',
                'total_price'         => 58000,
                'shipping_fee'        => 52000,
                'shipping_unit'       => 'GHN',
                'code'                => 'LF73RX',
                'shipping_address_id' => 1,
                'user_id'             => 2,
                'shop_id'             => 1,
                'voucher_id'          => null,
                'order_status_id'     => 1,
                'payment_method_id'   => 2,
                'created_at'          => now(),
                'updated_at'          => now(),
            ],
        ];

        Order::insert($data);
    }
}
