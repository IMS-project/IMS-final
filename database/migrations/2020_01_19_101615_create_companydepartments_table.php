<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanydepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companydepartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('department_name');
            $table->bigInteger('offer_capacity');
            $table->float('mini_grade');
            $table->string('other_skills');
            $table->unsignedBigInteger('company_id');
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companydepartments');
    }
}
