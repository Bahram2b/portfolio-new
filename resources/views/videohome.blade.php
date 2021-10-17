@extends('layouts.homeMaster')
@section('header')
    @parent
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/video.css')}}">
    <!--===============================================================================================-->
@endsection
@section('title', 'Videos')
@section('sec-1', 'Broll videos')
@section('sec-2', 'Commercial videos')
@section('sec-3', 'Music videos')
@section('sec-4', 'Motion videos')
@section('but-1', 'Broll videos')
@section('but-2', 'Commercial videos')
@section('but-3', 'Music videos')
@section('but-4', 'Motion videos')
@section('ver-1', 'B - R o l l')
@section('ver-2', 'C O M M E R C I A L')
@section('ver-3', 'M U S I C  -  V I D E O S')
@section('ver-4', 'M O T I O N')

@section('portfolio', 'Videos')


@section('home_content')
    @include('homePartials.videoportfolio')
@endsection
