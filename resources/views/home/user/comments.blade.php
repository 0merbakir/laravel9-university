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
                <h1 class="text-white">Comments And Reviews</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="/"></a>Home</li>
                <li>User Panel</li>
                <li>Comments And Reviews</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    @include('home.user.profilesidebar')
                    <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
                        <div class="profile-content-bx">
                            <div class="tab-content">
                                <div class="tab-pane active" id="courses">
                                    <div class="courses-filter">
                                        <div class="clearfix">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">User Comments And Reviews</h3>
                                                </div>
                                                <div class="container mt-5" style="width: 80%">
                                                    <table id="example" class="table table-bordered table-responsive " style="width: 300%; ">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"> #Id</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Content</th>
                                                                <th style="width: 150 !important;"scope="col">Comment</th>
                                                                <th scope="col">Status</th>
                                                                <th>Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($comments as $rs)
                                                            <tr>
                                                                <td>{{$rs->id}}</td>
                                                                <td>{{$rs->content->type}}</td>
                                                                <td><a href="{{route('content',['id'=>$rs->content_id])}}" style="text-decoration: none;">{{$rs->content->title}}</a></td>
                                                                <td>{{$rs->comment}}</td>
                                                                <td>{{$rs->status}}</td>
                                                                <td><a type="button" href="/userpanel/reviewdestroy/{{$rs->id}}" class="btn-danger btn-sm" style="text-decoration: none;">Delete</a></td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
    @endsection