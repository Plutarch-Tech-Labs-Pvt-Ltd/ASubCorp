<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Admin\Project;
use App\Admin\Employee;
use App\Admin\Vendor;
use DB;

class Project extends Model
{
    protected $table = "projects";

    protected $fillable = ['project-name', 'project-client', 'project-startdate'];

    public function employees()
        {
            return $this->belongsToMany('App\Admin\Employee')
            ->withTimestamps();
        }

        public function vendors()
        {
            return $this
                ->belongsToMany('App\Admin\Vendor')
                ->withTimestamps();
        }
    
    public function saveProject($data)
    {
        
            $ProjectData = DB::table('projects')->insert(array(
                'project_name' => $data['project-name'],
                'client_name'  => $data['project-client'],
                'start_date'  => $data['project-startdate'],
                'created_at'  => now(),
                'updated_at'  => now()
            ));
            
            return 1;
    }
}
