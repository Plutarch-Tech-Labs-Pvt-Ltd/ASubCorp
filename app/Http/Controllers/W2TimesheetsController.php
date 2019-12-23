<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Role;
use App\Timesheet;
use App\Expenses;
use App\Vendor;
use APP\EmployeeTimesheet;
use App\Admin\Employee;

class W2TimesheetsController extends Controller
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
        //
        
         $users = DB::table('users')->get();
         
        $projects = DB::table('projects')
        ->join('employees_projects', 'projects.id', '=', 'employees_projects.project_id')
        ->join('employees', 'employees_projects.employees_id', '=', 'employees.user_id')  
        ->select('projects.id','projects.project_name')
        ->where('employees_projects.employees_id', '=', $id)  
        ->get();

        $vendors = DB::table('vendor')
        ->join('employees_vendors', 'vendor.user_id', '=', 'employees_vendors.vendor_id')
        ->join('employees', 'employees_vendors.employees_id', '=', 'employees.user_id')
        ->select('employees.vendor_id')  
        ->where('employees_vendors.employees_id', '=', $id)  
        ->get();       

 
        return view('employeew2.timesheets')->with('users', $users)->with('vendors', $vendors)->with('projects', $projects);
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
        
        $timesheet = new Timesheet();
        $timesheet->employees_id = $id;
        $timesheet->vendor_id = request('vendor-id');
        $timesheet->project_id = request('project-id');  
        $timesheet->start_date = request('from-date'); 
        $timesheet->end_date = request('to-date'); 
        $timesheet->worked_hours = request('worked-hours'); 
        $timesheet->leave_hours = request('leave-hours'); 
        $timesheet->holiday_hours = request('holiday-hours'); 
        $timesheet->status = 'submitted';      
        $timesheet->save();  
        
        $timesheet_id = $timesheet->id;
        $project_id = $timesheet->project_id;
        $vendor_id = $timesheet->vendor_id;

        DB::table('timesheet_project')->insert(
            ['timesheet_id' => $timesheet_id, 'project_id' => $project_id]
        );

        DB::table('employee_timesheet')->insert(    
            ['timesheet_id' => $timesheet_id,                   
             'employees_id' => $id]                   
        );

        DB::table('vendor_timesheets')->insert(    
            ['vendor_id' => $vendor_id, 'timesheet_id' => $timesheet_id]                   
        );
        
        $imageName = '';
        if ($request->hasFile('receipt')) {
                $file_path = asset('public/uploads/expenses').'/'.$request->receipt;
                // dd($file_path);
                $imageName = time().'.'.$request->receipt->getClientOriginalExtension();
                $request->receipt->move(public_path('uploads/expenses'), $imageName);
        }
        
        $expenses = new Expenses();
        $expenses->timesheet_id = $timesheet_id;
        $expenses->type_of_expenses = request('type_of_expenses');
        $expenses->amount = request('amount');
        $expenses->date = request('date');
        $expenses->receipt = $imageName;
        $expenses->save();

        
        return redirect("/w2/alltimesheets/$id")->with('success', 'Timesheet created!!');
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
    
     public function alltimesheets($id)
    {
         //$vendors = DB::table('users')->get();
         
         //$timesheets = DB::table('timesheets1')->get();  
         $timesheets = DB::table('timesheets1')       
        ->where('employees_id', '=', $id)  
        ->get();
               
        return view('employeew2.all_timesheets',compact('timesheets'));
    }
    
    public function viewtimesheet($id)
    {
        $timesheets = DB::table('timesheets1')       
        ->where('id', '=', $id)  
        ->get();

       
        $projects = DB::table('projects')
        ->join('timesheet_project', 'projects.id', '=', 'timesheet_project.project_id')
        ->join('timesheets1', 'timesheet_project.timesheet_id', '=','timesheets1.id' )  
        ->where('timesheet_project.timesheet_id', '=', $id)  
        ->get();

      
        $vendors = DB::table('users')
        ->join('vendor_timesheets', 'users.id', '=', 'vendor_timesheets.vendor_id')
        ->where('vendor_timesheets.timesheet_id', '=', $id)
        ->get(); 
        
        $expenses = DB::table('expenses')
        ->where('timesheet_id', '=', $id)
        ->get();
               
        return view('employeew2.timesheet_details')->with('timesheets', $timesheets)->with('projects', $projects)->with('vendors', $vendors)->with('expenses',$expenses);
    }
}
