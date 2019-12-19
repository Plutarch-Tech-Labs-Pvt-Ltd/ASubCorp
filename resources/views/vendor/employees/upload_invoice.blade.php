@extends('layouts.app_vendor')
@section('title','Invoice')


@section('content')
<div class="container">
    
    <div class="row">       
        
             @foreach($timesheets as $timesheet)
            <div class="col-sm-6">
            <form method="post" action="{{route('invoice',$timesheet->id)}}" enctype="multipart/form-data" >
                @csrf
                <fieldset>      
                 <div class="form-group">
                        <input type="hidden" value="{{csrf_token()}}" name="_token" />
                        <label for="title">Title :</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <input type="hidden" value="{{csrf_token()}}" name="_token" />
                        <label for="title">Invoice :</label>
                        <input type="file" class="form-control" name="invoice">
                    </div>

                </fieldset>
                <button type="submit" class="btn btn-primary" id="upload">Upload</button>
            </form>
        </div>
         @endforeach
            
            
    </div>
<div>
@endsection
