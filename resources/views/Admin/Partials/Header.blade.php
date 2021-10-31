</head>
<header class="header">
    <div class="page-brand">

            <span class="brand-mini"><img src="{{asset('backend/img/mory-logowhite.png')}}" width="70px" height="60px" alt=""></span>
            <span class="brand text-decoration-none">
                       Admin Panel<span class="brand-tip"></span>
                    </span>

    </div>
    <div class="flexbox flex-1">

        <!-- START TOP-LEFT TOOLBAR-->
        <style>
            .dropdown {
                display: inline-block;
                position: relative;
                direction:ltr!important;
                padding: 5px;

            }

            .dd-button {
                background: transparent;
                display: inline-block;
             color: #ff6817;
                border-radius: 4px;
                padding: 10px 30px 10px 20px;
                font-weight: bold;
                cursor: pointer;
                white-space: nowrap;
            }

            .dd-button:after {
                content: '';
                position: absolute;
                top: 50%;
                right: 15px;
                transform: translateY(-50%);
                width: 0;
                height: 0;
                border-left: 6px solid transparent;
                border-right: 6px solid transparent;
                border-top: 6px solid #ff6817;
            }

            /*.dd-button:hover {*/
            /*    background-color: #eeeeee;*/
            /*}*/


            .dd-input {
                display: none;
            }

            .dd-menu {
                position: absolute;
                top: 100%;
                border: 1px solid #000000;
                border-radius: 4px;
                padding: 0;
                margin: 2px 0 0 0;
                color: #ff6817;
                box-shadow: 0 0 6px 0 rgba(0,0,0,0.1);
                background-color:rgba(80, 84, 88, 0.9);
                list-style-type: none;
            }

            .dd-input + .dd-menu {
                display: none;
            }

            .dd-input:checked + .dd-menu {
                display: block;
            }

            .dd-menu li {
                padding: 10px 20px;
                cursor: pointer;
                white-space: nowrap;
            }

            .dd-menu li:hover {
                background-color: rgba(43,43,43,0.92)
            }

            .dd-menu li a {
                display: block;
                margin: -10px -20px;
                padding: 10px 20px;
                font-weight: 540;
            }

            .dd-menu li.divider{
                padding: 0;
                border-bottom: 1px solid #000000;
            }
            a{
                text-decoration: none;
               color: rgba(255,104,23,0.92);
            }
            a:hover{

               color: rgba(255,104,23,0.92);
            }
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

        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <label class="dropdown">

            <div class="dd-button">
               <span><img src="{{url('upload/user_images/'.$userphoto)}}" class="rounded-circle" style="max-height: 50px; max-width: 70px; padding: 5px"/></span>
            </div>

            <input type="checkbox" class="dd-input" id="test">

            <ul class="dd-menu">
                <li>
                    <a href="{{route('admin.profile')}}">Personal Info</a></li>
                <li>
                    <a href="{{route('admin.pass')}}">Change Password</a>
                <li class="divider"></li>
                <li>
                    <a href="{{route('user.logout')}}">Logout<i class="sidebar-item-icon fa fa-power-off p-2"></i>
                        <span class="nav-label"></a>
                </li>
            </ul>

        </label>
    </div>
</header>
