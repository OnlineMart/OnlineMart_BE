<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReviewMedia extends Model
{
    use HasFactory;

    protected $table = 'review_media';

    protected $fillable = [
        'review_id',
        'media',
    ];

    /**
     * @return BelongsTo
     */
    public function reviews(): BelongsTo
    {
        return $this->belongsTo(Review::class);
    }
}
