<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id', 255);
            $table->string('name', 255);
            /* $table->string('cargo', 20)-> nullable();;  */
            $table->string('email', 30)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 100);
            $table->rememberToken();
            $table->timestamps();
            //$table->engine = 'InnoDB'; // !! Aquii  
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