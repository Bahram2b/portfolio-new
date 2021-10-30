<!DOCTYPE html>
<html lang="en">
<head>
    @section('header')
@include('homePartials.headerstylesheets')
    @show
</head>
<body>

@section('sidemenu')


    @include('homePartials.sidemenu')
@show

{{--<body class="animsition">--}}

<!-- Header -->
{{----}}
<!-- End Header -->
<!-- Cart -->
<!-- Sidebar menu -->


<!-- Sidebar menu End-->
<!-- Home content-->
<!-- Home Baner-->
@section('baner')
    @include('homePartials.baner')
@show

<!-- Home Baner-->
@yield('home_content')
<!-- Home content End-->

<!-- Footer -->
{{--@include('homePartials.footer')--}}
{{--@include('homePartials.instafooter')--}}
<!-- Footer End-->

<!-- Back to top -->


@section('scripts')
    @include('homePartials.scripts')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HD7PBZJ273"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HD7PBZJ273');
    </script>
@show


</body>
</html>
