<?php

use App\Models\CouponType;
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
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('code')->unsigned();
            $table->text('description')->nullable();
            $table->integer('usage_limit')->default(0);
            $table->float('max_discount_amount')->unsigned();
            $table->float('discount')->unsigned();
            $table->date('start_date');
            $table->date('expiration_date');

            $table->foreignIdFor(Shop::class);
            $table->foreignIdFor(CouponType::class);

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
        Schema::dropIfExists('coupons');
    }
};
