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
                'avatar'    => 'https://www.seiu1000.org/sites/main/files/main-images/camera_lense_0.jpeg',
                'phone'     => '0774060610',
                'password'  => bcrypt('123456'),
            ]
        ];

        User::insert($data);
    }
}
