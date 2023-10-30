<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    public const ADMIN = 'admin';
    public const USER = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'user_name',
        'email',
        'password',
        'birthday',
        'gender',
        'phone',
        'avatar',
        'token',
        'payment_method',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     *  Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    /**
     *  Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims(): array
    {
        return [];
    }

    public function coupon(): BelongsToMany
    {

        return $this->belongsToMany(Coupon::class, 'user_has_coupons');
    }

    public function order(): HasMany
    {

        return $this->hasMany(Order::class);
    }

    public function shop(): HasMany
    {

        return $this->hasMany(Shop::class);
    }

    public function review(): HasMany
    {

        return $this->hasMany(Review::class);
    }

    public function notification(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

    public function cart(): HasOne
    {

        return $this->hasOne(Cart::class);
    }

    public function user_addresses(): HasMany
    {

        return $this->hasMany(UserAddress::class);
    }

    public function wishlists(): hasMany
    {
        return $this->hasMany(Wishlist::class, 'user_id', 'id');
    }
}
