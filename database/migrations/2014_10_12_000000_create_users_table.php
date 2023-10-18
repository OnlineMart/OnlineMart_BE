<?php

use App\Models\Shop;
use App\Models\UserAddress;
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
            $table->string('user_name', 50)->nullable();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->date('birthday')->nullable();
            $table->enum('gender', ['0', '1'])->nullable()->default('0')->comment('0: male, 1: female');
            $table->string('phone')->nullable();
            $table->string('password');
            $table->enum('type', ['user', 'admin'])->default('user');
            $table->string('avatar')->nullable();
            $table->string('token', 6)->nullable();
            $table->enum('payment_method', ['0', '1', '2', '3'])->nullable()->comment('0: type_id, 1: provider, 2: expiry_date, 3: is_default');

            $table->foreignIdFor(Shop::class)->nullable();

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
