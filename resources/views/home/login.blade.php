@include('home.head')

@section('title', 'Login')

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
@include('auth.login')
    </div>
</div>
<!-- Content END-->

@endsection

@include('home.footer')