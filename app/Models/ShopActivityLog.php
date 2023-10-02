<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShopActivityLog extends Model
{
    use HasFactory;

    const SIGN_IN = '0';
    const ADD_NEW = '1';
    const UPDATE  = '2';
    const DELETE  = '3';

    protected $table = 'shop_activity_log';

    protected $fillable = [
        'user_id',
        'action',
        'description',
        'device_name',
        'user_agent'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
