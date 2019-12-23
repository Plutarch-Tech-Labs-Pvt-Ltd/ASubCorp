@extends('layouts.app_employeew2')
@section('title','Timesheet Details')
@section('content')
    <div class="container">
        <div class="row" style="padding:10px 10px;">
            <div class="col-sm-4">                
                <label>Vendor : </label>
                @foreach($vendors as $vendor)
                <input type="text" value = " {{$vendor->name}}" disabled/>
                @endforeach
            </div>
           
            <div class="col-sm-4">
                <label>Project : </label>
                @foreach($projects as $project)
                <input type="text" value = " {{$project->project_name}}" disabled/>
                @endforeach
            </div>
           
        </div>   
        @foreach($timesheets as $timesheet)
        <div class="row" style="padding:10px 10px;">
            <div class="col-sm-4">                
                <label>Start Date : </label>
                <input type="text" value = " {{$timesheet->start_date}}" disabled/>
            </div>
            <div class="col-sm-4">
                <label>End Date : </label>
                <input type="text" value = " {{$timesheet->end_date}}" disabled/>
            </div>
        </div>   
        <div class="row" style="padding:10px 10px;">
            <div class="col-sm-4">                
                <label>Total worked hours : </label>
                <input type="text" value = " {{$timesheet->worked_hours}}" disabled/>
            </div>
            <div class="col-sm-4">
                <label>Leave Hours : </label>
                <input type="text" value = " {{$timesheet->leave_hours}}" disabled/>
            </div>
        </div>   
        <div class="row">
            <div class="col-sm-4">                
                <label>Holiday Hours : </label>
                <input type="text" value = " {{$timesheet->holiday_hours}}" disabled/>
            </div>
            <div class="col-sm-4">
                <label>Submitted Date : </label>
                <input type="text" value = " {{$timesheet->created_at}}" disabled/>
            </div>
        </div>   
        <br><br>
        
         <div class="row">
              <div class="col-sm-2">                
                <label>Status : </label>
                
            </div>
            <div class="col-sm-2">                
                <label style="color:blue;">Submitted</label>
               @if($timesheet->status == "submitted")
                <i class="fa fa-check" aria-hidden="true"></i>
               @endif

                
            </div>
            <div class="col-sm-2">
                <label style="color:green;">Approved</label>
                 @if($timesheet->status == "Approved")
                    <i class="fa fa-check" aria-hidden="true"></i>
                @endif
                
            </div>
            <div class="col-sm-2">
                <label style="color:red;">Rejected</labe>
                 @if($timesheet->status == "Rejected")
                    <i class="fa fa-check" aria-hidden="true"></i>
                @endif
            </div>
        </div> 
        
 @endforeach  
    </div>
@endsection