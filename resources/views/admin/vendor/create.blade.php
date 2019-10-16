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
    <form method="post" action="{{url('/create/vendor')}}">
        <fieldset>
        <legend>Vendor Account Details : </legend>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Vendor Name:</label>
            <input type="text" class="form-control" name="vendor-name"/>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Vendor Email:</label>
            <input type="email" class="form-control" name="vendor-email"/>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Vendor Phone:</label>
            <input type="text" class="form-control" name="vendor-phone"/>
        </div>
        
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Vendor Password:</label>
            <input type="text" class="form-control" name="vendor-password"/>
        </div>
        
        </fieldset>
        
         <fieldset>
        <legend>Vendor Details : </legend>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Company Name:</label>
            <input type="text" class="form-control" name="vendor-company-name"/>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Company Url:</label>
            <input type="text" class="form-control" name="vendor-company-url"/>
        </div>
        
        
        
        </fieldset>
         
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
        
    </div>
</div>
@endsection