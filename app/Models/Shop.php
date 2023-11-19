<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shop extends Model
{
    use HasFactory;

    public const DISABLED = "0";
    public const ENABLED  = "1";

    public const UNFOLLOWED = "0";
    public const FOLLOWED   = "1";

    protected $table = 'shops';

    protected $fillable = [
        'name',
        'avatar',
        'email',
        'phone',
        'address',
        'description',
        'rating',
        'status',
        'user_id'
    ];

    /**
     * @return HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {

        return $this->belongsTo(Product::class);
    }

    /**
     * @return HasMany
     */
    public function category(): HasMany
    {

        return $this->hasMany(Product::class);
    }

    /**
     * @return HasMany
     */
    public function coupon(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function cartItem(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    /**
     *
     * @return belongsTo
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function review(): HasMany
    {
        return $this->hasMany(Review::class);
    }

     /**
     *
     * @return belongsTo
     */
    public function order_detail(): HasMany
    {
        return $this->hasMany(OrderDetail::class);
    }
}
