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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->date('booking_date');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('customer_id');
            $table->string('vehicle_make');
            $table->string('vehicle_model');
            $table->string('vehicle_year');
            $table->string('vehicle_cc');
            $table->string('vehicle_transmission');
            $table->string('vehicle_color');
            $table->string('vehicle_chasis_id');
            $table->string('vehicle_fob');
            $table->string('vehicle_freight');
            $table->string('vehicle_total');
            $table->string('vehicle_deposit');
            $table->string('vehicle_remaining');
            $table->string('booking_status');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
        Schema::dropIfExists('books');
    }
};
