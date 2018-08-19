<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->integer('score');
            $table->integer('total');
            $table->integer('role');
            $table->string('name');
            $table->string('introduce');
            $table->integer('count_order');
            $table->integer('gender');
            $table->string('email');
            $table->string('password');
            $table->string('phone');
            $table->date('date_of_birth');
            $table->integer('user_id_update');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
