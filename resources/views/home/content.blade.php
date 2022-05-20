@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')
<div class="page-wraper">
	<!-- Inner Content Box ==== -->
	<div class="page-content bg-white">
		<!-- Page Heading Box ==== -->
		<div class="page-banner ovbl-dark" style="background-image:url({{Storage::url($data->image)}});">
			<div class="container">
				<div class="page-banner-entry">
					<h1 class="text-white">{{$data->Menu->title}}</h1>
				</div>
			</div>
		</div>
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($data->Menu, $data->Menu->title)}}</li>
					<li>{{$data->title}}</li>
				</ul>
			</div>
		</div>
		<!-- Page Heading Box END ==== -->
		<!-- Page Content Box ==== -->
		<div class="content-block">
			<!-- About Us ==== -->
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row" style="width: 800px;">
						<p>{!! $data->detail !!}</p>
					</div>
					<div class="tagline p-0 pt-20 mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tags">
                                    <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Ticket:</span> {{$data->keywords}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
				</div>
			</div>
        <!-- contact area -->
        <div class="content-block">
			<!-- Portfolio  -->
			<div class="section-area section-sp1 gallery-bx">
				<div class="container">
					<div class="clearfix">
						<h2> Images: <i>{{$data->title}}</i></h2>
						<ul id="masonry" class="ttr-gallery-listing magnific-image row">
						@foreach($image as $rs)
							<li class="action-card col-lg-3 col-md-4 col-sm-6 book">
								<div class="ttr-box portfolio-bx">
									<div class="ttr-media media-ov2 media-effect">
										<a href="javascript:void(0);">
											<img src="{{Storage::url($rs->image)}}" alt="" > 
										</a>
										<div class="ov-box">
											<div class="overlay-icon align-m"> 
												<a href="{{Storage::url($rs->image)}}" class="magnific-anchor" title="Title Come Here">
													<i class="ti-search"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
	</div>
	<!-- Page Content Box END ==== -->

	<button class="back-to-top fa fa-chevron-up"></button>
</div>
@endsection