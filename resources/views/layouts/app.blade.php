
@php( $userphoto = Auth::user()->profile_photo_path)

@auth()
@section('styles')
    @include('admin.partials.styles')
@show

<!-- START HEADER-->
@section('header')
    @include('admin.partials.header')
@show
<!-- END HEADER-->



@endauth
<body class="fixed-navbar">
<div class="page-wrapper">
    <!-- START SIDEBAR-->

@section('sidebar')
@include('admin.partials.sidebar')
@show

<!-- END SIDEBAR-->
    <!-- START PAGE CONTENT-->
    <div class="content-wrapper">
        <div class="page-content fade-in-up ">
    @yield('admin')
        </div>
    </div>
    <!-- END PAGE CONTENT-->

    <!-- Footer-->
    <footer class="page-footer">
            <div class="font-13">  Copyright <b>2B Develop</b> - 2021 © </div>
            <a class="px-4" href="#" target="_blank"></a>
            <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
        </footer>
    <!-- Footer-->
    <!-- scripts-->
    @section('scripts')
        <!-- Global site tag (gtag.js) - Google Analytics -->

     @include('admin.partials.scripts')
    @show
    <!-- scripts-->
</div>
</body>

</html>

