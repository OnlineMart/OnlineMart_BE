<?php

use App\Models\User;
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
        Schema::create('shop_activity_logs', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['0', '1', '2', '3'])->comment('0: Đăng nhập, 1: Thêm mới, 2: Cập nhật, 3: Xoá');
            $table->text('description');
            $table->string('device_name');
            $table->text('user_agent');

            $table->foreignIdFor(User::class);
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
        Schema::dropIfExists('shop_activity_logs');
    }
};
