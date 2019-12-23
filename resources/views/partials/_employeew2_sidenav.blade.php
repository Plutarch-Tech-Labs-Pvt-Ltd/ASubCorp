<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title"><i class="fa fa-paw"></i> <span>{{"ASubCorp"}}</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{route('employeew2.dashboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                    
                    <li><a><i class="fa fa-users"></i>Timesheets <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/w2/alltimesheets',auth()->user()->id)}}">All Timesheets</a></li>
                            <li><a href="{{route('w2_create_timesheet',auth()->user()->id)}}">Create Timesheets</a></li>
                        </ul>   
                    </li>
                    
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        @include('partials._sidenav_footer')
    </div>
</div>