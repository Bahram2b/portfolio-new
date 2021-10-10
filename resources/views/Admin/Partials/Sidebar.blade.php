<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{url('upload/user_images/'.$userphoto)}}" width="45px" />

            </div>
            <div class="admin-info">
                <div class="font-strong">{{Auth::user()->name}}</div><small>Admin</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{route('Dashboard')}}"><i class="sidebar-item-icon fa fa-dashboard"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
                <a class="active" href={{url('/')}}>
                    <span class="nav-label">Welcome Page</span>
                </a>
                <a class="active" href={{route('Video.Portfolio')}}>
                    <span class="nav-label">Videos Portfolio</span>
                </a>
                <a class="active" href={{route('Photo.Portfolio')}}>
                    <span class="nav-label">Photos Portfolio</span>
                </a>
            </li>
            <li class="heading">Portfolio</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-photo"></i>
                    <span class="nav-label">Photos</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('Photo.index')}}">Management</a>
                    </li>
                    <li>
                        <a href="">Portraits</a>
                    </li>
                    <li>
                        <a href="">Photo Manipulations</a>
                    </li>
                    <li>
                        <a href="">Product Photographs</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-video-camera"></i>
                    <span class="nav-label">Videos</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('Clip.index')}}">Management</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-hamburger"></i>
                    <span class="nav-label">Profile Edit</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('admin.pass')}}">Change Password</a>
                    </li>
                    <li>
                        <a href="{{route('admin.profile')}}">Personal Info</a>
                    </li>
                    <li>
                        <a href="{{route('user.logout')}}">Logout</a>
                    </li>

                </ul>
            </li>

            <li class="heading">PAGES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                    <span class="nav-label">Coming Soon</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="">Videos</a>
                    </li>
                    <li>
                        <a href="">Photos</a>
                    </li>
                    <li>
                        <a href="">Welcome Page</a>
                    </li>
                </ul>

            </li>
            <li>
                <a class="active orange" href="{{route('user.logout')}}"><i class="sidebar-item-icon fa fa-power-off"></i>
                    <span class="nav-label">Logout</span>
                </a>

                </a>
            </li>

{{--            <li>--}}
{{--                <a href=""><i class="sidebar-item-icon fa fa-calendar"></i>--}}
{{--                    <span class="nav-label">Videos</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>--}}
{{--                    <span class="nav-label">Videos</span><i class="fa fa-angle-left arrow"></i></a>--}}
{{--                <ul class="nav-2-level collapse">--}}
{{--                    <li>--}}
{{--                        <a href="invoice.html">Invoice</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="profile.html">Profile</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="login.html">Login</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="register.html">Register</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="lockscreen.html">Lockscreen</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="forgot_password.html">Forgot password</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="error_404.html">404 error</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="error_500.html">500 error</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>--}}
{{--                    <span class="nav-label">Welcome Page</span><i class="fa fa-angle-left arrow"></i></a>--}}
{{--                <ul class="nav-2-level collapse">--}}
{{--                    <li>--}}
{{--                        <a href="javascript:;">Level 2</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="javascript:;">--}}
{{--                            <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>--}}
{{--                        <ul class="nav-3-level collapse">--}}
{{--                            <li>--}}
{{--                                <a href="javascript:;">Level 3</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript:;">Level 3</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
    </div>
</nav>
