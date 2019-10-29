<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Role;
use App\Admin\Employee;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:employee');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $vendorLists = DB::table('users')
            ->leftJoin('role_user', function ($join) {
                $join->on('users.id', '=', 'role_user.user_id');
            })->where('role_user.role_id', 2)
            ->get();
            
        $vendorCounts = count($vendorLists);
        
        $employeeLists = DB::table('users')
            ->leftJoin('role_user', function ($join) {
                $join->on('users.id', '=', 'role_user.user_id');
            })->where('role_user.role_id', 3)
            ->get();
            
        $employeeCount = count($employeeLists);
        
        $projectLists = DB::table('projects')->get();
        $projectCount = count($projectLists);

       $employeetype = DB::table('employees')
       ->leftJoin('users', function($join){
           $join->on('users.id', '=', 'employees.user_id');
       })->where('employee_type', ' W2')
       ->get();

       if(Auth::user()->employee_type = $employeetype){

       return view('employee.dashboard')->with('vendorCounter', $vendorCounts)->with('employeeCounter', $employeeCount)->with('projectCounter', $projectCount);
    }else{
        return view('home')->with('vendorCounter', $vendorCounts)->with('employeeCounter', $employeeCount)->with('projectCounter', $projectCount);
    }
      /*  if ($employeetype->employee_type = "w2") {
        return view('home')->with('vendorCounter', $vendorCounts)->with('employeeCounter', $employeeCount)->with('projectCounter', $projectCount);
       }
       elseif(Auth::user()->employee_type = "C2C"){
        return view('home')->with('vendorCounter', $vendorCounts)->with('employeeCounter', $employeeCount)->with('projectCounter', $projectCount);
       } */
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
    public function store(Request $request)
    {
        //
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
