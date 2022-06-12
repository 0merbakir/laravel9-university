@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('content')
<!--Main container start -->
<main class="ttr-wrapper">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Dashboard</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="/admin"><i class="fa fa-home"></i>Admin</a></li>
				<li>Dashboard</li>
			</ul>
		</div>
		<!-- Card -->
		<div class="row">
			<div class="col-md- col-lg-3 col-xl-6 col-sm-8 col-12">
				<div class="widget-card widget-bg1">
					<div class="wc-item">
						<h4 class="wc-title">
							Total Menus
						</h4>
						<span class="wc-des">
							Several Menus
						</span>
						<span class="wc-stats">
							<span class="counter">{{$menus->count('id')}}</span>
						</span>
						<div class="progress wc-progress">
							<div class="progress-bar" role="progressbar" style="width: {{$menus->count('id')}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
						</div>
						<span class="wc-progress-bx">
						</span>
					</div>
				</div>
			</div>
			<div class="col-md- col-lg-3 col-xl-6 col-sm-8 col-12">
				<div class="widget-card widget-bg2">
					<div class="wc-item">
						<h4 class="wc-title">
							Total Contents
						</h4>
						<span class="wc-des">
							Different Types Of Content
						</span>
						<span class="wc-stats counter">
							{{$contents->count('id')}}
						</span>
						<div class="progress wc-progress">
							<div class="progress-bar" role="progressbar" style="width: {{$contents->count('id')}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
						<span class="wc-progress-bx">
						</span>
					</div>
				</div>
			</div>
			<div class="col-md- col-lg-3 col-xl-6 col-sm-8 col-12">
				<div class="widget-card widget-bg3">
					<div class="wc-item">
						<h4 class="wc-title">
							Total Users
						</h4>
						<span class="wc-des">
							Joined Users
						</span>
						<span class="wc-stats counter">
							{{$users->count('id')}}
						</span>
						<div class="progress wc-progress">
							<div class="progress-bar" role="progressbar" style="width: {{$users->count('id')}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
						</div>
						<span class="wc-progress-bx">
						</span>
					</div>
				</div>
			</div>
			<div class="col-md- col-lg-3 col-xl-6 col-sm-8 col-12">
				<div class="widget-card widget-bg4">
					<div class="wc-item">
						<h4 class="wc-title">
							Total Comments
						</h4>
						<span class="wc-des">
							Customer Review
						</span>
						<span class="wc-stats counter">
							{{$comments->count('id')}}
						</span>
						<div class="progress wc-progress">
							<div class="progress-bar" role="progressbar" style="width: {{$comments->count('id')}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200"></div>
						</div>
						<span class="wc-progress-bx">
						</span>
					</div>
				</div>
			</div>
			<div class="col-md- col-lg-3 col-xl-6 col-sm-8 col-12">
				<div class="widget-card widget-bg1">
					<div class="wc-item">
						<h4 class="wc-title">
							Total Message
						</h4>
						<span class="wc-des">
							All Messages
						</span>
						<span class="wc-stats">
							<span class="counter">{{$messages->count('id')}}</span>
						</span>
						<div class="progress wc-progress">
							<div class="progress-bar" role="progressbar" style="width: {{$messages->count('id')}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
						</div>
						<span class="wc-progress-bx">
						</span>
					</div>
				</div>
			</div>
			<div class="col-md- col-lg-3 col-xl-6 col-sm-8 col-12">
				<div class="widget-card widget-bg1">
					<div class="wc-item">
						<h4 class="wc-title">
							Total FAQs
						</h4>
						<span class="wc-des">
							All FAQs
						</span>
						<span class="wc-stats">
							<span class="counter">{{$faqs->count('id')}}</span>
						</span>
						<div class="progress wc-progress">
							<div class="progress-bar" role="progressbar" style="width: {{$faqs->count('id')}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
						</div>
						<span class="wc-progress-bx">
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection