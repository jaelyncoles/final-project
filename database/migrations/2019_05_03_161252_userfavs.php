<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Userfavs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userfavs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->default(0);
            $table->unsignedBigInteger('venue_id')->default(0);
            //$table->foreign('user_id')->references('id')->on('users');
            $table->integer('genre_id')->default(0);
            //$table->engine = 'InnoDB';
        });
        Schema::table('userfavs', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('venue_id')->references('id')->on('venues');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
