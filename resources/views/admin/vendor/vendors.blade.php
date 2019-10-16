@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Vendor List :</h2>
    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Email</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($vendors as $vendor)
            <tr>
                <td>{{$vendor->id}}</td>
                <td>{{$vendor->name}}</td>
                <td>{{$vendor->email}}</td>
                <td><a href="{{route('admin.vendor.view',$vendor->id)}}" class="btn btn-info">View Details</a>
                </td>
                <td><a href="{{route('admin.vendor.edit',$vendor->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{route('admin.vendor.delete',$vendor->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
      
            @endforeach
        </tbody>
    </table>
    {{ $vendors->links() }}
<div>
@endsection