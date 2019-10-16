@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Project List :</h2>
    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Project Name</td>
              <td>Project Client</td>
              <td>Project Start Date</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->project_name}}</td>
                <td>{{$project->client_name}}</td>
                <td>{{$project->start_date}}</td>
                <td><a href="{{route('admin.project.edit',$project->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('admin.project.delete',$project->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
      
            @endforeach
        </tbody>
    </table>
    {{ $projects->links() }}
<div>
@endsection