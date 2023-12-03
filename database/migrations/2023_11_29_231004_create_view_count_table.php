<?php

use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
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
        Schema::create('view_count', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Shop::class);

            $table->enum('device_type', ['desktop', 'mobile', 'tablet']);
            $table->enum('page_type', ['product', 'shop']);

            $table->integer('count')->default(0);
            $table->integer('is_buy')->default(0);
            $table->dateTime('expired_at');
            $table->date('date_viewed')->nullable();
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
        Schema::dropIfExists('view_count');
    }
};
