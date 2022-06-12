@extends('layouts.frontbase')

@section('title', $menu->title)
@section('icon', Storage::url($setting->icon))

@section('content')
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url({{Storage::url($menu->image)}});">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white"> All About <i>{{$menu->title}}</i></h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{route('home')}}">Home</a></li>
                @if($menu->title == 'Home')
                @else
                <a href="{{route('menucontent', ['id'=> $menu->id, 'slug'=>$menu->title])}}"><li>{{$menu->title}} </li></a>
                @endif
            </ul>
        </div>
    </div>
    <div class="info-bx text-center">
        <h5>{{$menu->title}}</h5>
        <span>{{$menu->description}}</span>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="row">
                            @foreach($content as $rs)
                            <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                <div class="cours-bx">
                                    <div class="action-box">
                                        <img src="{{Storage::url($rs->image)}}" alt="">
                                        <a href="{{route('content', ['id' =>$rs->id])}}" class="btn">Read More</a>
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#">{{$rs->title}}</a></h5>
                                        <span>{{$rs->description}}</span>
                                    </div>
                                    <div class="cours-more-info">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact area END -->

        </div>
        <!-- Content END-->
        @endsection