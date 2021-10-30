@extends('layouts.homeMaster')
<div class="load">
    <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>
</div>
@section('title', 'Photo')


@section('otherside', 'Video')
@section('link', '/video-portfolio')
@section('sec-1', 'Portraits')
@section('sec-2', 'Manipulations Photos')
@section('sec-3', 'Commercial Photos')
@section('sec-4', 'Music Photos')
@section('but-1', 'Portraits')
@section('but-2', 'Manipulations')
@section('but-3', 'Commercials')
@section('but-4', 'Music Covers')
@section('ver-1', 'P O R T R A I T S')
@section('ver-2', 'M A N I P U L A I I O N')
@section('ver-3', 'C O M M E R C I A L')
@section('ver-4', 'M U S I C  -  C O V E R S')
@section('scripts')
    @parent
    <!--===============================================================================================-->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <!--===============================================================================================-->
@endsection
@section('home_content')
    @include('homePartials.photoportfolio')
@endsection
