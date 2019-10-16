@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
    <div class="row">
    <form method="post" action="" >
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Employee Name:</label>
            <input type="text" class="form-control" name="employee-name" value="{{$employee->name}}" />
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Employee Email:</label>
            <input type="email" class="form-control" name="employee-email" value="{{$employee->email}}" />
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Employee Password:</label>
            <input type="text" class="form-control" name="employee-password"/>
        </div>
       
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection