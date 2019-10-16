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
        <input name="_method" type="hidden" value="POST">
        {{csrf_field()}}

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Vendor Name:</label>
            <input type="text" class="form-control" name="vendor-name" value="{{$vendor['name']}}" />
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Vendor Email:</label>
            <input type="email" class="form-control" name="vendor-email" value="{{$vendor['email']}}" />
        </div>

        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Vendor Password:</label>
            <input type="text" class="form-control" name="vendor-password"/>
        </div>

        
        
       
        
       
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection