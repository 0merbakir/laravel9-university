<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
	<header class="header rs-nav header-transparent">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
							<li><a href=""><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
						</ul>
					</div>
					<div class="topbar-right">
						<ul>
							<li>
								<select class="header-lang-bx">
									<option data-icon="flag flag-uk">English UK</option>
									<option data-icon="flag flag-us">English US</option>
								</select>
							</li>
							<li><a href="login.html">Login</a></li>
							<li><a href="register.html">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sticky-header navbar-expand-lg">
			<div class="menu-bar clearfix">
				<div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
						<a href="{{route('home')}}"><img src="{{asset('assets')}}/images/logo-white.png" alt="" style="margin-right:2px ;"></a>
					</div>
					<!-- Mobile Nav Button ==== -->
					<button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
					<div class="secondary-menu">
						<div class="secondary-inner">
							<ul>
							<li><a href="{{$setting->facebook}}" class="btn-link"><i class="fa fa-facebook"></i></a></li>
							<li><a href="{{$setting->twitter}}" class="btn-link"><i class="fa fa-twitter"></i></a></li>
							<li><a href="{{$setting->linkedin}}" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="{{$setting->instagram}}" class="btn-link"><i class="fa fa-instagram"></i></a></li>
								<!-- Search Button ==== -->
								<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
							</ul>
						</div>
					</div>
					<!-- Search Box ==== -->
					<div class="nav-search-bar">
						<form action="#">
							<input name="search" value="" type="text" class="form-control" placeholder="Type to search">
							<span><i class="ti-search"></i></span>
						</form>
						<span id="search-remove"><i class="ti-close"></i></span>
					</div>
					<!-- Navigation Menu ==== -->
					<div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						@php
						$mainMenus = \App\Http\Controllers\HomeController::mainMenuList()
						@endphp

						<div class="menu-logo">
							<a href="index.html"><img src="{{asset('assets')}}/images/logo.png" alt=""></a>
						</div>
						<ul class="nav navbar-nav">
							<li><a href="/">Home</a></li>
							@foreach($mainMenus as $rs)
							<li><a href="{{route('menucontent', ['id'=> $rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}<i class="fa fa-chevron-down"></i></a>
								@if(count($rs->children))
								<ul class="sub-menu">
								@include('home.menutree', ['children'=> $rs->children])
								</ul>
								@endif
							</li>
							@endforeach
							<li><a href="{{route('aboutus')}}">About<i></i></a>
							</li>
							<li><a href="{{route('faq')}}">FAQ<i></i></a>
							</li>
							<li><a href="{{route('contact')}}">Contact<i></i></a>
							</li>
						</ul>
						<div class="nav-social-link">
							<a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a>
							<a href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a>
							<a href="{{$setting->linkedin}}"><i class="fa fa-linkedin"></i></a>
							<a href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
					<!-- Navigation Menu END ==== -->
				</div>
			</div>
		</div>
	</header>
	<!-- Header Top END ==== -->