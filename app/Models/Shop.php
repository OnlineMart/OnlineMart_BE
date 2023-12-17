<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model
{
    use HasFactory;

    // status
    public const DISABLED = "0";
    public const ENABLED  = "1";

    // follow
    public const UNFOLLOWED = "0";
    public const FOLLOWED   = "1";

    // type
    public const NOT_YET_APPROVED = "0";
    public const APPROVED         = "1";
    public const APPROVED_ERROR   = "2";

    // profile_number
    public const ACCOUNT_INFORMATION = "1";
    public const DOCUMENTS_PROFILE   = "2";
    public const ACTIVE_SHOP         = "3";
    public const PAYMENT             = "4";

    protected $table = 'shops';

    protected $fillable = [
        'name',
        'avatar',
        'type',
        'profile_number',
        'followed',
        'status',
        'address',
        'description',
        'rating',
        'url',
        'name_bank',
        'user_name_bank',
        'number_bank',
        'front_side',
        'back_side',
        'portrait_photo',
        'national_id',
        'reason_accpect'
    ];

    /**
     * @return HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return HasMany
     */
    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    /**
     * @return HasMany
     */
    public function category(): HasMany
    {

        return $this->hasMany(Category::class);
    }

    /**
     * @return HasMany
     */
    public function voucher(): HasMany
    {
        return $this->hasMany(Voucher::class);
    }

    public function cartItem(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    /**
     *
     * @return hasMany
     */
    public function supplier()
    {
        return $this->hasMany(Supplier::class);
    }

    /**
     *
     * @return HasMany
     */
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
      /**
     * @return HasMany
     */
    public function reasonCancels()
    {
        return $this->hasMany(ReasonCancel::class);
    }
}
