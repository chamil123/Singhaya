<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('ad_id');
            $table->string('ad_cusName');
            $table->string('ad_address',100)->nullable();
            $table->string('ad_email',45)->nullable();
            $table->string('ad_nic',20)->nullable();
            $table->string('ad_homeNumber',20)->nullable();
            $table->string('ad_mobileNumber',20);
            $table->string('ad_province',20)->nullable();
            $table->string('ad_district',20);
            $table->string('ad_homeTown',20);
            // $table->float('ad_payment',10,0)->nullable()->default(0);
            $table->string('ad_recNumber',20)->nullable();
            $table->string('ad_description',200);
            $table->string('ad_remark',200)->nullable();
            $table->integer('status')->nullable();
            $table->string('ad_title',30);
            $table->string('ad_companyName')->nullable();
            $table->string('published_by',20)->nullable();
            $table->timestamps();
            $table->integer('cat_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->foreign('type_id')->references('id')->on('bannertypes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
