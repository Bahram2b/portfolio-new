@extends('layouts.homeMaster')
<div class="load">
    <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>
</div>
@section('header')
    @parent
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/video.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/js/videojs.js')}}">
    <!--===============================================================================================-->
@endsection
@section('title', 'Videos')
@section('otherside', 'Photo')
@section('link', '/photo-portfolio')
@section('sec-1', 'Cinematic videos')
@section('sec-2', 'Commercial videos')
@section('sec-3', 'Music videos')
@section('sec-4', 'Motion videos')
@section('but-1', 'Cinematic')
@section('but-2', 'Commercial')
@section('but-3', 'Music videos')
@section('but-4', 'Motion')
@section('ver-1', 'C I N E M A T I C')
@section('ver-2', 'C O M M E R C I A L')
@section('ver-3', 'M U S I C  -  V I D E O S')
@section('ver-4', 'M O T I O N')

@section('portfolio', 'Videos')

@section('scripts')
    @parent
    <!--===============================================================================================-->
    <script src="{{asset('frontend/js/videojs.js')}}"></script>
    <!--===============================================================================================-->
@endsection
@section('home_content')
    @include('homePartials.videoportfolio')
@endsection


