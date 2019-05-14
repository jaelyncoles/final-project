<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('venueimage_id')->default(0);
            //
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->useCurrent();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('city')->default("");
            //$table->string('venuename')->nullable();
            //$table->string('venuedescription')->nullable();
            $table->boolean('venue')->default(false);
            $table->boolean('admin')->default(false);
            $table->timestamp('approved_at')->useCurrent();
            //$table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
