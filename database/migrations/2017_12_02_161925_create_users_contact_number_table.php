<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersContactNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_contact', function(Blueprint $table){
            $table->increments('contact_id');
            $table->string('area_code');
            $table->string('country');
            $table->string('number')->unique();
            $table->integer('contact_role_id')->unsigned();
            $table->foreign('contact_role_id')->references('contact_role_id')->on('lk_contact_role');
            $table->string('user_id', 50);
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_contact');
    }
}
