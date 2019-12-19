<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\Vendor;
use DB;
use App\User;
use App\Role;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = DB::table('users')
        ->leftJoin('role_user', function ($join) {
            $join->on('users.id', '=', 'role_user.user_id');
        })->where('role_user.role_id', 2)
        ->paginate(10);
    
    return view('admin.vendor.vendors',compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendor = new Vendor();
        $data = $this->validate($request, [
            'vendor-name'=>'required',
            'vendor-email'=> 'required',
            'vendor-password'=> 'required',
            'vendor-company-name'=> 'required',
            'vendor-company-url'=> 'required',
            'vendor-phone'=> 'required'
        ]);
       
        $vendor->saveVendor($data);
        return redirect('/all/vendors')->with('success', 'New Vendor has been created!');
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
        $vendor = DB::table('users')
        ->leftJoin('vendor', function($join) use($id)
        {
            $join->on('users.id', '=', 'vendor.user_id')
            ->where('users.id', $id);
        })
        ->get();

        return view('admin.vendor.view', compact('vendor', 'id'));

    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {
        $vendor = User::where('id', $id)
                        ->first();

        return view('admin.vendor.edit', compact('vendor', 'id'));
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
        $vendor = User::find($id);
        $vendor->name = $request->get('vendor-name');
        $vendor->email = $request->get('vendor-email');  
        $vendor->password = $request->get('vendor-password');
        $vendor->save();
        
        return redirect('/all/vendors')->with('success', 'New vendor has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor = User::find($id);
        $vendor->delete();
        

        return redirect('/all/vendors')->with('success', 'Vendor has been deleted!!');
    }
}
