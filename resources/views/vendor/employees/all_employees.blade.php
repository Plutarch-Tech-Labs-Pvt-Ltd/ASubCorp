@extends('layouts.app_vendor')
@section('title','All Employees')


@section('content')
<div class="container">
    <h4>Employee List :</h4>
    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td><a href="{{url('/vendor/alltimesheets',$employee->user_id)}}" class="btn btn-info">View Timesheets</a></td>
                <td>
                    
                    <form action="{{route('vendor.employees.destroy',$employee->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
    
<div>
@endsection
