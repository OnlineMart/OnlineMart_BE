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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("phone");
            $table->string('address_home');
            $table->string("city");
            $table->string("district");
            $table->string("ward");
            $table->enum("is_default", ['0', '1'])->comment('0: No, 1: Yes')->default('0');
            $table->enum("is_select", ['0', '1'])->comment('0: No, 1: Yes')->default('0');
            $table->foreignId('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('user_addresses');
    }
};
