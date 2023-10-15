<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductVariationValue extends Model
{
    use HasFactory;

    protected $table = 'product_variation_values';

    protected $fillable = [
        'product_variation_id',
        'variation_value_name',
        'thumbnail_url',
    ];

    /**
     * @return BelongsTo
     */
    public function variation(): BelongsTo
    {
        return $this->belongsTo(ProductVariation::class, 'product_variation_id');
    }
}
