@extends('layouts.app')
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
            </tr>
        </thead>
        <tbody>
            @foreach($timesheets as $timesheet)
            <tr>
                <td>{{$timesheet->start_date}}</td>
                <td>{{$timesheet->end_date}}</td>
                <td>{{$timesheet->created_at}}</td> 
                <td><input type="text" value = "{{$timesheet->status}}" id = 'status' style="border:none;background-color:#F7F7F7;" disabled/></td>
                <td><a href="{{route('admin.timesheet_details',$timesheet->id)}}" class="btn btn-primary">View</a></td>                
            </tr>
            @endforeach
        </tbody>
    </table>
<div>



@endsection

