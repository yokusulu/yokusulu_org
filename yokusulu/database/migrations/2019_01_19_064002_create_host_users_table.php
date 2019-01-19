<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('host_users', function (Blueprint $table) {
            $table->integer('id',10)->unsigned('id')->increments('id')->primary('id')->nullable('id');
            $table->integer('user_id',10)->unsigned('id')->nullable(false);
            $table->string('phone', 11)->nullable(false);
            $table->integer('zip', 7)->nullable(false);
            $table->string('prefecture', 10)->nullable(false);
            $table->string('city', 30)->nullable(false);
            $table->string('ward', 30)->nullable(false);
            $table->string('address', 30)->nullable(false);
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
        Schema::dropIfExists('host_users');
    }
}
