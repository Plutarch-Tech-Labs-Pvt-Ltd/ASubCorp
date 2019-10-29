<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Employee;
use DB;

use App\User;
use App\Role;

class EmployeesController extends Controller
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
    public function create()
    {
        $vendorLists = DB::table('users')
            ->leftJoin('role_user', function ($join) {
                $join->on('users.id', '=', 'role_user.user_id');
            })->where('role_user.role_id', 2)
            ->get();
            
        $projectLists = DB::table('projects')->get();
        
       return view('admin.employees.create')->with('vendorLists', $vendorLists)->with('projectLists', $projectLists);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return redirect('/employees')->with('success', 'New Employee has been created!');
        
        // $fileName = "contract_agreement.pdf";
        // $request->file('contract-agreement')->getClientOriginalExtension();

        // $request->file('contract-agreement')->move(
        //     base_path() . '/public/uploads', $fileName
        // );
        
        
    }
    
    public function role_user() {
        return $this->belongsTo('Role_user');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {                
        $employee = DB::table('users')
        ->leftJoin('employees', function($join) use($id)
        {
            $join->on('users.id', '=', 'employees.user_id')
            ->where('users.id', $id);
        })
        ->get();

        return view('admin.employees.view', compact('employee', 'id'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = User::where('id', $id)
                        ->first();

        return view('admin.employees.edit', compact('employee', 'id'));
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
        $employee = new Employee();
        $data = $this->validate($request, [
            'vendor-name'=>'required',
            'vendor-email'=> 'required'
        ]);
        $data['id'] = $id;
        $ticket->updateTicket($data);

        return redirect('/vendors')->with('success', 'New Employee has been updated!!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = User::find($id);
        $employee->delete();

        return redirect('/employees')->with('success', 'Employee has been deleted!!');
    }

    public function allemployees()
    {
         //$vendors = DB::table('users')->get();
         
         $employees = DB::table('users')
            ->leftJoin('role_user', function ($join) {
                $join->on('users.id', '=', 'role_user.user_id');
            })->where('role_user.role_id', 3)
            ->paginate(10);
        
        return view('admin.employees.employees',compact('employees'));
    }
}
