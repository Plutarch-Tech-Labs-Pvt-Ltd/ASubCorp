@extends('layouts.app_vendor')

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
    <form method="post" action="{{url('/vendor/create/employees',auth()->user()->id)}}" enctype="multipart/form-data" >
        <fieldset>
        <legend>Employee Account Details : </legend>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Employee Name:</label>
            <input type="text" class="form-control" name="employee-name"/>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Employee Email:</label>
            <input type="email" class="form-control" name="employee-email"/>
        </div>
        
         <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Employee Phone:</label>
            <input type="text" class="form-control" name="employee-phone"/>
        </div>
        
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Employee Password:</label>
            <input type="text" class="form-control" name="employee-password"/>
        </div>
        
        </fieldset>
        
        <fieldset>
        <legend>Employee Details : </legend>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Employee Type</label>
            
            <div class="radio">
              <label><input type="radio" name="employee-type" value="C2C" checked>C2C</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="employee-type" value="W2">W2</label>
            </div>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Vendor Name:</label>
            <select name="vendor-id" class="form-control">
                <option value=""> ------- Select Vendor ------ </option>
                @foreach($vendorLists as $vendor)
                <option value="{{$vendor->user_id}}">{{$vendor->name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Project Name:</label>
             <select name="project-id" class="form-control">
                <option value=""> ------- Select Project ------ </option>
                @foreach($projectLists as $project)
                <option value="{{$project->id}}">{{$project->project_name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Contract Agreement :</label>
            <input type="file" class="form-control" name="contract-agreement"/>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Rate Per hour:</label>
            <input type="text" class="form-control" name="employee-rate-per-hour"/>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Regular Hours:</label>
            <input type="text" class="form-control" name="employee-regular-hour"/>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Net payment terms :</label>
             <select name="vendor-net-payment" class="form-control">
                <option value=""> ------- Net Payment Terms ------ </option>
                <option value="30">30</option>
                <option value="45">45</option>
            </select>
        </div>
        
        </fieldset>
        
         
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
        
    </div>
</div>
@endsection