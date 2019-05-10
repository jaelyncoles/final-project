<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->binary('mainimg');
            $table->string('venuename');
            $table->string('description');
            $table->unsignedBigInteger('user_id')->default(0);
            
            $table->timestamps();
        });
        Schema::table('venues', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('venue_id')->references('id')->on('venues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
}
