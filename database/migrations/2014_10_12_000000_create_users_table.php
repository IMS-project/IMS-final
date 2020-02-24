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
           $table->bigIncrements('id');
           $table->string('first_name');
           $table->string('last_name')->nullable();
           $table->string('sex')->nullable();
           $table->string('phone')->nullable();
           $table->string('email')->nullable();
           $table->timestamp('email_verified_at')->nullable();
           $table->string('password');
           $table->integer('role')->nullable();
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
