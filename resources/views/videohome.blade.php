@extends('layouts.homeMaster')

@section('title', 'Videos')
@section('sec-1', 'Broll videos')
@section('sec-2', 'Product videos')
@section('sec-3', 'Motion videos')
@section('but-1', 'Broll videos')
@section('but-2', 'Product videos')
@section('but-3', 'Motion videos')
@section('ver-1', 'B - R o l l')
@section('ver-2', 'P R O D U C T')
@section('ver-3', 'M O T I O N')

@section('portfolio', 'Videos')


@section('home_content')
    @include('homePartials.videoportfolio')
@endsection
