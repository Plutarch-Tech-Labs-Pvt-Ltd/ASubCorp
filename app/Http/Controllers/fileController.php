<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\file;

class fileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $timesheets = DB::table('timesheets1')
        ->where('timesheets1.id','=',$id)->get();
        
        return view('vendor.employees.upload_invoice',compact('timesheets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
                $file = new file();
                $file->timesheet_id = $id;
                $file->title = request('title');
                $file->path = request('invoice');
                $file->save();  

        if($request->has('invoice')){
            $file -> update(['invoice' => $request->file('invoice')->store('invoices','public')]);               
        }
                
        
        $timesheets = DB::table('timesheets1')       
            ->where('id', '=', $id)  
            ->get();
    
           
            $projects = DB::table('projects')
            ->join('timesheet_project', 'projects.id', '=', 'timesheet_project.project_id')
            ->join('timesheets1', 'timesheet_project.timesheet_id', '=','timesheets1.id' )  
            ->where('timesheet_project.timesheet_id', '=', $id)  
            ->get();
    
            $employees = DB::table('users')
                ->join('employee_timesheet', 'users.id', '=', 'employee_timesheet.employees_id')
                ->where('employee_timesheet.timesheet_id', '=', $id)
                ->get(); 
          
                   
            return view('vendor.employees.timesheet_details')->with('employees', $employees)->with('timesheets', $timesheets)->with('projects', $projects);
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
