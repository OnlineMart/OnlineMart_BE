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
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamp('delivery_date');
            $table->integer('total_price');
            $table->string('shipping_unit');
            $table->string('code');
            $table->integer('shipping_fee');
            $table->foreignId('shipping_address_id')->references('id')->on('shipping_address');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('shop_id')->nullable()->references('id')->on('shops');
            $table->foreignId('voucher_id')->nullable()->references('id')->on('vouchers');
            $table->foreignId('reason_cancel_id')->nullable()->references('id')->on('reason_cancel');
            $table->string('cf_token')->nullable();

            $table->foreignId('order_status_id')->references('id')->on('order_statuses');
            $table->foreignId('payment_method_id')->references('id')->on('payment_methods');
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
        Schema::dropIfExists('orders');
    }
};
