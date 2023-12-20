<?php

use App\Models\User;
use App\Models\Voucher;
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
        Schema::create('user_has_voucher', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['0', '1'])->comment('0: Unused, 1: Used')->default(0);
            $table->timestamp('received_date')->nullable();

            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('voucher_id')->references('id')->on('vouchers');

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
        Schema::dropIfExists('user_has_voucher');
    }
};
