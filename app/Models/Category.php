<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public const DISABLED = "0";
    public const ENABLED  = "1";

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'thumbnail_url',
        'parent_id',
        'status',
        'shop_id',
        'meta_title',
        'meta_description',
        'meta_keywords'
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

    public static function tree()
    {
        $allCategories = Category::orderBy('id', 'desc')->get();

        $categoryTree = self::buildCategoryTree($allCategories);

        return $categoryTree;
    }

    /**
     * Recursively build the category tree structure.
     *
     * @param $categories
     * @param $parentId
     *
     * @return array
     */
    public static function buildCategoryTree($categories, $parentId = null)
    {
        $categoryTree = [];

        foreach ($categories as $category) {
            if ($category->parent_id === $parentId) {
                $category->children = self::buildCategoryTree($categories, $category->id);
                $categoryTree[]     = $category;
            }
        }

        return $categoryTree;
    }

    /**
     * @param $category
     *
     * @return string
     */
    public static function getParentCategories($category)
    {
        $parentCategories = [];

        while ($category->parent_id !== null) {
            $parentCategory = Category::findOrFail($category->parent_id);

            if ($parentCategory === null) {
                break;
            }

            $parentCategories[] = $parentCategory->name;
            $category = $parentCategory;
        }

        return implode(" > ", array_reverse($parentCategories));
    }

}
