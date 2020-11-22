<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignsupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignsupervisors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('supervisor_id');
            $table->unsignedBigInteger('placement_id');
            $table->timestamps();
            
            $table->foreign('supervisor_id')->references('id')->on('supervisors')->onDelete('cascade');
            $table->foreign('placement_id')->references('id')->on('placements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignsupervisors');
    }
}
