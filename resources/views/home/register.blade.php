@extends('layouts.frontbase2')

@section('title', 'User Registeration | ')

@section('content')
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Registeration</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="content-block" style="text-align: center;">
        @include('auth.register')
    </div>
</div>
<!-- Content END-->

@endsection
