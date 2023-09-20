<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductMedia extends Model
{
    use HasFactory;

    protected $table = 'product_media';

    protected $fillable = [
        'product_variation_value_id',
        'product_media',
    ];

    /**
     * @return BelongsTo
     */
    public function product_variation_value()
    {
        return $this->belongsTo(ProductVariationValue::class, 'product_variation_value_id');
    }
}
