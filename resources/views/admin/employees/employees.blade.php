@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Employee List :</h2>
    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Email</td>
              <td colspan="3">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td><a href="{{route('admin.employees.view',$employee->user_id)}}" class="btn btn-info">View Details</a>
                <td><a href="{{route('admin.employees.timesheetview',$employee->user_id)}}" class="btn btn-info">View Timesheets</a>
                <td><a href="{{route('admin.employees.edit',$employee->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('admin.employees.destroy',$employee->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
     {{ $employees->links() }}
<div>
@endsection