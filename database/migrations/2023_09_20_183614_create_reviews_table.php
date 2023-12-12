<?php

use App\Models\Order;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->float('rating')->nullable();
            $table->integer('like_count')->nullable();
            $table->integer("parent_id")->nullable();
            $table->string('agree')->nullable();
            $table->string('disagree')->nullable();

            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Order::class);
            $table->foreignIdFor(Shop::class)->nullable();
            $table->foreignIdFor(Product::class);

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
        Schema::dropIfExists('reviews');
    }
};
