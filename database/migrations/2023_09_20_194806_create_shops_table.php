<?php

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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->default("images/shops/default_avatar.png");
            $table->string("address")->nullable();
            $table->text("description")->nullable();
            $table->integer("rating")->nullable();
            $table->string('url')->unique();
            $table->enum('status', ['0', '1'])->comment('0: disabled, 1: enabled');
            $table->enum('type', ['0', '1', '2'])->nullable()->default('0')->comment('0: Chưa được duyệt, 1: Đã duyệt, 2: Duyệt không thành công');
            $table->enum('profile_number', ['1', '2', '3', '4'])->default('1')->comment('1: Tài khoản và thông tin, 2: Giấy tờ pháp lý, 3: Kích hoạt hồ sơ, 4: Tài khoản ngân hàng');
            $table->enum("followed", ['0', '1'])->comment("0: unfollowed, 1: followed");
            $table->string('name_bank')->nullable();
            $table->string('user_name_bank')->nullable();
            $table->string('number_bank')->nullable();
            $table->string('front_side')->nullable();
            $table->string('back_side')->nullable();
            $table->string('portrait_photo')->nullable();
            $table->string('national_id')->nullable();
            $table->string('reason_accpect')->nullable();
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