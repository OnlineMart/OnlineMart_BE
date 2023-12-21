<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    public const CODE     = '0';
    public const VN_PAY   = '1';

    public const PENDING   = "0";
    public const COMPLETED = "1";
    public const DECLINE   = "2";
    public const REFUND    = "3";

    protected $fillable = [
        'user_id',
        'order_id',
        'type',
        'status',
    ];

    protected $casts = [
        'type'   => 'integer',
        'status' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
