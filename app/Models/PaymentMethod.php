<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $table = 'payment_methods';

    protected $fillable = [
        'method_name'
    ];

    /**
     * @return HasMany
     */
    public function order()
    {
        return $this->hasMany(Order::class, 'payment_method_id');
    }
}
