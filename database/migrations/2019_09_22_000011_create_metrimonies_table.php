<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetrimoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metrimonies', function (Blueprint $table) {
            $table->increments('met_id');
            $table->integer('gender');
            $table->integer('height')->nullble();
            $table->integer('age');
            $table->integer('job')->nullble();
            $table->integer('education')->nullble();
            $table->integer('horoscope')->nullble();
            $table->bigInteger('ad_id')->unsigned();
            $table->foreign('ad_id')->references('ad_id')->on('ads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metrimonies');
    }
}
