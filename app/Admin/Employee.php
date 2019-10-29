<?php

namespace App\Admin;

use DB;
use App\User;
use App\Role;
use App\Admin\Project;
use App\Admin\Vendor;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employee";
        protected $fillable = [ 'user_id', 'phone', 'employee_type', 'contract_agreement', 'regular_hour', 'rate_per_hour','net_payment_terms' ];


        public function vendors()
        {
            return $this
                ->belongsToMany('App\Admin\Vendor')
                ->withTimestamps();
        }

        public function projects()
        {
            return $this->belongsToMany('App\Admin\Project')
            ->withTimestamps();
        }

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
                    'phone'  =>$data['employee-phone'],
                    'employee_type'      => $data['employee-type'],                                        
                    'contract_agreement'      => $data['contract-agreement'],
                    'regular_hour'      => $data['employee-regular-hour'],
                    'rate_per_hour'      => $data['employee-rate-per-hour'],                    
                    'net_payment_terms'      => $data['vendor-net-payment']
                ));

                $employeedata = DB::table('employees_projects')->insert(array(    
                    'employees_id'      => $userID,                  
                    'project_id'      => $data['project-id']
                    
                ));

                $employeedata = DB::table('employees_vendors')->insert(array(    
                    'employees_id'      => $userID,                   
                     'vendor_id'      => $data['vendor-id'],                   
                ));
                
                return 1;
        }
    
}
