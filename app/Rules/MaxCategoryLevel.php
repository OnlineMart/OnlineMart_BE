<?php

namespace App\Rules;

use App\Models\Category;
use Illuminate\Contracts\Validation\Rule;

class MaxCategoryLevel implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($value === null) {
            return true;
        }

        $parentCategory = Category::find($value);

        $depth = 0;
        while ($parentCategory) {
            $depth++;
            $parentCategory = Category::find($parentCategory->parent_id);
        }

        return $depth <= 2;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Danh mục sản phẩm tối đa được phép là 3 cấp';
    }
}
