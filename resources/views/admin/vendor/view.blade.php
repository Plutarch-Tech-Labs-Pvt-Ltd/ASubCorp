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
     <h3>Vendor Details : </h3>
        <div class="row">
            <div class="col-sm-2">Name :</div>
            <div class="col-sm-10">{{$vendor[0]->name}}</div>
        </div>
        <div class="row">
            <div class="col-sm-2">Email :</div>
            <div class="col-sm-10">{{$vendor[0]->email}}</div>
        </div>
        <div class="row">
            <div class="col-sm-2">Phone :</div>
            <div class="col-sm-10">{{$vendor[0]->phone}}</div>
        </div>
        <div class="row">
            <div class="col-sm-2">Company Name :</div>
            <div class="col-sm-10">{{$vendor[0]->company_name}}</div>
        </div>
        <div class="row">
            <div class="col-sm-2">Company Url :</div>
            <div class="col-sm-10">{{$vendor[0]->company_url}}</div>
        </div>
        
</div>
@endsection