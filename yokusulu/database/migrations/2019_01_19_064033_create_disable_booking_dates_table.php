<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisableBookingDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disable_booking_dates', function (Blueprint $table) {
            $table->foreign('houses_id')->references('id')->on('disable_booking_dates');
            $table->integer('id',10)->unsigned('id')->increments('id')->primary('id')->nullable('id');
            $table->integer('houses_id', 10)->nullable(false);
            $table->integer('year', 4)->nullable(false);
            $table->integer('month', 2)->nullable(false);
            $table->integer('day', 2)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disable_booking_dates');
    }
}
