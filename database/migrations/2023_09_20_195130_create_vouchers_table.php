<?php

use App\Models\Shop;
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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->integer('usage_limit')->default(0);
            $table->unsignedDouble('min_discount_amount');
            $table->unsignedDouble('max_discount_amount');
            $table->float('discount')->unsigned();
            $table->enum('unit', ['0', '1'])->comment('0: %, 1: VNĐ');
            $table->string('start_date');
            $table->string('expired_date');
            $table->enum('status', ['0', '1', '2'])->comment('0: expired, 1: valid, 2:not activated');
            $table->foreignIdFor(Shop::class);
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
        Schema::dropIfExists('vouchers');
    }
};