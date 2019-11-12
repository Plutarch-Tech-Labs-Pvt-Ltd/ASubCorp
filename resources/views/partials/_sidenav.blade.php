<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title"><i class="fa fa-paw"></i> <span>{{config('app.name')}}</span></a>
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
                    
                    
                    <li><a href="{{url('/admin')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                    
                    
                <!--     <li><a><i class="fa fa-list"></i>Roles <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/roles')}}">All Roles</a></li>
                            <li><a href="{{url('/create/role')}}">Create Role</a></li>
                        </ul>
                    </li>        -->  
                    
                    
                    <li><a><i class="fa fa-users"></i>Vendors <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/all/vendors')}}">All Vendors</a></li>
                            <li><a href="{{url('/create/vendor')}}">Create Vendor</a></li>
                        </ul>
                    </li>
                    
                    <li><a><i class="fa fa-users"></i>Employee <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/employees')}}">All Employees</a></li>
                            <li><a href="{{url('/create/employee')}}">Create Employee</a></li>
                        </ul>
                    </li>
                    
                    <li><a><i class="fa fa-list"></i>Project <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{url('/projects')}}">All Projects</a></li>
                            <li><a href="{{url('/create/project')}}">Create Project</a></li>
                        </ul>
                    </li>                    
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        @include('partials._sidenav_footer')
    </div>
</div>