<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\User;
use App\Invoice;
use App\Admin\Employee;
use File;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $employees = DB::table('users')
        ->leftJoin('employees', function ($join) {
            $join->on('users.id', '=', 'employees.user_id');
        })->where('employees.vendor_id', $id)
        ->paginate(10);
    
    return view('vendor.employees.all_employees',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendorLists = DB::table('users')
        ->leftJoin('role_user', function ($join) {
            $join->on('users.id', '=', 'role_user.user_id');
        })->where('role_user.role_id', 2)
        ->get();
        
    $projectLists = DB::table('projects')->get();
    
   return view('vendor.employees.create_employee')->with('vendorLists', $vendorLists)->with('projectLists', $projectLists);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $employee = new Employee();
        
        
        $data = $this->validate($request, [
            'employee-name'=>'required',
            'employee-email'=> 'required',
            'employee-password'=> 'required',
            'employee-phone'=> 'required',
            'employee-type'=> 'required',
            'vendor-id'=> 'required',
            'project-id'=> 'required',
            'contract-agreement'=> 'required',
            'employee-rate-per-hour'=> 'required',
            'employee-regular-hour'=> 'required',
            'vendor-net-payment'=> 'required'
        ]);
        
        
        $employee->saveEmployee($data);
        return redirect("/vendor/employees/$id")->with('success', 'New Employee has been created!');
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
         $user = User::find($id);
    if ($user != null) {
        $user->delete();
        
        $employees = DB::table('users')
        ->leftJoin('employees', function ($join) {
            $join->on('users.id', '=', 'employees.user_id');
        })->where('employees.vendor_id', $id)
        ->paginate(10);
        
        return view('vendor.employees.all_employees',compact('employees'));
    }

    }

    public function alltimesheets($id)
    {
        $timesheets = DB::table('timesheets1')->where('employees_id','=',$id)->get();

        return view('vendor.employees.all_timesheets',compact('timesheets'));
    }

   
    public function timesheetdetails($id)
    {
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
                
            $invoice = DB::table('invoice')       
            ->where('timesheet_id', '=', $id)  
            ->first();
            
            $expenses = DB::table('expenses')
            ->where('timesheet_id', '=', $id)
            ->get();
                   
            return view('vendor.employees.timesheet_details')->with('employees', $employees)->with('timesheets', $timesheets)->with('projects', $projects)->with('invoice',$invoice)->with('expenses',$expenses);
        }

    
    
    public function invoice(Request $request,$id)
    {
        
        $imageName = '';
        if ($request->hasFile('invoice')) {
                $file_path = asset('public/uploads/timesheet').'/'.$request->invoice;
                // dd($file_path);
                $imageName = time().'.'.$request->invoice->getClientOriginalExtension();
                $request->invoice->move(public_path('uploads/timesheet'), $imageName);
        }
        // exit();
        $invoice = new Invoice();
        $invoice->timesheet_id = $id;
        $invoice->title = request('title');
        $invoice->invoice = $imageName;
        $invoice->save();  


        $timesheets = DB::table('timesheets1')       
        ->where('id', '=', $id)  
        ->get();
        
        $invoice = DB::table('invoice')       
        ->where('timesheet_id', '=', $id)  
        ->first();
       
        $projects = DB::table('projects')
        ->join('timesheet_project', 'projects.id', '=', 'timesheet_project.project_id')
        ->join('timesheets1', 'timesheet_project.timesheet_id', '=','timesheets1.id' )  
        ->where('timesheet_project.timesheet_id', '=', $id)  
        ->get();

        $employees = DB::table('users')
            ->join('employee_timesheet', 'users.id', '=', 'employee_timesheet.employees_id')
            ->where('employee_timesheet.timesheet_id', '=', $id)
            ->get(); 
            
        $expenses = DB::table('expenses')
            ->where('timesheet_id', '=', $id)
            ->get();
      
               
        return view('vendor.employees.timesheet_details')->with('employees', $employees)->with('timesheets', $timesheets)->with('projects', $projects)->with('invoice', $invoice)->with('expenses',$expenses);

    }
 
    
}

