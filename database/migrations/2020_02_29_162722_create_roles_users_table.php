<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('role_id');
            $table->softDeletes();

           // $table->unique(['user_id','role_id']);
         //FOREIGN KEY CONSTRAINTS
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

         //SETTING THE PRIMARY KEYS
           $table->primary(['user_id','role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_users');
    }
}