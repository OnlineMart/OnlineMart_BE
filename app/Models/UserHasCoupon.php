<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserHasCoupon extends Model
{
    use HasFactory;

    public const UNUSED = "0";
    public const USED   = "1";

    protected $table = 'user_has_coupons';

    protected $fillable = ['user_id', 'coupon_id', 'status', 'received_date',];

    /**
     * @return BelongsToMany
     */
    public function coupon()
    {
        return $this->belongsToMany(Coupon::class);
    }

    /**
     * @return BelongsToMany
     */
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

}
