<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsTo
     */
    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }

    /**
     * @return BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * @return BelongsTo
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

}
