<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    //
    protected $table = 'expenses';
    protected $fillable = ['timesheet_id','type_of_expenses', 'amount', 'date', 'receipt'];
}
