<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->increments('edu_id');
            $table->integer('medium');
            $table->integer('class_type')->nullble();
            $table->integer('locations');
            $table->integer('exams');
            $table->integer('subjects');
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
        Schema::dropIfExists('educations');
    }
}
