<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Order extends Model
{
    use HasFactory;

    public const PENDING = 0;


    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'voucher_id',
        'shop_id',
        'order_status_id',
        'payment_method_id',
        'shipping_address_id',
        'reason_cancel_id',
        'cf_token',
        'delivery_date',
        'total_price',
        'shipping_unit',
    ];

    /**
     * @return HasMany
     */
    public function order_detail(){
        return $this->hasMany(OrderDetail::class);
    }
    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     *
     * @return BelongsTo
     */
    public function shop(){
        return $this->belongsTo(Shop::class);
    }
    /**
     * @return BelongsTo
     */
    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }


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

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    /**
     * @return BeLongsTo
     */
    public function shipping_address()
     {
         return $this->belongsTo(ShippingAddress::class);
     }
     /**
      * @return HasOne
      */
      public function reason_cancel(){
        return $this->hasOne(ReasonCancel::class);
      }
}
