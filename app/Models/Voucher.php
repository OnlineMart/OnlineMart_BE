<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Voucher extends Model
{
    use HasFactory;

    public const EXPIRED = "0";

    public const VALID = "1";

    public const NOT_ACTIVATED = "2";

    protected $table = 'vouchers';

    protected $fillable = [
        'code',
        'usage_limit',
        'min_discount_amount',
        'max_discount_amount',
        'discount',
        'unit',
        'status',
        'start_date',
        'expired_date',
        'shop_id',
    ];


    /**
     * @return BelongsToMany
     */
    public function user()
    {

        return $this->belongsToMany(User::class, 'user_has_coupons');
    }

    /**
     * @return HasMany
     */
    public function userHasVoucher()
    {
        return $this->hasMany(UserHasVoucher::class, 'voucher_id');
    }
}
