<?php

use App\Models\OrderStatus;
use App\Models\PaymentMethod;
use App\Models\ShippingAddress;
use App\Models\User;
use App\Models\Voucher;
use App\Models\ReasonCancel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Shop;
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
            $table->timestamp('delivery_date');
            $table->integer('total_price',);
            $table->string('shipping_unit');
            $table->string('cf_token')->nullable();

            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Voucher::class)->nullable();
            $table->foreignIdFor(OrderStatus::class);
            $table->foreignIdFor(ShippingAddress::class);
            $table->foreignIdFor(ReasonCancel::class)->nullable();
            $table->foreignIdFor(Shop::class);
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
