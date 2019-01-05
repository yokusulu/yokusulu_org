<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsigned('id')->increments('id')->primary('id');
            $table->string('name', 50)->nullable(false);
            $table->string('email', 100)->nullable(false);
            $table->string('password', 100)->nullable(false);
            $table->integer('del_flg', 1)->default("0");
            $table->timestamps('created_at');
            $table->timestamps('updated_at');

        Schema::create('host_users', function (Blueprint $table) {
            $table->unsigned('id')->increments('id')->primary('id');
            $table->integer('phone', 11)->nullable(false);
            $table->integer('zip', 7)->nullable(false);
            $table->string('prefecture', 10)->nullable(false);
            $table->string('city', 30)->nullable(false);
            $table->string('ward', 30)->nullable(false);
            $table->string('address', 30)->nullable(false);
            $table->integer('del_flg', 1)->default("0");
            $table->timestamps('created_at');
            $table->timestamps('updated_at');

        Schema::create('super_users', function (Blueprint $table) {
          $table->unsigned('id')->increments('id',10)->primary('id');
          $table->string('name', 50)->nullable(false);
          $table->string('email', 100)->nullable(false);
          $table->string('password', 100)->nullable(false);
          $table->integer('del_flg', 1)->default("0");
          $table->timestamps('created_at');
          $table->timestamps('updated_at');

        Schema::create('houses', function (Blueprint $table) {
          $table->unsigned('id')->increments('id')->primary('id');
          $table->string('name', 50)->nullable(false);
          $table->string('host_name', 50)->nullable(false);
          $table->integer('zip', 7)->nullable(false);
          $table->string('prefecture', 10)->nullable(false);
          $table->string('city', 30)->nullable(false);
          $table->string('ward', 30)->nullable(false);
          $table->string('address', 30)->nullable(false);
          $table->integer('price', 8)->nullable(false);
          $table->integer('del_flg', 1)->default("0");
          $table->timestamps('created_at');
          $table->timestamps('updated_at');

        Schema::create('detail_houses', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->text('houses_id');
          $table->text('description');
          $table->integer('del_flg', 1)->default("0");
          $table->timestamps('created_at');
          $table->timestamps('updated_at');

        Schema::create('disable_booking_dates', function (Blueprint $table) {
          $table->increments('id');
          $table->string('houses_id');
          $table->text('year');
          $table->text('month');
          $table->text('day');

        Schema::create('house_images', function (Blueprint $table) {
          $table->increments('id');
          $table->string('houses_id');
          $table->text('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
