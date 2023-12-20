<?php

use App\Models\Cart;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('cart_item', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('thumbnail');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('SKU');
            $table->enum('is_checked', ['0', '1'])->comment('0: Unchecked, 1: Checked');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->foreignId('shop_id')->references('id')->on('shops');
            $table->foreignId('cart_id')->references('id')->on('carts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_item');
    }
};
