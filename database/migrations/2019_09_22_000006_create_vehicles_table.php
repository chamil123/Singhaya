<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_type');
            $table->string('color')->nullable();
            $table->string('engine_capacity')->nullable();
            $table->string('body_type')->nullable();
            $table->string('model');
            $table->string('model_year');
            $table->string('transmsion')->nullable();
            $table->string('milage');
            $table->string('condition')->nullable();
            $table->bigInteger('ad_id')->unsigned();
            $table->foreign('ad_id')->references('ad_id')->on('ads');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
