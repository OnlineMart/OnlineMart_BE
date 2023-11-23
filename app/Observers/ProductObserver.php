<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class ProductObserver
{
    public function created(Product $product)
    {
        $this->checkStock($product);
    }

    public function updated(Product $product)
    {
        $this->checkStock($product);
    }

    private function checkStock($product)
    {
        $variants = $product->variants;
        $isVariant = $variants->count() > 0;
        $stock = 0;

        if ($isVariant) {

            foreach ($variants as $variant) {
                foreach ($variant->values as $variant_value) {
                    $stock += $variant_value->stock_qty;
                }
            }
        } else {
            $stock = (int) $product->stock_qty;
        }

        if ($stock === 0 && $product->status !== Product::OUT_OF_STOCK && $product->status === Product::SELLING) {
            $product->status = Product::OUT_OF_STOCK;
        }
    }
}
