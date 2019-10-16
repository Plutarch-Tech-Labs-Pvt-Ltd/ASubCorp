<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role-name', 'description'];

    public function roles()
    {
        return $this
            ->belongsToMany('App\Role')
            ->withTimestamps();
    }

    public function saveRole($data)
    {
        $this->name = $data['role-name'];
        $this->description = $data['description'];
        $this->save();
        return 1;
    }

    public function updateRole($data)
    {
        $role = $this->find($data['id']);
        $role->name = $data['role-name'];
        $role->description = $data['description'];
        $role->save();
        return 1;
    }
}


   
   
 
 