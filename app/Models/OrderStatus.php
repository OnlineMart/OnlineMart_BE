<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class OrderStatus extends Model
{
    protected $table = 'order_statuses';

    protected $fillable = [
        'status_name',
    ];

    // Các giá trị cho trạng thái đơn hàng
    const STATUS_PENDING_PAYMENT = '0';
    const STATUS_PROCESSING = '1';
    const STATUS_DELIVERED = '2';
    const STATUS_SHIPPING = '3';
    const STATUS_CANCELLED = '4';

    // Mô tả ý nghĩa của từng giá trị trạng thái
    // const STATUS_DESCRIPTIONS = [
    //     self::STATUS_PENDING_PAYMENT => 'Chờ thanh toán',
    //     self::STATUS_PROCESSING => 'Đang xử lý',
    //     self::STATUS_DELIVERED => 'Đã giao',
    //     self::STATUS_SHIPPING => 'Đang vận chuyển',
    //     self::STATUS_CANCELLED => 'Đã hủy',
    // ];


    public function order(): HasMany{
        return $this->hasMany(Order::class);
    }
}