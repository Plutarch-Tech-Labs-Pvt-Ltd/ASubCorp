@extends('layouts.auth')
@section('title','Login')
@section('content')

    <div class="animate form login_form">
       <section class="login_content">
         <h2><i class="fa fa-plus-circle"></i> {{'Asubcorp'}}</h2>
            <div>
                <p>©{{date('Y')}} </p>
            </div>      
            <div class="clearfix"></div>
            <form role="form" method="POST" action="{{ url('/login') }}">
                {{csrf_field()}}
                <h1>Login</h1>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" placeholder="email" required="" />
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div>
                    <button class="btn btn-default submit" type="submit">Log in</button>
                    <!--a class="reset_pass" href="{{ url('/password/reset') }}">Lost your password?</a-->
                </div>

              

                
            </form>
        </section>
    </div>
@endsection
