@extends('layouts.app')

@section('content')
<div class="container">
    @if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
   
    <div class="row">
       <a href="{{url('/create/role')}}" class="btn btn-success">Create Role</a>
       <a href="{{url('/roles')}}" class="btn btn-default">All Roles</a>
    </div>
    
    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Description</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->description}}</td>
                <td><a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('admin.roles.destroy', $role->id) }}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this Role ?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection