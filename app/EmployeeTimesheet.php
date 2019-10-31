<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeTimesheet extends Model
{
    protected $table = 'employee_timesheet';
    protected $fillable = ['employees_id','project_id'];
}
