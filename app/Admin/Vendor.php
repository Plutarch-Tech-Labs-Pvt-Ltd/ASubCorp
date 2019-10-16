<?php

namespace App\Admin;
use DB;
use App\User;
use App\Role;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = "vendor";

    protected $fillable = [
        'user_id', 'company_name', 'company_url', 'phone',
    ];

    public function employee()
    {
        return $this
            ->hasMany('App\Admin\Employee', 'id')
            ->withTimestamps();
    }


    public function saveVendor($data)
    {
            // create user
            $userData = [
                'name' => $data['vendor-name'],
                'email' => $data['vendor-email'],
                'password' => bcrypt($data['vendor-password']),
            ];
            
            $newUser = User::create($userData);
            $userdata = json_decode($newUser);
           
            $userID = $userdata->id;
            
            $userrole = DB::table('role_user')->insert(array(
                'user_id'      => $userID,
                'role_id'      => 2
            ));
            
            
           $vendordata = DB::table('vendor')->insert(array(
                'user_id'      => $userID,
                'company_name'  =>$data['vendor-company-name'],
                'company_url'  =>$data['vendor-company-url'],
                'phone'      => $data['vendor-phone']
            ));
            
            return 1;
    }
    
    public function updateVendor($data)
    {
        $vendor = $this->find($data['id']);
        $vendor->name = $data['vendor-name'];
        $vendor->email = $data['vendor-email'];
        $vendor->password = bcrypt($data['vendor-password']);
        $vendor->save();
        return 1;
    }
}
