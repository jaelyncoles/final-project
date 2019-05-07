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
            $table->unsignedBigInteger('genreid')->default(0);
            $table->unsignedBigInteger('userid')->default(0);
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
