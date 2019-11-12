@extends('layouts.app')
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
        <input type="hidden" value = "{{$timesheet->status}}" id = 'status' style="border:none;background-color:#F7F7F7;" disabled/>
        <div class="col-sm-1">
                <form action="{{route('approve',$timesheet->id)}}" method="post">
                    {{csrf_field()}}                    
                    <input name="_method" type="hidden" value="POST">
                    <button class="btn btn-primary" id = 'approve' type="submit">Approve</button>
                </form>
            </div>
            <div class="col-sm-1">
                <form action="{{route('reject',$timesheet->id)}}" method="post">
                    {{csrf_field()}}                    
                    <input name="_method" type="hidden" value="POST">
                    <button class="btn btn-primary" id = 'reject' type="submit">Reject</button>
                </form>
            </div>
        </div>

        <br><br>
    <div class="row">       
        <div class="col-sm-6">
        @foreach($invoices as $invoice)
        <p>{{$invoice->invoice}}</p>
            <a href="{{route('admin.download',$timesheet->id)}}" class="btn btn-primary">Download</a> 
        @endforeach
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