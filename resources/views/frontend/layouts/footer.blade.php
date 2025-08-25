<!-- Start Footer Area -->
<footer class="footer bg-dark text-light pt-5">
	<div class="footer-top section pb-4">
		<div class="container">
			<div class="row">
				<!-- About Widget -->
				<div class="col-lg-4 col-md-6 col-12 mb-4">
					<div class="single-footer about">
						<!--
						<div class="logo mb-3">
							<a href="index.html"><img src="{{asset('backend/img/avatar.png')}}" alt="#" style="height: 60px;"></a>
						</div>
						@php $settings = DB::table('settings')->get(); @endphp
						<p class="text">@foreach($settings as $data) {{$data->short_des}} @endforeach</p>-->
						<p style="color:white;">Our eCommerce platform is built to meet these demands with a sleek, fast, and feature-rich online shopping 
							environment tailored for businesses and customers alike. Whether you're browsing through thousands of products or 
							managing a store with rich inventory,</p>
						<p class="call mt-3">
							<i class="fa fa-phone"></i> Got Question? Call us 24/7<br>
							<span><a href="tel:123456789" class="text-light" >@foreach($settings as $data) {{$data->phone}} @endforeach</a></span>
						</p>
					</div>
				</div>

				<!-- Information Links -->
				<div class="col-lg-2 col-md-6 col-12 mb-4"">
					<div class="single-footer links">
						<h4 class="mb-3">Information</h4>
						<ul class="list-unstyled">
							<li><i class="fa fa-angle-right mr-2"></i><a href="#">About Us</a></li>
							<li><i class="fa fa-angle-right mr-2"></i><a href="#">FAQ</a></li>
							<li><i class="fa fa-angle-right mr-2"></i><a href="#">Terms & Conditions</a></li>
							<li><i class="fa fa-angle-right mr-2"></i><a href="#">Contact Us</a></li>
							<li><i class="fa fa-angle-right mr-2"></i><a href="#">Help</a></li>
						</ul>
					</div>
				</div>

				<!-- Customer Service -->
				<div class="col-lg-2 col-md-6 col-12 mb-4">
					<div class="single-footer links">
						<h4 class="mb-3">Customer Service</h4>
						<ul class="list-unstyled">
							<li><i class="fa fa-angle-right mr-2"></i><a href="#">Payment Methods</a></li>
							<li><i class="fa fa-angle-right mr-2"></i><a href="#">Money-back</a></li>
							<li><i class="fa fa-angle-right mr-2"></i><a href="#">Returns</a></li>
							<li><i class="fa fa-angle-right mr-2"></i><a href="#">Shipping</a></li>
							<li><i class="fa fa-angle-right mr-2"></i><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>

				<!-- Contact & Social -->
				<div class="col-lg-4 col-md-6 col-12 mb-4">
					<div class="single-footer social">
						<h4 class="mb-3">Get In Touch</h4>
						<ul class="list-unstyled">
							<li><i class="fa fa-map-marker mr-2"></i>@foreach($settings as $data) {{$data->address}} @endforeach</li>
							<li><i class="fa fa-envelope mr-2"></i>@foreach($settings as $data) {{$data->email}} @endforeach</li></br>
							<li><i class="fa fa-phone mr-2"></i>@foreach($settings as $data) {{$data->phone}} @endforeach</li>
						</ul>

						<h5 class="mt-3">Follow Us</h5> </br>
						<div>
							<a class="fa fa-facebook" href="#"></a>
							<a class="fa fa-twitter" href="#"></a>
							<a class="fa fa-instagram" href="#"></a>
							<a class="fa fa-linkedin" href="#"></a>
						</div>
					</div>
				</div>
				<!-- End Social -->
			</div>
		</div>
	</div>

	<!-- Copyright Section -->
	<div class="copyright bg-secondary text-center py-3">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-12 mb-2 mb-lg-0 text-lg-left">
					<p class="mb-0">© {{date('Y')}} E-SHOPPING - All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 col-12 text-lg-right">
					<img src="{{asset('backend/img/payments.png')}}" alt="#" style="max-height: 30px;">
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- /End Footer Area -->

<style>
	.copyright{
		margin-top:50px;
	}
	.footer {
	background-color: #222;
	color: #ccc;
	font-size: 15px;
	
}

.footer a {
	color: #ccc;
	transition: 0.3s ease;
	text-decoration: none;
}

.footer a:hover {
	color: #f7941d;
}

.footer h4 {
	color: #fff;
	font-weight: 600;
	font-size: 18px;
	margin-bottom: 15px;
}

.footer .fa {
	margin-right: 8px;
	color: #f7941d;
}

.footer .fa-facebook, .footer .fa-twitter, .footer .fa-instagram, .footer .fa-linkedin {
	background: #444;
	padding: 10px;
	margin-right: 5px;
	border-radius: 50%;
	font-size: 16px;
	width: 36px;
	text-align: center;
	transition: 0.3s;
}

.footer .fa-facebook:hover { background: #3B5998; color: white; }
.footer .fa-twitter:hover { background: #55ACEE; color: white; }
.footer .fa-instagram:hover { background: #E1306C; color: white; }
.footer .fa-linkedin:hover { background: #0077B5; color: white; }

</style>
 
	<!-- Jquery -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('frontend/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('frontend/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('frontend/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
	{{-- Isotope --}}
	<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('frontend/js/easing.js')}}"></script>

	<!-- Active JS -->
	<script src="{{asset('frontend/js/active.js')}}"></script>

	@stack('scripts')
	<script>
		setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");


				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
	  </script>