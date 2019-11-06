@extends('layouts.app_vendor')
@section('title','Timesheets')
@section('content')
<div class="container">
    <h4>Timesheets List :</h4>
    <table class="table table-striped">
        <thead>
            <tr>
              <td>From Date</td>
              <td>To Date</td>
              <td>Submitted Date</td>
              <td>Status</td>
              <td>Actions</td>
              <td></td>
              <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($timesheets as $timesheet)
            <tr>
                <td>{{$timesheet->start_date}}</td>
                <td>{{$timesheet->end_date}}</td>
                <td>{{$timesheet->created_at}}</td> 
                <td><input type="text" value = "{{$timesheet->status}}" id = 'status' style="border:none;background-color:#F7F7F7;" disabled/></td>
                <td><a href="{{route('vendor.timesheet_details',$timesheet->id)}}" class="btn btn-primary">View</a></td>

                <td> <form action="{{url('/vendor/timesheet/approve',$timesheet->id,$timesheet->employees_id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="POST">
                    <button class="btn btn-primary" id = 'approve' type="submit">Approve</button>
                    </form></td>

                
                    <td><input type="button" href="" class="btn btn-primary"id = 'reject' value = 'Reject'/></td>
                          
                
            </tr>
            @endforeach
        </tbody>
    </table>
<div>

<script language="javascript">

$(document).ready(function(){
    var input = document.getElementById('status').value;    
  
    if(input == 'submitted')
    {
        document.getElementById("approve").disabled = false;
        document.getElementById("reject").disabled = false;
    }else{
        document.getElementById("approve").disabled = true;
        document.getElementById("reject").disabled = true;
    }

    });

</script>

@endsection

<script language="javascript">

$(document).ready(function(){
    console.log("input");
    

 });

</script>