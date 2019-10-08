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
            $table->string('gender');
            $table->string('height')->nullble();
            $table->string('age');
            $table->string('job')->nullble();
            $table->string('education')->nullble();
            $table->string('horoscope')->nullble();
            $table->bigInteger('ad_id')->unsigned();
            $table->foreign('ad_id')->references('ad_id')->on('ads');
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
        Schema::dropIfExists('metrimonies');
    }
}
