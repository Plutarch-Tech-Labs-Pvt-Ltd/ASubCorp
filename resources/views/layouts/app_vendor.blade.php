<!DOCTYPE html>
<html lang="en">
@include('partials._head')

<body class="nav-md" >
<div class="container body">

    <div class="main_container">

    {{--top nav--}}
    @include('partials._vendor_sidenav')
    {{--/topnav--}}

    <!-- top navigation -->
    @include('partials._topnav')
    <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" >
            <div class="page-title">
                <div class="title_left">
                    <h3>@yield('title')</h3>
                </div> 
            </div>
            <div class="clearfix"></div><br><br>
            <div class="data-pjax">
                @yield('content')

            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
    @include('partials._footer')
    <!-- /footer content -->
    </div>
</div>



<script src="{{asset('public/js/app.js')}}"></script>
@include('partials._notification')
@stack('scripts')


</body>
</html>