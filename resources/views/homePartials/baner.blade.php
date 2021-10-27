<div class=" baner-content parallax-content" id="home">

<div class="baner-link">
    <a href="" class="about">About me</a>
    <a href="@yield('link')" class="pagechange">Go to the @yield('otherside') </a>
</div>
<div class="baner-linkmobile">
    <a href="@yield('link')" class="pagechange">Go to the @yield('otherside') </a>
    <a href="" class="about">About me</a>

</div>
    <div class="container">
        <div class="first-content">
            <h1 class="">Morteza Jelokhani</h1>
            <span class=""><em>@yield('portfolio','Photos') Portfolio</em></span>
            <div class="primary-button">
                {{--                <a href="#services">Discover More</a>--}}
                <a class="orange" href="#sec-1">@yield('but-1')</a>
                <a href="#sec-2">@yield('but-2') </a>
                <a href="#sec-3">@yield('but-3') </a>
                <a href="#sec-4">@yield('but-4')</a>
{{--                <a href={{route('Dashboard')}}>Dashboard</a>--}}
{{--                <a href={{route('Photo.Portfolio')}}>Photo Portfolio</a>--}}
{{--                <a href={{route('Video.Portfolio')}}>Video Portfolio</a>--}}
            </div>
            <div class="baner-namo ">
                <div >
                    <p>
                        Check out our Digital Media Company <span ></span><span ></span><span ></span><span ></span>
                    </p>


                    {{--                <img src="{{asset('frontend/img/LogoWhite.png')}}" alt="" width="150px" height="100px">--}}
                </div>
                <div class="namologo"><a href="https://namo.design/" style="text-decoration: none; ">   Namo<span ></span></a>

                </div>
            </div>

{{--                <img src="{{asset('frontend/img/LogoWhite.png')}}" alt="" width="150px" height="100px">--}}
            </div>

        </div>
    <div class="scroll-down">
        <span class="left">Scroll</span>
        <span class="mouse"></span>
        <span class="right">Down</span>
    </div>
    <div class="ScrollDown">

        <div class="ScrollDown_box">
            <a class="btn_ScrollDown" href="#sec-2">
                <span></span><span></span><span></span></a>
        </div>

    </div>
    </div>

</div>

