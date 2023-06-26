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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->float('location_lat');
            $table->float('location_lng');
            $table->foreignId('order_id')->references('id')->on('orders');
            $table->integer('phone');
            $table->string('nick_name', 45);
            $table->string('name_card', 45);
            $table->integer('card-num');
            $table->date('expiration_date');
            $table->integer('cvv');
            $table->string('zip_code');
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
        Schema::dropIfExists('deliveries');
    }
};
