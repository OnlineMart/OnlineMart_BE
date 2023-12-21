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
    public function run(): void
    {
        $data = [
            [
                'name'         => 'Trần Quang Thái',
                'phone'        => '0774060610',
                'address_home' => '125/2 Hòa hưng',
                'city'         => 'Cần Thơ',
                'district'     => 'Huyện Thới Lai',
                'ward'         => 'Thị trấn thới lai',
                'is_default'   => '1',
                'is_select'    => '0',
                'user_id'      => 1
            ],
            [
                'name'         => 'Phạm Trường Xuân',
                'phone'        => '0961518977',
                'address_home' => '304 Phạm Văn Nhờ',
                'city'         => 'Hậu Giang',
                'district'     => 'Thị xã Long Mỹ',
                'ward'         => 'Phường Bình Thạnh',
                'is_default'   => '0',
                'is_select'    => '0',
                'user_id'      => 1
            ],
            [
                'name'         => 'Nguyễn Minh Tý',
                'phone'        => '0961518947',
                'address_home' => '304 Phạm Văn Nhờ',
                'city'         => 'Tỉnh An Giang',
                'district'     => 'Huyện Phú Tân',
                'ward'         => 'Xã Phú Thọ',
                'is_default'   => '0',
                'is_select'    => '0',
                'user_id'      => 1
            ],
            [
                'name'         => 'Nguyễn Hoàng Lịch',
                'phone'        => '0961228947',
                'address_home' => '304 Nguyễn Đình Triểu',
                'city'         => 'Hậu Giang',
                'district'     => 'Huyện Châu Thành A',
                'ward'         => 'Xã Thạnh Xuân',
                'is_default'   => '0',
                'is_select'    => '0',
                'user_id'      => 1
            ],
        ];

        UserAddress::insert($data);
    }
}
