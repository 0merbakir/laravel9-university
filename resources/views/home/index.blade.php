@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
<!-- Content -->
<div class="page-content bg-white">
	<!-- Main Slider -->
	<div class="rev-slider">
		<div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
			<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
			<div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
				<ul>
					<!-- SLIDE  -->
					@foreach($sliderdata as $rs)
					<li data-transition="parallaxvertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="error-404.html" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="A STUDY ON HAPPINESS" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="Science says that Women are generally happier">
						<!-- MAIN IMAGE -->
						<img src="{{Storage::url($rs->image)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina />

						<!-- LAYER NR. 1 -->
						<div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption Newspaper-Title   tp-resizeme" id="slide-100-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['250','250','250','240']" data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']" data-width="full" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
							Welcome To Harvard
						</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption Newspaper-Subtitle   tp-resizeme" id="slide-100-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['210','210','210','210']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
							<i>Veritas</i>
						</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption Newspaper-Subtitle   tp-resizeme" id="slide-100-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['320','320','320','290']" data-width="['800','800','700','420']" data-height="['100','100','100','120']" data-whitespace="unset" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
							Not everyone can truly succeed in everything. But success only comes with self-management and determination.
						</div>
						<!-- LAYER NR. 4 -->
						<div class="tp-caption Newspaper-Button rev-btn " id="slide-100-layer-5" data-x="['center','center','center','center']" data-hoffset="['90','80','75','90']" data-y="['top','top','top','top']" data-voffset="['400','400','400','420']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[12,12,12,12]" data-paddingright="[30,35,35,15]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[30,35,35,15]" style="z-index: 8; white-space: normal;  box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px; margin-right:5px;">
							<p><a href="{{route('contact')}}" style="color:#ffffff !important;">CONTACT US</a></p>
						</div>
						<div class="tp-caption Newspaper-Button rev-btn" id="slide-100-layer-6" data-x="['center','center','center','center']" data-hoffset="['-90','-80','-75','-90']" data-y="['top','top','top','top']" data-voffset="['400','400','400','420']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[12,12,12,12]" data-paddingright="[30,35,35,15]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[30,35,35,15]" style="z-index: 8; white-space: normal;  color:#ffffff !important; box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;">
							<p><a href="{{route('aboutus')}}" style="color:#ffffff !important;">READ MORE</a></p>
						</div>
					</li>
					@endforeach
					<!-- SLIDE  -->
				</ul>
			</div><!-- END REVOLUTION SLIDER -->
		</div>
	</div>
	<!-- Main Slider -->
	<div class="content-block">

		<!-- Our Services -->
		<div class="section-area content-inner service-info-bx">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="service-bx">
							<div class="action-box">
								<img src="{{asset('assets')}}/images/our-services/pic1.jpg" alt="">
							</div>
							<div class="info-bx text-center">
								<div class="feature-box-sm radius bg-white">
									<i class="fa fa-bank text-primary"></i>
								</div>
								<h4><a href="#">Learn More About Harvard</a></h4>
								<a href="/about" class="btn radius-xl">View More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="service-bx">
							<div class="action-box">
								<img src="{{asset('assets')}}/images/our-services/pic2.jpg" alt="">
							</div>
							<div class="info-bx text-center">
								<div class="feature-box-sm radius bg-white">
									<i class="fa fa-book text-primary"></i>
								</div>
								<h4><a href="#">Frequently asked Questions</a></h4>
								<a href="/faq" class="btn radius-xl">View More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="service-bx m-b0">
							<div class="action-box">
								<img src="{{asset('assets')}}/images/our-services/pic3.jpg" alt="">
							</div>
							<div class="info-bx text-center">
								<div class="feature-box-sm radius bg-white">
									<i class="fa fa-file-text-o text-primary"></i>
								</div>
								<h4><a href="#">Contact Us</a></h4>
								<a href="/contact" class="btn radius-xl">View More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Our Services END -->

		<!-- Popular Courses -->
		<div class="section-area section-sp2 popular-courses-bx">
			<div class="container">
				<div class="row">
					<div class="col-md-12 heading-bx left">
						<h2 class="title-head">Online<span> Courses</span></h2>
						<p>In-person, blended, and online courses</p>
					</div>
				</div>
				<div class="row">
					<div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
						@foreach($courses as $rs)
						<div class="item">
							<div class="cours-bx">
								<div class="action-box">
									<img src="{{Storage::url($rs->image)}}" alt="">
									<a href="{{route('content', ['id' =>$rs->id])}}" class="btn">Read More</a>
								</div>
								<div class="info-bx text-center">
									<h5><a href="#">{{$rs->title}}</a></h5>
									<span>{{$rs->description}}</span>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<!-- Popular Courses END -->
		<div class="section-area section-sp2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center heading-bx">
						<h2 class="title-head m-b0">Upcoming <span>Events</span></h2>
						<p class="m-b0">Upcoming Education Events To Feed Brain. </p>
					</div>
				</div>
				<div class="row">
					<div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">
						@foreach($events as $rs)
						<div class="item">
							<div class="event-bx">
								<div class="action-box">
									<img src="{{Storage::url($rs->image)}}" alt="">
								</div>
								<div class="info-bx d-flex">
									<div class="event-info">
										<h4 class="event-title"><a href="#">{{$rs->title}}</a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> {{$rs->created_at}}/a></li>
											<li><a href="#"><i class="fa fa-map-marker"></i></a></li>
										</ul>
										<p>{{$rs->description}}</p>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="text-center">
					<a href="{{route('content', ['id' =>$rs->id])}}" class="btn">View All Event</a>
				</div>
			</div>
		</div>

		<!-- Testimonials -->
		<div class="section-area section-sp2 bg-fix ovbl-dark" style="background-image:url(assets/images/background/bg1.jpg);">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-white heading-bx left">
						<h2 class="title-head text-uppercase">{{$setting->title}} <span>Announcements</span></h2>
					</div>
				</div>
				<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
					@foreach($announcements as $rs)
					<div class="item">
						<div class="testimonial-bx">
							<div class="testimonial-thumb">
								<img src="{{Storage::url($rs->image)}}" alt="">
							</div>
							<div class="testimonial-info">
								<a href="{{route('content', ['id' =>$rs->id])}}">
									<h5 class="name">{{{$rs->title}}}</h5>
								</a>
							</div>
							<div class="testimonial-content">
								<a href="{{route('content', ['id' =>$rs->id])}}">
									<p>{{{$rs->description}}}</p>
								</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="text-center">
				<a href="{{route('content', ['id' =>$rs->id])}}" class="btn">View All Announcements</a>
			</div>
			</div>

		</div>
		<!-- Testimonials END -->

		<!-- Recent News -->
		<div class="section-area section-sp2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 heading-bx left">
						<h2 class="title-head">Recent <span>News</span></h2>
						<p>The Harvard Gazette is the official news website for Harvard University. It covers campus life and times..</p>
					</div>
				</div>
				<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
					@foreach($news as $rs)
					<div class="item">
						<div class="recent-news">
							<div class="action-box">
								<img src="{{Storage::url($rs->image)}}" alt="news image">
							</div>
							<div class="info-bx">
								<ul class="media-post">
									<li><i class="fa fa-calendar"></i>{{$rs->created_at}}</li>
									<li><i class="fa fa-user"></i>Admin</li>
								</ul>
								<h5 class="post-title"><a href="{{route('content', ['id' =>$rs->id])}}">{{$rs->description}}</a></h5>
								<div class="post-extra">
									<a href="{{route('content', ['id' =>$rs->id])}}" class="btn-link">READ MORE</a>
									<a href="{{route('content', ['id' =>$rs->id])}}" class="comments-bx"><i class="fa fa-comments-o"></i>comments</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- Recent News End -->

	</div>
	<!-- contact area END -->
</div>
<!-- Content END-->
@endsection