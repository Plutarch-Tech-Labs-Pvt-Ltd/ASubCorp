<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
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
                
            return view('home')->with('vendorCounter', $vendorCounts)->with('employeeCounter', $employeeCount)->with('projectCounter', $projectCount);
        }
    }
    