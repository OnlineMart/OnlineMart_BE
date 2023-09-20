<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'content',
        'image',
        'rating',
        'like_count',
        'parent_id',
        'user_id',
        'product_id',
    ];

    /**
     * @return BelongsTo
     */
    public function user()
    {

        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function product()
    {

        return $this->belongsTo(Product::class);
    }

    /**
     * @return HasMany
     */
    public function replies()
    {
        return $this->hasMany(Review::class, 'parent_id');
    }

}
