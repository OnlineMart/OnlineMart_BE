<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('order_statuses', function (Blueprint $table) {
            $table->id();
            $table->enum('status_name', ['awaiting', 'processing', 'shipping', 'canceled', 'delivered'])->comment('awaiting: Chờ thanh toán, processing: Đang xử lý, shipping: Đang vận chuyển , canceled: Đã hủy, delivered: Đã giao hàng');
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
        Schema::dropIfExists('order_statuses');
    }
};
