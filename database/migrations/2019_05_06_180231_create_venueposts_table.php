<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuepostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venueposts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            //$table->unsignedBigInteger('venue_id')->default(0);
            //$table->foreign('venueimage_id')->references('id')->on('venueimages');
            $table->unsignedBigInteger('user_id')->default(0);
            //$table->foreign('user_id')->references('id')->on('users');
            $table->string('description');
            $table->string('title');
            $table->binary('image');
            //$table->engine = 'InnoDB';
        });

        Schema::table('venueposts', function ($table) {
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
        Schema::dropIfExists('venueposts');
    }
}
