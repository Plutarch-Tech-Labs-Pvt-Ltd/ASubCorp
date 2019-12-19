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
     <h3>Employee Details : </h3>
        <div class="row">
            <div class="col-sm-2">Name :</div>
            <div class="col-sm-10">{{$employee[0]->name}}</div>
        </div>
        <div class="row">
            <div class="col-sm-2">Email :</div>
            <div class="col-sm-10">{{$employee[0]->email}}</div>
        </div>
        <div class="row">
            <div class="col-sm-2">Phone :</div>
            <div class="col-sm-10">{{$employee[0]->phone}}</div>
        </div>
        
         <div class="row">
            <div class="col-sm-2">Employee Type :</div>
            <div class="col-sm-10">{{$employee[0]->employee_type}}</div>
        </div>
        
        <div class="row">
            <div class="col-sm-2">Vendor Name  :</div>
            <div class="col-sm-10">{{$employee[0]->vendor_id}}</div>
        </div>
        
         <div class="row">
            <div class="col-sm-2">Project Name :</div>
            <div class="col-sm-10"></div>
        </div>
        
         <div class="row">
            <div class="col-sm-2">Contract Agreement :</div>
            <div class="col-sm-10">{{$employee[0]->contract_agreement}}</div>
        </div>
        
         <div class="row">
            <div class="col-sm-2">Regular Hour :</div>
            <div class="col-sm-10">{{$employee[0]->regular_hour}}</div>
        </div>
        
         <div class="row">
            <div class="col-sm-2">Rate Per Hour :</div>
            <div class="col-sm-10">{{$employee[0]->rate_per_hour}}</div>
        </div>
        
        <div class="row">
            <div class="col-sm-2">Net Payment Terms :</div>
            <div class="col-sm-10">{{$employee[0]->net_payment_terms}}</div>
        </div>
        
        
</div>
@endsection