<?php

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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->default("avatar.png");
            $table->string("email")->unique();
            $table->integer("phone")->nullable();
            $table->string("address")->nullable();
            $table->text("description")->nullable();
            $table->integer("rating")->nullable();
            $table->enum('status', ['0', '1'])->comment('0: disabled, 1: enabled');
            $table->enum("followed", ['0', '1'])->comment("0: unfollowed, 1: followed");

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
        Schema::dropIfExists('shops');
    }
};
