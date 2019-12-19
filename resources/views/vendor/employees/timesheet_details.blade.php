@extends('layouts.app_vendor')
@section('title','Timesheet Details')
@section('content')
    <div class="container">
        <div class="row" style="padding:10px 10px;">
            <div class="col-sm-4">                
                <label>Employee : </label>
                @foreach($employees as $employee)
                <input type="text" value = " {{$employee->name}}" disabled/>
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
               @if($timesheet->status == "Submitted")
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
<br><br>
@if($invoice)

    <p>{{$invoice->id}}</p>
    <a href="{{asset('public/uploads/timesheet')}}/{{$invoice->invoice}}" download><button class="btn btn-success">Download Invoice</button></a>    
@endif
        <br><br>
    <div class="row">       
        <div class="col-sm-6">
           <a href="{{url('/upload/invoice',$timesheet->id)}}" class="btn btn-info" accept=".doc,.docx,.pdf,.xlsx">Upload Invoice</a>
        </div>
    </div>
        @endforeach  
    </div>

    <script language="javascript">

$(document).ready(function(){
    var input = document.getElementById('status').value;    
  
    if(input == 'submitted')
    {
        document.getElementById("approve").disabled = false;
        document.getElementById("reject").disabled = false;
    }else if(input == 'Approved'){
        document.getElementById("approve").disabled = true;
        document.getElementById("reject").disabled = true;
    }else if(input == 'Rejected'){
        document.getElementById("approve").disabled = true;
        document.getElementById("reject").disabled = true;
    }

    });

    

</script>
        
@endsection