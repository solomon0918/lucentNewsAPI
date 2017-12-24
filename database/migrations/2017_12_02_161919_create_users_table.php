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
            $table->string('user_id', 50)->primary();
            $table->integer('user_title_id')->unsigned();
            $table->foreign('user_title_id')->references('user_title_id')->on('lk_user_title');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('bdate');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('user_role_id')->unsigned();
            $table->foreign('user_role_id')->references('role_id')->on('lk_user_role');
            $table->integer('is_active')->default('1');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
