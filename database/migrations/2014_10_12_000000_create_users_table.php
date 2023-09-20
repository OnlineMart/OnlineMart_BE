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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email');
            $table->date('birthday');
            $table->enum('gender', ['0', '1'])->comment('0: male, 1: female');
            $table->integer('phone');
            $table->string('password');
            $table->string('address');
            $table->string('avatar');
            $table->bigInteger('role_id')->unsigned();
            $table->string('verification_code', 6);
            $table->enum('payment_method', ['0', '1', '2', '3'])->comment('0: type_id, 1: provider, 2: expiry_date, 3: is_default');
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
        Schema::dropIfExists('users');
    }
};
