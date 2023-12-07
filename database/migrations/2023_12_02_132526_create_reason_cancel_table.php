<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Shop;
use App\Models\Order;
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
        Schema::create('reason_cancel', function (Blueprint $table) {
            $table->id();
            $table->string('reason_name');

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
        Schema::dropIfExists('reason_cancel');
    }
};
