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
    <form method="post" action="{{route('admin.project.update',$project->id)}}" >
        {{csrf_field()}}
        <input name="_method" type="hidden" value="POST">
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Project Name:</label>
            <input type="text" class="form-control" name="project-name" value="{{$project->project_name}}" />
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Project Client Name:</label>
            <input type="text" class="form-control" name="project-client" value="{{$project->client_name}}" />
        </div>
        
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Project Start Date:</label>
            <input type="date" class="form-control" name="project-startdate" value="{{$project->start_date}}"/>
        </div>
        
       
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection