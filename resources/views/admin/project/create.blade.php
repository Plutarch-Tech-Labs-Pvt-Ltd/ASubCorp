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
    <form method="post" action="{{url('/create/project')}}">
        <fieldset>
        <legend>Project Details : </legend>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Project Name:</label>
            <input type="text" class="form-control" name="project-name"/>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Project Client:</label>
            <input type="text" class="form-control" name="project-client"/>
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Project Start Date:</label>
            <input type="date" class="form-control" name="project-startdate"/>
        </div>

        </fieldset>
      
         
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
        
    </div>
</div>
@endsection