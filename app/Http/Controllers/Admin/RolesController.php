<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;

class RolesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
   */
   
   public function create()
   {
      return view('admin.roles.create');
   }
   
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $role = new Role();
       $data = $this->validate($request, [
           'description'=>'required',
           'role-name'=> 'required'
       ]);
      
       $role->saveRole($data);
       return redirect('/roles')->with('success', 'New role has been created!!');
   }
   
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $roles = Role::get();
       
       return view('admin.roles.home',compact('roles'));
   }
   
   
   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       
       $role = Role::where('id', $id)
                       ->first();

       return view('admin.roles.edit', compact('role', 'id'));
   }
   
   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    
   public function update(Request $request, $id)
   {
       $role = new Role();
       $data = $this->validate($request, [
           'role-name'=> 'required',
           'description'=>'required'
       ]);
       $data['id'] = $id;

       $role->updateRole($data);
       return redirect('/roles')->with('success', 'New role has been updated!!');
   }
   
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $role = Role::find($id);
       $role->delete();

       return redirect('/roles')->with('success', 'Role has been deleted!!');
   }
   
}
