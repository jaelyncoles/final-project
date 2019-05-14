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
            // $table->unsignedBigInteger('venue_id')->default(0);
            //$table->foreign('user_id')->references('id')->on('users');
            $table->integer('genre_id')->default(0);
            //$table->engine = 'InnoDB';
            $table->boolean('pop')->default(0);
            $table->boolean('hiphop')->default(0);
            $table->boolean('reggae')->default(0);
            $table->boolean('live')->default(0);
            $table->boolean('local')->default(0);
            $table->boolean('rock')->default(0);
            $table->boolean('country')->default(0);
            $table->boolean('dubstep')->default(0);
            $table->boolean('techno')->default(0);
            $table->boolean('burlesque')->default(0);
            $table->boolean('revues')->default(0);
            $table->boolean('karaoke')->default(0);
            $table->boolean('rb')->default(0);
            $table->boolean('jazz')->default(0);
            $table->boolean('blues')->default(0);
            $table->boolean('cover')->default(0);
            $table->boolean('funk')->default(0);
            $table->boolean('latin')->default(0);
            $table->boolean('poetry')->default(0);
        });
        Schema::table('userfavs', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('venue_id')->references('id')->on('venues');
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
