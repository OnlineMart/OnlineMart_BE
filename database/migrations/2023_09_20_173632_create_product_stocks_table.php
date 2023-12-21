<?php

use App\Models\ProductVariationValue;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_stocks', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->nullable();
            $table->integer("import_price")->nullable();
            $table->integer("retail_price")->nullable();
            $table->integer("wholesale_price")->nullable();
            $table->integer("qty_inventory")->default(0);

            $table->foreignId('product_variant_value_id')->references('id')->on('product_variation_values');

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
        Schema::dropIfExists('product_stocks');
    }
};
