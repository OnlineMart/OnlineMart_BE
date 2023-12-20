<?php

use App\Models\ProductSku;
use App\Models\ProductVariation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variation_values', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_variation_id')->references('id')->on('product_variations');
            $table->string("variation_value_name", 50);
            $table->string("thumbnail_url")->nullable();
            $table->string('sku')->nullable();
            $table->integer("regular_price")->nullable();
            $table->integer("sale_price")->nullable();
            $table->integer("flashsale_price")->nullable();
            $table->integer("stock_qty")->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_variation_values');
    }
};
