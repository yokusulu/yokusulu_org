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
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('id',10)->unsigned('id')->increments('id')->primary('id')->nullable('id');
            $table->string('name', 50)->nullable(false);
            $table->string('email', 100)->nullable(false);
            $table->string('password', 255)->nullable(false);
            $table->integer('del_flg', 1)->default($0);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
        Schema::create('host_users', function (Blueprint $table) {
            $table->integer('id',10)->unsigned('id')->increments('id')->primary('id')->nullable('id');
            $table->integer('user_id',10)->unsigned('id')->nullable(false);
            $table->string('phone', 11)->nullable(false);
            $table->integer('zip', 7)->nullable(false);
            $table->string('prefecture', 10)->nullable(false);
            $table->string('city', 30)->nullable(false);
            $table->string('ward', 30)->nullable(false);
            $table->string('address', 30)->nullable(false);
            $table->integer('del_flg', 1)->default($0);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
        Schema::create('super_users', function (Blueprint $table) {
            $table->integer('id',10)->unsigned('id')->increments('id')->primary('id')->nullable('id');
            $table->string('name', 50)->nullable(false);
            $table->string('email', 100)->nullable(false);
            $table->string('password', 255)->nullable(false);
            $table->integer('del_flg', 1)->default($0);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
        Schema::create('houses', function (Blueprint $table) {
            $table->integer('id',10)->unsigned('id')->increments('id')->primary('id')->nullable('id');
            $table->string('name', 100)->nullable(false);
            $table->string('host_name', 50)->nullable(false);
            $table->integer('zip', 7)->nullable(false);
            $table->string('prefecture', 10)->nullable(false);
            $table->string('city', 30)->nullable(false);
            $table->string('ward', 30)->nullable(false);
            $table->string('address', 30)->nullable(false);
            $table->integer('price', 8)->nullable(false);
            $table->integer('del_flg', 1)->default($0);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
        Schema::create('detail_houses', function (Blueprint $table) {
            $table->foreign('houses_id')->references('id')->on('detail_houses');
            $table->integer('id',10)->unsigned('id')->increments('id')->primary('id')->nullable('id');
            $table->integer('houses_id', 10)->nullable(false);
            $table->text('description')->nullable();
            $table->integer('del_flg', 1)->default($0);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
        Schema::create('disable_booking_dates', function (Blueprint $table) {
            $table->foreign('houses_id')->references('id')->on('disable_booking_dates');
            $table->integer('id',10)->unsigned('id')->increments('id')->primary('id')->nullable('id');
            $table->integer('houses_id', 10)->nullable(false);
            $table->integer('year', 4)->nullable(false);
            $table->integer('month', 2)->nullable(false);
            $table->integer('day', 2)->nullable(false);
            Schema::create('house_images', function (Blueprint $table) {
            $table->foreign('houses_id')->references('id')->on('house_images');
            $table->integer('id',10)->unsigned('id')->increments('id',10)->primary('id');
            $table->integer('houses_id', 10)->nullable(false);
            $table->binary('data');
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
                Schema::dropIfExists('posts');
            }
}