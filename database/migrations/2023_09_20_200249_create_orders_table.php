<?php

use App\Models\OrderStatus;
use App\Models\PaymentMethod;
use App\Models\User;
use App\Models\Voucher;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shipping_address_id');
            $table->foreign('shipping_address_id')->references('id')->on('shipping_address');
            $table->timestamp('delivery_date');
            $table->integer('total_price',);
            $table->string('shipping_unit');

            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Voucher::class);
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
