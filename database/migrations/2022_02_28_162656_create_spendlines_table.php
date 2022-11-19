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
        Schema::create('spendlines', function (Blueprint $table) {
            $table->id();
            $table->date('spendline_date');
            $table->integer('spendline_amount');
            $table->string('spendline_details');
            $table->unsignedBigInteger('amountspend_id');
            $table->foreign('amountspend_id')->references('id')->on('amountspends')->onDelete('cascade');
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
        Schema::dropIfExists('spendlines');
    }
};
