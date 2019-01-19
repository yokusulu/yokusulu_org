<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_houses', function (Blueprint $table) {
            $table->foreign('houses_id')->references('id')->on('detail_houses');
            $table->integer('id',10)->unsigned('id')->increments('id')->primary('id')->nullable('id');
            $table->integer('houses_id', 10)->nullable(false);
            $table->text('description')->nullable();
            $table->integer('del_flg', 1)->default(0);
            $table->timestamps('created_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamps('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_houses');
    }
}
