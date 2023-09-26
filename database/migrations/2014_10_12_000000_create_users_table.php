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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',);
            $table->string('email');
            $table->date('birthday')->nullable();
            $table->enum('gender', ['0', '1'])->comment('0: male, 1: female')->nullable();
            $table->integer('phone')->nullable();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('avatar')->nullable();
            $table->string('verification_code', 6)->nullable();
            $table->enum('payment_method', ['0', '1', '2', '3'])->comment('0: type_id, 1: provider, 2: expiry_date, 3: is_default')->nullable();
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
        Schema::dropIfExists('users');
    }
};
