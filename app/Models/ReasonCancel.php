<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class ReasonCancel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reason_cancel';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reason_name',
        'shop_id',
    ];

    /**
     * @return BelongsTo
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    /**
     *  @return BeLongsTo
     */
    public function order(){
        return $this->belongsTo(Order::class);
    }
}