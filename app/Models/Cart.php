<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    public const ACTIVE    = '0';
    public const INACTIVE  = '1';
    public const COMPLETED = '2';

    protected $table = 'cart';

    protected $fillable = ['user_id', 'token', 'status'];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
