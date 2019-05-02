<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usergenre', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('userid')->unsigned(); 
            $table->foreign('userid')->references('id')->on('users'); 
            $table->integer('genreid')->unsigned(); 
            $table->foreign('genreid')->references('id')->on('genre'); 
            
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
