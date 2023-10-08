<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public const DISABLED = "0";
    public const ENABLED  = "1";

    protected $table = "products";

    protected $fillable = [
        'category_id',
        'whislist_id',
        'brand_id',
        'shop_id',
        'name',
        'slug',
        'regular_price',
        'sale_price',
        'SKU',
        'rating',
        'view_count',
        'sold_count',
        'short_description',
        'long_description',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return HasMany
     */
    public function product_media(): HasMany
    {
        return $this->hasMany(ProductMedia::class);
    }

    /**
     * @return BelongsTo
     */
    public function wishlist(): BelongsTo
    {
        return $this->belongsTo(Wishlist::class);
    }

    /**
     * @return BelongsTo
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    /**
     * @return HasMany
     */
    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariation::class);
    }

    /**
     * @return BelongsTo
     */
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
}
