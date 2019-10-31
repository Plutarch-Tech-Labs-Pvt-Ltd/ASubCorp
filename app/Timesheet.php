<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\User;
use App\Role;


class Timesheet extends Model
{
    protected $table = 'timesheets1';
    protected $fillable = ['project_id','from_date', 'to_date', 'worked_hours', 'leave_hours', 'holiday_hours'];
   
    public function employees()
        {
            return $this->belongsToMany('App\Admin\Employee')
            ->withTimestamps();
        }
}
