<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTimesheets1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheets1', function (Blueprint $table) {
            $table->increments('id')->unsigned();   
            $table->integer('employees_id')->unsigned();
            $table->foreign('employees_id')->references('user_id')->on('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects')->onUpdate('cascade')->onDelete('cascade');                 
            $table->date("start_date");
            $table->date("end_date");
            $table->integer('worked_hours');
            $table->integer('leave_hours');
            $table->integer('holiday_hours');
            $table->string('status');
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
        Schema::dropIfExists('table_timesheets1');
    }
}
