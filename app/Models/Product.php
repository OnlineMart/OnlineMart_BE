<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public const SELLING             = 'selling';
    public const OUT_OF_STOCK        = 'out-of-stock';
    public const DRAFT               = 'draft';
    public const WAITING_FOR_APPROVE = 'waiting-for-approve';
    public const OFF                 = 'off';

    public const SIMPLE       = 'simple';
    public const CONFIGURABLE = 'configurable';

    public const RELATED_LIMIT = 10;

    protected $table = "products";

    protected $fillable = [
        'category_id',
        'supplier_id',
        'shop_id',
        'origin',
        'name',
        'slug',
        'stock_qty',
        'regular_price',
        'sale_price',
        'sku',
        'status',
        'rating',
        'view_count',
        'sold_count',
        'description',
        'meta_title',
        'meta_keyword',
        'meta_description'
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

    // /**
    //  * @return BelongsTo
    //  */
    // public function users(): BelongsToMany
    // {
    //     return $this->belongsToMany(User::class, 'wishlists', 'product_id', 'user_id');
    // }

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

    /**
     * @return HasMany
     */
    public function review(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    /**
     * @return HasMany
     */
    public function product_views(): HasMany
    {
        return $this->hasMany(ProductView::class);
    }
}
