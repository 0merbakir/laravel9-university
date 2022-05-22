@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">About Us</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="content-block" style="text-align: center;">
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-md-12 col-lg-16 col-xl-16">
                        <div >

                                {!! $setting->aboutus !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content END-->

@endsection