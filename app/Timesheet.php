<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\User;
use App\Role;


class Timesheet extends Model
{
    protected $fillable = ['user_id', 'vendor_id', 'project_id', 'from_date', 'to_date', 'worked_hours_15', 'leave_hours', 'leave_description'];
    protected $table = "timesheets1";


    public function saveEmployee($data)
    {
            // create user
            $userData = [
                'name' => $data['employee-name'],
                'email' => $data['employee-email'],
                'password' => bcrypt($data['employee-password']),
            ];
            
            $newUser = User::create($userData);
            $userdata = json_decode($newUser);
           
            $userID = $userdata->id;
            
            $userrole = DB::table('role_user')->insert(array(
                'user_id'      => $userID,
                'role_id'      => 3
            ));
            
            $employeedata = DB::table('employees')->insert(array(
                'user_id'      => $userID,
                'vendor_id'      => $data['vendor-id'],
                'phone'  =>$data['employee-phone'],
                'employee_type'      => $data['employee-type'],
                'project_id'      => $data['project-id'],                    
                'contract_agreement'      => $data['contract-agreement'],
                'regular_hour'      => $data['employee-regular-hour'],
                'rate_per_hour'      => $data['employee-rate-per-hour'],                    
                'net_payment_terms'      => $data['vendor-net-payment']
            ));
            
            return 1;
    }
}
