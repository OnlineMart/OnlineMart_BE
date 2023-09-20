<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public const DISABLED = "0";
    public const ENABLED  = "1";

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'category_id',
        'status',
        'shop_id',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'status' => 'integer',
    ];


    /**
     * @return BelongsTo
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }


    /**
     * @return HasMany
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'category_id');
    }


    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
