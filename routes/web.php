<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


 /*
    |--------------------------------------------------------------------------
    | Admin Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/admin', 'AdminController@index');

     /****************** ROLES ROUTE *****************/

     Route::post('/admin/reject/timesheetdetails/{id}','Admin\EmployeesController@reject')->name('reject');
 
     Route::get('/roles', 'Admin\RolesController@index');

     Route::get('/create/role','Admin\RolesController@create');

     Route::post('/create/role','Admin\RolesController@store');

     Route::get('/edit/role/{id}','Admin\RolesController@edit')->name('admin.roles.edit');

     Route::post('/edit/role/{id}','Admin\RolesController@update')->name('admin.roles.update');
    
    Route::delete('/delete/role/{id}','Admin\RolesController@destroy')->name('admin.roles.destroy');


    /****************** VENDOR ROUTE *****************/

    Route::get('/all/vendors', 'Admin\VendorsController@index');

    Route::get('/view/vendor/{id}','Admin\VendorsController@view')->name('admin.vendor.view');

    Route::get('/edit/vendor/{id}','Admin\VendorsController@edit')->name('admin.vendor.edit');

    Route::post('/edit/vendor/{id}','Admin\VendorsController@update')->name('admin.vendor.update');

    Route::get('/create/vendor','Admin\VendorsController@create');

    Route::post('/create/vendor','Admin\VendorsController@store');

    Route::delete('/delete/vendor/{id}','Admin\VendorsController@destroy')->name('admin.vendor.delete');
    
   


    /****************** PROJECTS ROUTE *****************/

    Route::get('/create/project','Admin\ProjectController@create');
    
    Route::post('/create/project','Admin\ProjectController@store');
    
    Route::get('/projects', 'Admin\ProjectController@allProjects');
    
    Route::get('/edit/project/{id}','Admin\ProjectController@edit')->name('admin.project.edit');
    
    Route::post('/edit/project/{id}','Admin\ProjectController@update')->name('admin.project.update');
    
    Route::delete('/delete/project/{id}','Admin\ProjectController@destroy')->name('admin.project.delete');


    /****************** EMPLOYEES ROUTE *****************/

    Route::get('/employees', 'Admin\EmployeesController@allemployees');

    Route::get('/create/employee','Admin\EmployeesController@create');
    
    Route::post('/create/employee','Admin\EmployeesController@store');

    Route::get('/admin/view/employee/{id}','Admin\EmployeesController@view')->name('admin.employees.view');    

    Route::post('/admin/edit/employee/{id}','Admin\EmployeesController@update')->name('admin.employees.update');
    
    Route::delete('/admin/delete/employee/{id}','Admin\EmployeesController@destroy')->name('admin.employees.destroy');

    Route::get('/admin/edit/employee/{id}','Admin\EmployeesController@edit')->name('admin.employees.edit');

    Route::get('/admin/timesheetview/employee/{id}','Admin\EmployeesController@alltimesheets')->name('admin.employees.timesheetview');

    Route::get('/admin/timesheetdetails/{id}', 'Admin\EmployeesController@timesheetdetails')->name('admin.timesheet_details');

    Route::get('/admin/download/{id}', 'Admin\EmployeesController@download')->name('admin.download');
    

      Route::post('/admin/timesheetdetails/{id}','Admin\EmployeesController@approve')->name('approve');
    


    /*
    |--------------------------------------------------------------------------
    | Vendor Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/vendor', 'VendorController@index')->name('vendor.dashboard');


    /****************** EMPLOYEES ROUTE *****************/

   

    Route::get('/vendor/employees/{id}', 'Vendor\EmployeesController@index')->name('vendor.employees');

    Route::get('/vendor/alltimesheets/{id}', 'Vendor\EmployeesController@alltimesheets')->name('vendor.employees.alltimesheets');

    Route::get('/vendor/timesheetdetails/{id}', 'Vendor\EmployeesController@timesheetdetails')->name('vendor.timesheet_details');

    Route::any('/vendor/invoice/timesheetdetails/{id}','Vendor\EmployeesController@invoice')->name('invoice');

    Route::get('/vendor/create/employees','Vendor\EmployeesController@create');

    Route::post('/vendor/create/employees/{id}','Vendor\EmployeesController@store');
    
    Route::delete('/vendor/delete/employee/{id}','Vendor\EmployeesController@destroy')->name('vendor.employees.destroy');

  
   
    
     Route::any('/upload/invoice/{id}','Vendor\EmployeesController@upload')->name('vendor.invoice');
     
     //Route::any('/vendor/timesheet/{id}','fileController@store')->name('vendor.invoice.store');
   

   

    /*
    |--------------------------------------------------------------------------
    | Employee Dashboard - C2C
    |--------------------------------------------------------------------------
    */

    Route::get('/employee', 'EmployeeController@index')->name('employee.dashboard');

     /****************** TIMESHEET ROUTE *****************/

    Route::get('/timesheets', 'TimesheetsController@index');

    Route::get('/create/timesheet/{id}','TimesheetsController@create')->name('create_timesheet');

    Route::post('/create/timesheet/{id}','TimesheetsController@store');

    Route::get('/alltimesheets/{id}', 'TimesheetsController@alltimesheets');

    Route::get('/timesheets/details/{id}', 'TimesheetsController@viewtimesheet')->name('timesheet_details');
    
    
     /*
    |--------------------------------------------------------------------------
    | Employee Dashboard - w2
    |--------------------------------------------------------------------------
    */
    
       Route::get('/w2/employee', 'EmployeeW2Controller@index')->name('employeew2.dashboard');
       
     /****************** TIMESHEET ROUTE *****************/
     
     Route::get('/timesheets', 'W2TimesheetsController@index');
     
     Route::get('/w2/alltimesheets/{id}', 'W2TimesheetsController@alltimesheets');
     
     Route::get('/w2/create/timesheet/{id}','W2TimesheetsController@create')->name('w2_create_timesheet');
     
     Route::post('/w2/create/timesheet/{id}','W2TimesheetsController@store');
     
     Route::get('/w2/timesheets/details/{id}', 'W2TimesheetsController@viewtimesheet')->name('w2_timesheet_details');

