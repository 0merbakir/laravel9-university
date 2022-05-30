@extends('layouts.frontbase')

@section('title', $data->title)
@section('icon', Storage::url($setting->icon))

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
					<li><a href="{{route('home')}}">Home</a></li>
					<li>{{\App\Http\Controllers\AdminPanel\MenuController::getParentsTree($data->Menu, $data->Menu->title)}}</li>
					<li>{{$data->title}}</li>
				</ul>
			</div>
		</div>
		<div class="content-block">
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<!-- left part start -->
						<div class="col-lg-8">
							<!-- blog grid -->
							<div id="masonry" class="ttr-blog-grid-3 row">
								<div class="content-block">
									<!-- About Us ==== -->
									<div class="section-area section-sp1">
										<div class="container">
										<p style="color: red;">@include('home.messages')</p>
											<h4>{{$data->title}}</h4>
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
																		<img src="{{Storage::url($rs->image)}}" alt="">
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
									<div class="clear" id="comment-list">
										<div class="comments-area" id="comments">
											<h2 class="comments-title">{{$data->comment->count('id')}} Comments</h2>
											<div class="clearfix m-b20">
												<!-- comment list END -->
												@foreach($comment as $rs)
												<ol class="comment-list">
													<li class="comment">
														<div class="comment-body">
															<div class="comment-author vcard"> <img class="avatar photo" src="assets/images/testimonials/pic1.jpg" alt=""> <cite class="fn">{{$rs->user->name}}</cite> <span class="says">says:</span> </div>
															<div class="comment-meta"> <a href="#">{{$rs->created_at}}</a> </div>
															<p>{{$rs->comment}}</p>
															<div class="reply"> <a href="#" class="comment-reply-link">Reply</a> </div>
														</div>
													</li>
												</ol>
												@endforeach
												<!-- comment list END -->
												<!-- Form -->
												<div class="comment-respond" id="respond">
													<h4 class="comment-reply-title" id="reply-title">Leave a Comment <small> <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small> </h4>
													<form class="comment-form" id="commentform" method="post" action="{{route('storecomment')}}">
														@csrf
														<p class="comment-form-email">
															<input class="input" type="hidden" name="content_id" value="{{$data->id}}">
														</p>
														<p class="comment-form-comment">
															<label for="comment">Comment</label>
															<textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
														</p>
														<p class="form-submit">
															@auth
															<input type="submit" value="Submit Comment" class="submit" id="submit" name="submit">
															@else
															<a href="/login"> for your submit review, please login</a>
															@endauth
														</p>

													</form>
												</div>
												<!-- Form -->
											</div>
										</div>
									</div>

									<button class="back-to-top fa fa-chevron-up"></button>
								</div>
							</div>
							<!-- blog grid END -->
						</div>
						<div class="col-lg-4 sticky-top">
							<aside class="side-bar sticky-top">
								<div class="widget-post-bx">
									<img src="{{Storage::url($data->image)}}" alt="image">
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection