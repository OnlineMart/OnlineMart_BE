<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    public const PENDING = 0;


    protected $table = 'orders';

    protected $fillable = [
        'products_id',
        'user_id',
        'coupon_id',
        'order_status_id',
        'payment_method_id',
        'shipping_address_id',
        'delivery_date',
        'total_price',
        'shipping_unit',
    ];

    /**
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    // public function coupon()
    // {
    //     return $this->belongsTo(Coupon::class);
    // }

    /**
     * @return BelongsTo
     */
    public function order_status()
    {
        return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }

    /**
     * @return BelongsTo
     */
    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }

    /**
     * @return BelongsTo
     */
    public function shipping_address()
    {
        return $this->belongsTo(ShippingAddress::class, 'shipping_address_id');
    }
}
