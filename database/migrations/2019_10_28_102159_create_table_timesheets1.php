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
            $table->date("from_date");
            $table->date("to_date");
            $table->integer('worked_hours_15');
            $table->integer('leave_hours');
            $table->integer('holiday_hours');
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
