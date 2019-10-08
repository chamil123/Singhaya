<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->increments('land_id');
            $table->string('size',20);
            $table->string('electricity')->nullble();
            $table->string('water')->nullble();
            $table->string('roads')->nullble();
            $table->bigInteger('ad_id')->unsigned();
            $table->foreign('ad_id')->references('ad_id')->on('ads');
            $table->timestamps();

            // $table->bigInteger('type_id')->unsigned();
            // $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lands');
    }
}
