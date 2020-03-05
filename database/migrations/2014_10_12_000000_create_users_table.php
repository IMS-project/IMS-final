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
           $table->string('name');
           //$table->string('last_name')->nullable();
           $table->string('address')->nullable();
           $table->string('sex')->nullable();
           $table->string('phone')->nullable();
           $table->string('email',191)->unique();
           $table->timestamp('email_verified_at')->nullable();
           $table->string('password');
           $table->unsignedBigInteger('role')->index()->default(6);
           $table->rememberToken();
           $table->softDeletes();
           $table->timestamps();

           $table->foreign('role')->references('id')->on('roles')->onDelete('cascade');
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
