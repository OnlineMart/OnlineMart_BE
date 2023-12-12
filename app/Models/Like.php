<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';
    
    protected $fillable = [
        'id',
        'status',
        'user_id',
        'product_id',
        'review_id',
    ];

    
    /**
     * @return belongsTo
     */
    public function review()
    {
        return $this->belongsTo(Review::class);
    }

}