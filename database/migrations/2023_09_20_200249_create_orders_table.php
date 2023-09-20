<?php

use App\Models\Coupon;
use App\Models\OrderStatus;
use App\Models\PaymentMethod;
use App\Models\Product;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shipping_address_id');
            $table->foreign('shipping_address_id')->references('id')->on('shipping_address');
            $table->timestamp('delivery_date');
            $table->decimal('total_price', 10, 2);
            $table->string('shipping_unit');

            $table->foreignIdFor(Product::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Coupon::class);
            $table->foreignIdFor(OrderStatus::class);
            $table->foreignIdFor(PaymentMethod::class);

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
        Schema::dropIfExists('orders');
    }
};
