<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CouponType extends Model
{
    use HasFactory;

    public const ENABLE  = "0";
    public const DISABLE = "1";

    protected $table = 'coupon_type';


    protected $fillable = ['name', 'status'];

    /**
     * @return HasMany
     */
    public function coupon()
    {

        return $this->hasMany(Coupon::class);
    }


}
