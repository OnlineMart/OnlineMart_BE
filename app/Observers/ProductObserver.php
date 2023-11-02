<?php

namespace App\Observers;

use App\Models\Product;

class ProductObserver
{
    public function creating(Product $product)
    {
        $this->checkStock($product);
    }

    public function updating(Product $product)
    {
        $this->checkStock($product);
    }

    private function checkStock($product)
    {
        if ((int) $product->stock_qty === 0 && $product->status !== Product::OUT_OF_STOCK && $product->status === Product::SELLING) {
            $product->status = Product::OUT_OF_STOCK;
        }
    }
}
