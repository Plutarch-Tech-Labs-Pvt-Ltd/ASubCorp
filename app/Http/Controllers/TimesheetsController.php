<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Role;
use App\Timesheet;
use App\Vendor;
use App\Admin\Employee;

class TimesheetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $users = DB::table('users')->get();
        $vendors = DB::table('vendor')->get();       
                     
           
         $projects = DB::table('projects')
        ->join('employees_projects', 'projects.id', '=', 'employees_projects.project_id')
        ->join('employees', 'employees_projects.employees_id', '=', 'employees.user_id')  
        ->where('employees_projects.employees_id', '=', $id)  
        ->get();
            
       
        return view('employee.timesheets')->with('users', $users)->with('vendors', $vendors)->with('projects', $projects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timesheet = new Timesheet();
        
        
        $data = $this->validate($request, [
            'user_id'=>'required',
            'vendor_id'=> 'required',
            'project_id'=> 'required',
            'from_date'=> 'required',
            'to_date'=> 'required',
            'worked_hours_15'=> 'required',
            'leave_hours'=> 'required',
            'leave_description'=> 'required'
            ]);
        
        
        $timesheet->saveTimesheet($data);
        return redirect('/employees')->with('success', 'New Employee has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
