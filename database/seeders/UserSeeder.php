<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'user_name' => 'quangthai',
                'full_name' => 'Trần Quang Thái',
                'email'     => 'quangthai@gmail.com',
                'birthday'  => Carbon::createFromFormat('d-m-Y', '10-10-2003')->format('Y-m-d'),
                'gender'    => '0',
                'avatar'    => 'images/products/2023/11/1-1-ratio_Morgan-Caddell-2191-scaled.jpg',
                'phone'     => '0774060610',
                'password'  => bcrypt('123456'),
                'type'      => 'user',
                'shop_id'   => null
            ],
            [
                'user_name' => 'admin',
                'full_name' => 'Admin',
                'email'     => 'admin@gmail.com',
                'birthday'  => Carbon::createFromFormat('d-m-Y', '10-10-2003')->format('Y-m-d'),
                'gender'    => '0',
                'avatar'    => 'images/products/2023/11/image.jpg',
                'phone'     => '0774060610',
                'password'  => bcrypt('123456'),
                'type'      => 'admin',
                'shop_id'   => 1
            ]
        ];

        User::insert($data);
    }
}
