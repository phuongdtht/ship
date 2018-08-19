<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->integer('banner_id');
            $table->string('images');
            $table->string('link');
            $table->string('text1');
            $table->string('text2');
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
        Schema::dropIfExists('banner_items');
    }
}
