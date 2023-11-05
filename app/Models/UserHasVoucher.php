<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserHasVoucher extends Model
{
    use HasFactory;

    public const UNUSED = "0";
    public const USED   = "1";

    protected $table = 'user_has_voucher';

    protected $fillable = ['user_id', 'voucher_id', 'status', 'received_date',];

    /**
     * @return BelongsToMany
     */
    public function coupon()
    {
        return $this->belongsToMany(Voucher::class);
    }

    /**
     * @return BelongsToMany
     */
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

}
