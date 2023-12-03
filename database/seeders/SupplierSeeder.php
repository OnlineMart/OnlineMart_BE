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
                'name'    => 'Vinamilk',
                'email'   => 'vinamilk@vinamilk.com.vn',
                'phone'   => '0300588569',
                'website' => 'https://www.vinamilk.com.vn',
                'code'    => 'VNM',
                'address' => ' Số 10, Đường Tân Trào, phường Tân Phú, quận 7, Tp. HCM',
                'shop_id' => 1,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ],
            [
                'id '     => 2,
                'name'    => "Biti's",
                'email'   => 'bitis@bitis.com.vn',
                'phone'   => '02838228888',
                'website' => 'https://www.bitis.com.vn',
                'code'    => 'BTS',
                'address' => ' 180-182 Lý Chính Thắng, Phường 9, Quận 3, Tp. HCM',
                'shop_id' => 2,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ], [
                'id '     => 3,
                'name'    => 'Canifa',
                'email'   => 'canifa@canifa.com',
                'phone'   => '02473008888',
                'website' => 'https://www.canifa.com',
                'code'    => 'CFA',
                'address' => ' Tầng 5, Tòa nhà VTC Online, số 18 Tam Trinh, Hai Bà Trưng, Hà Nội',
                'shop_id' => 3,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ], [
                'id '     => 4,
                'name'    => 'KFC',
                'email'   => 'kfc@kfc.com.vn',
                'phone'   => '19006886',
                'website' => 'https://www.kfc.com.vn',
                'code'    => 'KFC',
                'address' => ' 292 Bà Triệu, Phường Lê Đại Hành, Quận Hai Bà Trưng, Hà Nội',
                'shop_id' => 4,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ], [
                'id '     => 5,
                'name'    => 'Owen',
                'email'   => 'owen@owen.com.vn',
                'phone'   => '02873008888',
                'website' => 'https://www.owen.com.vn',
                'code'    => 'OWN',
                'address' => ' 35 Nguyễn Huệ, Phường Bến Nghé, Quận 1, Tp. HCM',
                'shop_id' => 5,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ], [
                'id '     => 6,
                'name'    => 'Adidas',
                'email'   => 'adidas@adidas.com.vn',
                'phone'   => '02838228888',
                'website' => 'https://www.adidas.com.vn',
                'code'    => 'ADS',
                'address' => ' 26 Lê Lợi, Phường Bến Thành, Quận 1, Tp. HCM',
                'shop_id' => 6,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ], [
                'id '     => 7,
                'name'    => 'Pizza Hut',
                'email'   => 'pizzahut@pizzahut.com.vn',
                'phone'   => '19006066',
                'website' => 'https://www.pizzahut.com.vn',
                'code'    => 'PH',
                'address' => ' 30-32 Đinh Tiên Hoàng, Phường Đa Kao, Quận 1, Tp. HCM',
                'shop_id' => 7,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ], [
                'id '     => 8,
                'name'    => 'Nem',
                'email'   => 'nem@nem.com.vn',
                'phone'   => '02473008888',
                'website' => 'https://www.nem.com.vn',
                'code'    => 'NEM',
                'address' => ' 72 Trần Hưng Đạo, Phường Cửa Nam, Quận Hoàn Kiếm, Hà Nội',
                'shop_id' => 8,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ], [
                'id '     => 9,
                'name'    => 'Nike',
                'email'   => 'nike@nike.com.vn',
                'phone'   => '02838228888',
                'website' => 'https://www.nike.com.vn',
                'code'    => 'NKE',
                'address' => ' 63 Nguyễn Trãi, Phường Bến Thành, Quận 1, Tp. HCM',
                'shop_id' => 9,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ], [
                'id '     => 10,
                'name'    => 'Lotteria',
                'email'   => 'lotteria@lotteria.com.vn',
                'phone'   => '19006066',
                'website' => 'https://www.lotteria.com.vn',
                'code'    => 'LTA',
                'address' => ' 19-25 Nguyễn Huệ, Phường Bến Nghé, Quận 1, Tp. HCM',
                'shop_id' => 10,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ]
        ];
        Supplier::insert($data);
    }
}
