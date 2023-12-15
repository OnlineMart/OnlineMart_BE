<?php

use App\Models\Category;
use App\Models\Shop;
use App\Models\Supplier;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('regular_price');
            $table->integer('sale_price')->nullable();
            $table->integer('flashsale_price')->nullable();
            $table->string('sku')->nullable();
            $table->integer('stock_qty')->default(0);
            $table->float('rating')->nullable()->from(0)->to(5);
            $table->integer("view_count")->default(0);
            $table->integer("sold_count")->default(0);
            $table->string("origin");
            $table->longText('description')->nullable();
//            $table->enum('status', ["selling", "out-of-stock", "draft", "waiting-for-approve", "off"]);
            $table->enum('status', ["selling", "out-of-stock", "draft", "off"]);
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(Shop::class);
            $table->foreignIdFor(Supplier::class);

            $table->string("meta_title")->nullable();
            $table->string("meta_keywords")->nullable();
            $table->string("meta_description")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
