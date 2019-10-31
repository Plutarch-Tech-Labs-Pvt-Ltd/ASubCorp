<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeVendorTimesheet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_vendor_timesheet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employees_id')->unsigned();
            $table->foreign('employees_id')->references('user_id')->on('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('vendor_id')->unsigned();
            $table->foreign('vendor_id')->references('id')->on('users')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('timesheet_id')->unsigned();
            $table->foreign('timesheet_id')->references('id')->on('timesheets1')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('employee_vendor_timesheet');
    }
}
