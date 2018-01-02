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
            $table->increments('user_id');
            $table->string('account');
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->tinyInteger('verify'); //審核確認
            $table->tinyInteger('level'); //身分等級
            $table->tinyInteger('withdrawal'); //退件紀錄
            $table->string('rememberToken', 100)->nullable();
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
