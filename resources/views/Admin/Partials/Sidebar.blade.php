<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{url('upload/user_images/'.$userphoto)}}" style="max-height: 70px; max-width: 120px "/>

            </div>
            <div class="admin-info">
                <div class="font-strong">{{Auth::user()->name}}</div><small>Admin</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li class="heading">Site Links</li>
            <li>
                <a class="active" href="{{route('Dashboard')}}"><i class="sidebar-item-icon fa fa-dashboard"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
                <a class="active" href={{url('/')}}><i class="sidebar-item-icon fa fa-home"></i>

                    <span class="nav-label">Welcome Page</span>
                </a>
                <a class="active" href={{route('Video.Portfolio')}}><i class="sidebar-item-icon fa fa-photo"></i>
                    <span class="nav-label">Videos Portfolio</span>
                </a>
                <a class="active" href={{route('Photo.Portfolio')}}><i class="sidebar-item-icon fa fa-video-camera"></i>
                    <span class="nav-label">Photos Portfolio</span>
                </a>
            </li>
            <li class="heading">Portfolio Edit</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-photo"></i>
                    <span class="nav-label">Photos</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{url('/photo/management/index')}}">Photos Management</a>
                    </li>
                    <li>
                        <a href="{{url('/photo/management/portraits')}}">Portraits</a>
                    </li>
                    <li>
                        <a href="{{url('/photo/management/manipulations')}}">Manipulations photos</a>
                    </li>
                    <li>
                        <a href="{{url('/photo/management/commercials')}}">Commercials Photographs</a>
                    </li>
                    <li>
                        <a href="{{url('/photo/management/musics')}}">Motion videos</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-video-camera"></i>
                    <span class="nav-label">Videos</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{url('/clip/management/index')}}">Videos Management</a>
                    </li>
                    <li>
                        <a href="{{url('/clip/management/brolls')}}">Broll videos</a>
                    </li>
                    <li>
                        <a href="{{url('/clip/management/musics')}}">Music videos</a>
                    </li>
                    <li>
                        <a href="{{url('/clip/management/commercials')}}">Commercials videos</a>
                    </li>
                    <li>
                        <a href="{{url('/clip/management/motions')}}">Motion videos</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                    <span class="nav-label">Profile</span><i class="fa fa-angle-left arrow"></i></a>
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

            <li class="heading">Pages Setup</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-mobile-phone" style="font-size: 26px"></i>
                    <span class="nav-label">Mobile version</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{url('/background/mobile-banner')}}">Banner Background</a>
                    </li>
                    <li>
                        <a href="{{url('/background/mobile-main')}}">Main background</a>
                    </li>

                </ul>

            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-desktop"></i>
                    <span class="nav-label">Desktop version</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{url('/background/desktop-banner')}}">Banner Background</a>
                    </li>
                    <li>
                        <a href="{{url('/background/1-3-4-sections')}}">1-3-4 Sections Background</a>
                    </li>
                    <li>
                        <a href="{{url('/background/second-section')}}">Second Section Background</a>
                    </li>
                </ul>

            </li>
        </ul>
    </div>
</nav>
