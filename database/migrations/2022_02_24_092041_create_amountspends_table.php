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
        Schema::create('amountspends', function (Blueprint $table) {
            $table->id();
            $table->date('spend_date');
            $table->integer('amount_spend');
            $table->string('details');
            $table->string('unit_no');
            $table->integer('tax_amount');
            $table->integer('rc_amount');
            $table->integer('bl_amount');
            $table->integer('spendline_amount')->default('0');;
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
        Schema::dropIfExists('amountspends');
    }
};
