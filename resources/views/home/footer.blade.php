	<!-- Footer ==== -->
	<footer>
		<div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<a href="index.html"><img width="500" height="600" src="{{asset('assets')}}/images/logo-white.png" alt="" /></a>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="{{$setting->facebook}}" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="{{$setting->twitter}}" class="btn-link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="{{$setting->linkedin}}" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="{{$setting->instagram}}" class="btn-link"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
						<div class="widget">
							<h5 class="footer-title">Veritas</h5>
							<p class="text-capitalize m-b20">Not everyone can truly succeed in everything. But success only comes with self-management and determination.</p>
							<div class="subscribe-form m-b20">
								
							</div>
						</div>
					</div>
					<div class="col-4 col-lg-4 col-md-4 col-sm-4">
						<div class="row">
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title"> </h5>
									<ul>
										<li><a href="/">Home</a></li>
										<li><a href="/contact">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title"> </h5>
									<ul>
										<li><a href="/about">About Us</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title"> </h5>
									<ul>
										<li><a href="/faq">FAQs</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
						<div class="widget widget_gallery gallery-grid-4">
							<h5 class="footer-title">Our Gallery</h5>
							<ul class="magnific-image">
								@foreach($gallery as $rs)
								<li><a href="{{Storage::url($rs->image)}}" class="magnific-anchor"><img src="{{Storage::url($rs->image)}}" alt=""></a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank">Created By ??mer BAKIR</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer END ==== -->
	<button class="back-to-top fa fa-chevron-up"></button>
	</div>
	<button class="back-to-top fa fa-chevron-up"></button>
	</div>
	<!-- External JavaScripts -->
	<script src="{{asset('assets')}}/js/jquery.min.js"></script>
	<script src="{{asset('assets')}}/vendors/bootstrap/js/popper.min.js"></script>
	<script src="{{asset('assets')}}/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('assets')}}/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="{{asset('assets')}}/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="{{asset('assets')}}/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="{{asset('assets')}}/vendors/counter/waypoints-min.js"></script>
	<script src="{{asset('assets')}}/vendors/counter/counterup.min.js"></script>
	<script src="{{asset('assets')}}/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="{{asset('assets')}}/vendors/masonry/masonry.js"></script>
	<script src="{{asset('assets')}}/vendors/masonry/filter.js"></script>
	<script src="{{asset('assets')}}/vendors/owl-carousel/owl.carousel.js"></script>
	<script src="{{asset('assets')}}/js/functions.js"></script>
	<script src="{{asset('assets')}}/js/contact.js"></script>
	<!-- Revolution JavaScripts Files -->
	<script src="{{asset('assets')}}/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="{{asset('assets')}}/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script src="{{asset('assets')}}/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="{{asset('assets')}}/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="{{asset('assets')}}/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="{{asset('assets')}}/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="{{asset('assets')}}/vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="{{asset('assets')}}/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="{{asset('assets')}}/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="{{asset('assets')}}/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="{{asset('assets')}}/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script>
		jQuery(document).ready(function() {
			var ttrevapi;
			var tpj = jQuery;
			if (tpj("#rev_slider_486_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_486_1");
			} else {
				ttrevapi = tpj("#rev_slider_486_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "{{asset('assets')}}/vendors/revolution/js/",
					sliderLayout: "fullwidth",
					dottedOverlay: "none",
					delay: 9000,
					navigation: {
						keyboardNavigation: "on",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						mouseScrollReverse: "default",
						onHoverStop: "on",
						touch: {
							touchenabled: "on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						arrows: {
							style: "uranus",
							enable: true,
							hide_onmobile: false,
							hide_onleave: false,
							tmp: '',
							left: {
								h_align: "left",
								v_align: "center",
								h_offset: 10,
								v_offset: 0
							},
							right: {
								h_align: "right",
								v_align: "center",
								h_offset: 10,
								v_offset: 0
							}
						},

					},
					viewPort: {
						enable: true,
						outof: "pause",
						visible_area: "80%",
						presize: false
					},
					responsiveLevels: [1240, 1024, 778, 480],
					visibilityLevels: [1240, 1024, 778, 480],
					gridwidth: [1240, 1024, 778, 480],
					gridheight: [768, 600, 600, 600],
					lazyType: "none",
					parallax: {
						type: "scroll",
						origo: "enterpoint",
						speed: 400,
						levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55],
						type: "scroll",
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		});
	</script>