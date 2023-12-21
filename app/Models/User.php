<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Exception;
use App\Models\Shop;
use App\Models\Order;
use App\Models\Voucher;
use Illuminate\Http\JsonResponse;
use Twilio\Rest\Client;
use App\Mail\SendVerifiedEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    public const USER = 'user';
    public const ADMIN_SHOP = 'adminShop';
    public const SUPER_ADMIN = 'superAdmin';

    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';

    public const OWNER = 'owner';
    public const SELLER = 'seller';

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
        'otp',
        'otp_send_at',
        'payment_method',
        'type',
        'status',
        'position',
        'shop_id'
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

    public function voucher(): BelongsToMany
    {

        return $this->belongsToMany(Voucher::class, 'user_has_voucher');
    }

    public function order(): HasMany
    {

        return $this->hasMany(Order::class);
    }
    /**
     * @return HasMany
     */

     public function user_shop_followers()
    {
        return $this->hasMany(Shop::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
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

    public function sellers(): HasOne
    {
        return $this->hasOne(Seller::class);
    }

    public function token(): HasMany
    {
        return $this->hasMany(Token::class);
    }


    public function getTeamIdFromToken(): int | null
    {
        return $this->shop_id;
    }

    /**
     * @param $receiverEmail
     * @param $user
     *
     * @return JsonResponse|void
     */
    public function sendEmailVerification($receiverEmail, $user)
    {
        try {
            Mail::to($receiverEmail)->send(new SendVerifiedEmail($user));

        } catch(Exception $e) {
            return jsonResponse(null, 400, $e->getMessage());
        }
    }

    /**
     * @param $receiverPhone
     * @param $message
     *
     * @return JsonResponse|void
     */
    public function sendSmsVerification($receiverPhone, $message)
    {
        try {
            $account_id = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");

            $client = new Client($account_id, $auth_token);
            $client->messages->create($receiverPhone, [
                'from' => $twilio_number,
                'body' => $message
            ]);

        } catch(Exception $e) {
            return jsonResponse(null, 400, $e->getMessage());
        }
    }
}
