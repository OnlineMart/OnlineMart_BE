<?php

namespace Database\Seeders;

use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
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
                'name'       => 'Quang Thái',
                'phone'      => '0774060610',
                'city'       => 'Can Tho',
                'district'   => 'Thoi Lai',
                'ward'       => 'Thoi Lai',
                'is_default' => '1',
                'user_id'    => 1
            ],
            [
                'name'       => 'Trần Quang Thái',
                'phone'      => '0774060611',
                'city'       => 'Can Tho',
                'district'   => 'Thoi Lai',
                'ward'       => 'Thoi Lai',
                'is_default' => '0',
                'user_id'    => 1
            ]
        ];

        UserAddress::insert($data);
    }
}
