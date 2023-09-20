<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model
{
    use HasFactory;

    public const DISABLED = "0";
    public const ENABLED  = "1";

    public const UNFOLLOWED = "0";
    public const FOLLOWED   = "1";

    protected $fillable = [
        'name',
        'avatar',
        'email',
        'phone',
        'address',
        'description',
        'rating',
        'status',
        'user_id',
        'followed',
    ];

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
    public function product()
    {

        return $this->belongsTo(Product::class);
    }

    /**
     * @return HasMany
     */
    public function category()
    {

        return $this->hasMany(Product::class);
    }

    /**
     * @return HasMany
     */
    public function coupon()
    {

        return $this->hasMany(Product::class);
    }
}
