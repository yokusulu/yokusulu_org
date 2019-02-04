<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('houses', function (Blueprint $table) {
			$table->increments('id')->nullable(false);
			$table->string('name', 100)->nullable(false);
			$table->unsignedInteger('users_id')->nullable(false);
			$table->string('zip', 7)->nullable(false);
			$table->string('prefecture', 10)->nullable(false);
			$table->string('city', 30)->nullable(false);
			$table->string('ward', 30)->nullable(false);
			$table->string('address', 30)->nullable(false);
			$table->integer('price')->nullable(false);
			$table->boolean('del_flg')->default(0);
			$table->date('rent_start_date')->nullable(false);
			$table->date('rent_end_date')->nullable(false);
			$table->timestamps();
			$table->foreign('users_id')->references('id')->on('users');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('houses');
	}
}
