<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'      => 1,
                'name'    => 'Supplier 1',
                'email'   => 'supplier 1',
                'phone'   => '0123456789',
                'website' => 'Supplier1.com',
                'code'    => 'SUPPLIER1',
                'address' => 'Supplier 1',
                'shop_id' => 1
            ],
            [
                'id'      => 2,
                'name'    => 'Supplier 2',
                'email'   => 'supplier 2',
                'phone'   => '0223456789',
                'website' => 'Supplier2.com',
                'code'    => 'SUPPLIER2',
                'address' => 'Supplier 2',
                'shop_id' => 1
            ],
            [
                'id'      => 3,
                'name'    => 'Supplier 3',
                'email'   => 'supplier 3',
                'phone'   => '033456789',
                'website' => 'Supplier3.com',
                'code'    => 'SUPPLIER3',
                'address' => 'Supplier 3',
                'shop_id' => 1
            ],
            [
                'id'      => 4,
                'name'    => 'Supplier 4',
                'email'   => 'supplier 4',
                'phone'   => '044456789',
                'website' => 'Supplier4.com',
                'code'    => 'SUPPLIER4',
                'address' => 'Supplier 4',
                'shop_id' => 2
            ],
            [
                'id'      => 5,
                'name'    => 'Supplier 5',
                'email'   => 'supplier 5',
                'phone'   => '0544956789',
                'website' => 'Supplier5.com',
                'code'    => 'SUPPLIER5',
                'address' => 'Supplier 5',
                'shop_id' => 2
            ],
            [
                'id'      => 6,
                'name'    => 'Supplier 6',
                'email'   => 'supplier 6',
                'phone'   => '0644296678',
                'website' => 'Supplier6.com',
                'code'    => 'SUPPLIER6',
                'address' => 'Supplier 6',
                'shop_id' => 3
            ],
            [
                'id'      => 7,
                'name'    => 'Supplier 7',
                'email'   => 'supplier 7',
                'phone'   => '0744429778',
                'website' => 'Supplier7.com',
                'code'    => 'SUPPLIER7',
                'address' => 'Supplier 7',
                'shop_id' => 1
            ],
            [
                'id'      => 8,
                'name'    => 'Supplier 8',
                'email'   => 'supplier 8',
                'phone'   => '0849944288',
                'website' => 'Supplier8.com',
                'code'    => 'SUPPLIER8',
                'address' => 'Supplier 8',
                'shop_id' => 3
            ],
            [
                'id'      => 9,
                'name'    => 'Supplier 9',
                'email'   => 'supplier 9',
                'phone'   => '094442998',
                'website' => 'Supplier9.com',
                'code'    => 'SUPPLIER9',
                'address' => 'Supplier 9',
                'shop_id' => 1
            ],
            [
                'id'      => 10,
                'name'    => 'Supplier 10',
                'email'   => 'supplier 10',
                'phone'   => '0145442108',
                'website' => 'Supplier10.com',
                'code'    => 'SUPPLIER10',
                'address' => 'Supplier 10',
                'shop_id' => 1
            ]
        ];
        foreach ($data as $supplierData) {
            Supplier::create($supplierData);
        }
    }
}
