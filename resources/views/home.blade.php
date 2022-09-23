@extends('layouts.app')

@section('title', 'Store - Home')
@section('homePage', 'active')

@section('content')
    <div class="page-content page-home ">
        <br>
            @include('home.images')
        <br>
        <div>
            @include('home.songs')
        </div>
    @endsection
