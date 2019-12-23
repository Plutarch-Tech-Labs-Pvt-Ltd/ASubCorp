@extends('layouts.app_employeew2')
@section('title','All Timesheets')
@section('content')
<div class="container">
    <h2>Timesheets List :</h2>
    <table class="table table-striped">
        <thead>
            <tr>
              <td>From Date</td>
              <td>To Date</td>
              <td>Submitted Date</td>
              <td>Status</td>
              <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($timesheets as $timesheet)
            <tr>
                <td>{{$timesheet->start_date}}</td>
                <td>{{$timesheet->end_date}}</td>
                <td>{{$timesheet->created_at}}</td> 
                <td>{{$timesheet->status}}  <i class="fa fa-check" aria-hidden="true"></i></td>
                <td><a href="{{route('w2_timesheet_details',$timesheet->id)}}" class="btn btn-primary">View</a></td> 
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection