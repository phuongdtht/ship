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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('user_id');
            $table->string('name');
            $table->integer('phone');
            $table->string('address_start');
            $table->integer('location_start');
            $table->string('address_end');
            $table->integer('location_end');
            $table->time('time');
            $table->integer('ship_cost');
            $table->integer('users_id_ship');
            $table->string('users_name_ship');
            $table->integer('users_phone_ship');
            $table->string('intro');
            $table->string('content');
            $table->string('tag');
            $table->text('description');
            $table->integer('status');
            $table->boolean('active');
            $table->integer('user_id_update');

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
        Schema::dropIfExists('posts');
    }
}
