<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Coupon extends Model
{
    use HasFactory;

    protected $table = 'coupons';

    protected $fillable = [
        'name',
        'code',
        'description',
        'usage_limit',
        'max_discount_amount',
        'discount',
        'start_date',
        'expiration_date',
        'shop_id',
        'coupon_type_id'
    ];

    /**
     * @return BelongsTo
     */
    public function coupon_type()
    {

        return $this->belongsTo(CouponType::class);
    }

    /**
     * @return BelongsToMany
     */
    public function user()
    {

        return $this->belongsToMany(User::class, 'user_has_coupons');
    }
}
