<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>@yield('title','Admin Panel')</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
{{--    <link href="{{asset('v4/css/bootstrap.min.css')}}" rel="stylesheet"/>--}}
        <link href="{{asset('css/fontawesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/angular-toastr/2.1.1/angular-toastr.css" rel="stylesheet" />


    <!-- PLUGINS STYLES-->
{{--    <link href="{{asset('backend/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />--}}

    <link href="{{asset('backend/css/main.css')}}" rel="stylesheet" />
</head>
<header class="header">
    <div class="page-brand">

            <span class="brand-mini">AC</span>
            <span class="brand text-decoration-none">
                       Admin Panel<span class="brand-tip"></span>
                    </span>

    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <style>
            .hamb {
                background-color: transparent;
                border: none;
                cursor: pointer;
                display: flex;
                padding: 0;

            }
            .line {
                fill: none;
                stroke: rgba(255, 104, 23, 0.98);
                stroke-width: 6;
                transition: stroke-dasharray 600ms cubic-bezier(0.4, 0, 0.2, 1),
                stroke-dashoffset 600ms cubic-bezier(0.4, 0, 0.2, 1);
            }
            .line1 {
                stroke-dasharray: 60 207;
                stroke-width: 6;
            }
            .line2 {
                stroke-dasharray: 60 60;
                stroke-width: 6;
            }
            .line3 {
                stroke-dasharray: 60 207;
                stroke-width: 6;
            }
            .opened .line1 {
                stroke-dasharray: 90 207;
                stroke-dashoffset: -134;
                stroke-width: 6;
            }
            .opened .line2 {
                stroke-dasharray: 1 60;
                stroke-dashoffset: -30;
                stroke-width: 6;
            }
            .opened .line3 {
                stroke-dasharray: 90 207;
                stroke-dashoffset: -134;
                stroke-width: 6;
            }
        </style>

        <ul class="nav navbar-toolbar" style="padding-right: 0;">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler ">  <button class="hamb" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                        <svg width="43" height="43" viewBox="0 0 100 100">
                            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                            <path class="line line2" d="M 20,50 H 80" />
                            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                        </svg>
                    </button></a>
            </li>
            <li>
{{--                <form class="navbar-search" action="javascript:;">--}}
{{--                    <div class="rel">--}}
{{--                        <input class="form-control" placeholder="جستجو...">--}}
{{--                        <span class="search-icon"><i class="ti-search"></i></span>--}}
{{--                    </div>--}}
{{--                </form>--}}
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
{{--            <li class="dropdown dropdown-inbox">--}}
{{--                <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa -envelope-o"></i>--}}
{{--                    <span class="badge badge-primary envelope-badge">9</span>--}}
{{--                </a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-left dropdown-menu-media">--}}
{{--                    <li class="dropdown-menu-header">--}}
{{--                        <div>--}}
{{--                            <a class="pull-left" href="mailbox.html">مشاهده همه</a>--}}
{{--                            <span><strong>9 </strong>پیام جدید</span>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">--}}
{{--                        <div>--}}
{{--                            <a class="list-group-item">--}}
{{--                                <div class="media">--}}
{{--                                    <div class="media-img">--}}
{{--                                        <img src="{{asset('backend/img/users/u1.jpg')}}" />--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body text-right">--}}
{{--                                        <div class="font-strong"> </div>Jeanne Gonzalez<small class="text-muted float-left">Just now</small>--}}
{{--                                        <div class="font-13">Your proposal interested me.</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="list-group-item">--}}
{{--                                <div class="media">--}}
{{--                                    <div class="media-img">--}}
{{--                                        <img src="{{asset('backend/img/users/u2.jpg')}}" />--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body text-right">--}}
{{--                                        <div class="font-strong"></div>Becky Brooks<small class="text-muted float-left">18 mins</small>--}}
{{--                                        <div class="font-13">Lorem Ipsum is simply.</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="list-group-item">--}}
{{--                                <div class="media">--}}
{{--                                    <div class="media-img">--}}
{{--                                        <img src="{{asset('backend/img/users/u3.jpg')}}" />--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body text-right">--}}
{{--                                        <div class="font-strong"></div>Frank Cruz<small class="text-muted float-left">18 mins</small>--}}
{{--                                        <div class="font-13">Lorem Ipsum is simply.</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="list-group-item">--}}
{{--                                <div class="media">--}}
{{--                                    <div class="media-img">--}}
{{--                                        <img src="{{asset('backend/img/users/u4.jpg')}}" />--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body text-right">--}}
{{--                                        <div class="font-strong"></div>Rose Pearson<small class="text-muted float-left">3 hrs</small>--}}
{{--                                        <div class="font-13">Lorem Ipsum is simply.</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="dropdown dropdown-notification">--}}
{{--                <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-left dropdown-menu-media">--}}
{{--                    <li class="dropdown-menu-header">--}}
{{--                        <div>--}}
{{--                            <a class="pull-left" href="javascript:;">مشاهده همه</a>--}}
{{--                            <span><strong>5</strong> پیام جدید</span>--}}
{{--                        </div>--}}

{{--                    </li>--}}
{{--                    <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">--}}
{{--                        <div>--}}
{{--                            <a class="list-group-item">--}}
{{--                                <div class="media">--}}
{{--                                    <div class="media-img">--}}
{{--                                        <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body text-right">--}}
{{--                                        <div class="font-13">4 مهمات انتهت</div><small class="text-muted">22 دقيقة</small></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="list-group-item">--}}
{{--                                <div class="media">--}}
{{--                                    <div class="media-img">--}}
{{--                                        <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body text-right">--}}
{{--                                        <div class="font-13">لديك 10 أوامر جديدة</div><small class="text-muted">40 دقيقة</small></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="list-group-item">--}}
{{--                                <div class="media">--}}
{{--                                    <div class="media-img">--}}
{{--                                        <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body text-right">--}}
{{--                                        <div class="font-13">Server #7 rebooted</div><small class="text-muted">1ساعة</small></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a class="list-group-item">--}}
{{--                                <div class="media">--}}
{{--                                    <div class="media-img">--}}
{{--                                        <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body text-right">--}}
{{--                                        <div class="font-13">مستخدم جديد مسجل</div><small class="text-muted">2 ساعة</small></div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <div class="dropdown btn-group">--}}
{{--                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    Menu <span class="caret"></span>--}}
{{--                </button>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                    <li><a href="#">Action</a></li>--}}
{{--                    <li><a href="#">Another action</a></li>--}}
{{--                    <li><a href="#">Something else here</a></li>--}}
{{--                    <li role="separator" class="divider"></li>--}}
{{--                    <li><a href="#">Separated link</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <span></span><i class="fa fa-angle-down m-l-5"></i>{{Auth::user()->name}}
                    <img src="{{url('upload/user_images/'.$userphoto)}}" />
                </a>
                <ul class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>صفحه پروفایل</a>
                    <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>تنظیمات</a>
{{--                    <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>دعم</a>--}}
                    <li class="dropdown-divider"></li>
                    <a class="dropdown-item" href="{{route('user.logout')}}"><i class="fa fa-power-off"></i>خروج</a>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>
