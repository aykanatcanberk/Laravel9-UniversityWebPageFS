@extends('layouts.frontbase2')


@section('title', 'About Us | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="col-md-12">
                    {!! $setting->aboutus !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
