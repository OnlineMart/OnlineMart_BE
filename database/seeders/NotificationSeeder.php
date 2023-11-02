<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'title'      => 'Đăng ký Home PayLater',
                'content'    => 'Hoàn thành đăng ký Home PayLater để mua sắm và được giảm đến 500K khi thanh toán',
                'status'     => 'unread',
                'type'       => 'voucher',
                'user_id'    => 1,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'title'      => 'Chương trình Mua trước trả sau Home PayLater',
                'content'    => 'Tài khoản của bạn đủ điều kiện tham gia chương trình Mua trước trả sau Home PayLater. Đăng ký ngay để mua sắm và được giảm đến 500K khi thanh toán bằng Home Pay',
                'status'     => 'unread',
                'type'       => 'voucher',
                'user_id'    => 2,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'title'      => 'Chương trình Mua trước trả sau Home PayLater',
                'content'    => 'Tài khoản của bạn đủ điều kiện tham gia chương trình Mua trước trả sau Home PayLater. Đăng ký ngay để mua sắm và được giảm đến 500K khi thanh toán bằng Home Pay',
                'status'     => 'unread',
                'type'       => 'voucher',
                'user_id'    => 1,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'title'      => 'Đơn hàng thành công',
                'content'    => 'Đơn hàng của bạn đã được giao thành công!',
                'status'     => 'unread',
                'type'       => 'order',
                'user_id'    => 1,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'title'      => 'Đơn hàng hủy',
                'content'    => 'Đơn hàng của bạn đã được hủy',
                'status'     => 'unread',
                'type'       => 'order',
                'user_id'    => 1,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'title'      => 'Đăng ký Home PayLater',
                'content'    => 'Hoàn thành đăng ký Home PayLater để mua sắm và được giảm đến 500K khi thanh toán',
                'status'     => 'unread',
                'type'       => 'other',
                'user_id'    => 1,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
            [
                'title'      => 'Đăng ký Home PayLater',
                'content'    => 'Hoàn thành đăng ký Home PayLater để mua sắm và được giảm đến 500K khi thanh toán',
                'status'     => 'unread',
                'type'       => 'other',
                'user_id'    => 1,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString()
            ],
        ];

        Notification::insert($data);
    }
}