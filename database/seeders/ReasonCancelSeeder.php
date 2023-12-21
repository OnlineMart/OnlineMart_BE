<?php

namespace Database\Seeders;

use App\Models\ReasonCancel;
use App\Models\Shop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReasonCancelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        $shops = Shop::all()->pluck('id');
        $reasons = [
            "Đổi ý không muốn mua nữa",
            "Thấy chỗ khác bán rẻ hơn",
            "Chưa có mã giảm giá",
            "Màu sắc không giống như hình ảnh",
            "Đã có sản phẩm tương tự",
            "Đã mua nhầm sản phẩm",
            "Sản phẩm không phù hợp với mong đợi",
            "Tôi đã có sản phẩm",
            "Sản phẩm không hoạt động đúng cách",
            "Sản phẩm có chưa chấc độc hại",
            "Sản phẩm bị hỏng",
            "Sản phẩm không đúng mô tả"
        ];
        for ($i = 1; $i <= 100; $i++) {
            $reasonCancel = [
                'reason_name' => $reasons[array_rand($reasons)],
                'shop_id' => $shops->random(),
            ];
            ReasonCancel::create($reasonCancel);
        }
        DB::commit();
    }
}
