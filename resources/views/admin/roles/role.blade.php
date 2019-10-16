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
</div>
@endsection