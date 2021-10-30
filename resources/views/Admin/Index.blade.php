@extends('layouts.app')
@section('admin')
<div class="container">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HD7PBZJ273"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HD7PBZJ273');
    </script>
    
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="ibox  widget-stat">
            <div class="ibox-body">
                <h2 class="m-b-5 font-strong">{{$videocount}}</h2>
                <div class="m-b-5">Number of videos</div><i class="fa fa-video widget-stat-icon"></i>
{{--                <div><i class="fa fa-level-up m-l-5"></i> <small>زيادة ب 25%</small></div>--}}
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="ibox  widget-stat">
            <div class="ibox-body">
                <h2 class="m-b-5 font-strong">{{$photocount}}</h2>
                <div class="m-b-5">Number of photos</div><i class="fa fa-picture-o widget-stat-icon"></i>
{{--                <div><i class="fa fa-level-up m-l-5"></i> <small>زيادة ب 25%</small></div>--}}
            </div>
        </div>
    </div>


{{--    <div class="col-lg-3 col-md-6">--}}
{{--        <div class="ibox bg-dark color-white widget-stat">--}}
{{--            <div class="ibox-body">--}}
{{--                <h2 class="m-b-5 font-strong">10505000 ملیون</h2>--}}
{{--                <div class="m-b-5">فروش کلی</div><i class="fa fa-money widget-stat-icon"></i>--}}
{{--                <div><i class="fa fa-level-up m-l-5"></i><small> افزایش 22%</small></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-lg-3 col-md-6">--}}
{{--        <div class="ibox bg-dark color-white widget-stat">--}}
{{--            <div class="ibox-body">--}}
{{--                <h2 class="m-b-5 font-strong">108</h2>--}}
{{--                <div class="m-b-5">تعداد کاربران</div><i class="ti-user widget-stat-icon"></i>--}}
{{--                <div><i class="fa fa-level-down m-l-5"></i><small>  کاهش-12% </small></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

</div>

@endsection
