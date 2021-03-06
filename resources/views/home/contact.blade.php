@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
<!-- Content -->
<div class="page-content bg-white">
	<!-- inner page banner -->
	<div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
		<div class="container">
			<div class="page-banner-entry">
				<h1 class="text-white">Contact Us</h1>
			</div>
		</div>
	</div>
	<!-- Breadcrumb row -->
	<div class="breadcrumb-row">
		<div class="container">
			<ul class="list-inline">
				<li><a href="{{route('home')}}">Home</a></li>
				<li>Contact Us</li>
			</ul>
		</div>
	</div>
	<!-- Breadcrumb row END -->

	<!-- inner page banner -->
	<div class="page-banner contact-page section-sp2">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 m-b30">
					<div class="bg-primary text-white contact-info-bx">
						<h2 class="m-b10 title-head">Contact <span>Informations</span></h2>
						<div class="widget widget_getintuch">

							{!! $setting->contact !!}
						</div>
						<h5 class="m-t0 m-b20">Follow Us</h5>
						<ul class="list-inline contact-social-bx">
							<li><a href="{{$setting->facebook}}" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
							<li><a href="{{$setting->twitter}}" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
							<li><a href="{{$setting->linkedin}}" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="{{$setting->instagram}}" class="btn outline radius-xl"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-7 col-md-7">
					<form class="contact-bx" role="form" action="/storemessage" method="post">
						@csrf
						<div class="heading-bx left">
							<h2 class="title-head">Get In <span>Touch</span></h2>
							<p style="color: red;">@include('home.messages')</p>
						</div>
						<div class="row placeani">
							<div class="col-lg-6">
								<div class="form-group">
									<div class="input-group">
										<label>Your Name</label>
										<input name="name" type="text" required class="form-control valid-character">
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<div class="input-group">
										<label>Your Email Address</label>
										<input name="email" type="email" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<div class="input-group">
										<label>Your Phone</label>
										<input name="phone" type="tel" required class="form-control int-value">
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<div class="input-group">
										<label>Subject</label>
										<input name="subject" type="text" required class="form-control">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Type Message</label>
										<textarea name="message" rows="4" class="form-control" required></textarea>
									</div>
								</div>
							</div>
							<div class="col-lg-12" style="text-align: center;">
								<button name="submit" type="submit" value="Submit" class="btn button-md"> Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- inner page banner END -->
</div>
<!-- Content END-->

@endsection