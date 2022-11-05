@extends('layout.site')
@section('content')
	<!--//banner-->
	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-text">
				<h3>Tasty Italian Pizza</h3>
				<p>Special Offer to day</p>
				<a href="#" class="btn btn-1 btn-1b">More</a>
			</div>
			<!--welcome-->
			<div class="welcome">
				<h3 class="title">Welcome</h3>
				<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				<div class="welcome-info">
					<div class="col-md-6 welcome-grids">
						<div class="welcome-img">
							<img src="images/img1.jpg" class="img-responsive zoom-img" alt=""/>
						</div>
					</div>
					<div class="col-md-6 welcome-grids">
						<div class="welcome-img">
							<img src="images/img2.jpg" class="img-responsive zoom-img" alt=""/>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae </p>			
			</div>
			<!--//welcome-->
		</div>
	</div>
	<!--//banner-bottom-->
	<!--services-->
	<div class="services">
		<div class="container">
			<h3 class="title">Services</h3>
			<div class="servc-grids">
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span></a>
					</div>
					<h4>Lorem ipsum dolor </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span></a>
					</div>
					<h4>Lorem ipsum dolor </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-fire" aria-hidden="true"></span></a>
					</div>
					<h4>Lorem ipsum dolor </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a>
					</div>
					<h4>Lorem ipsum dolor </h4>
					<p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
	<!-- testimonial -->
	<div class="testimonial">
		<!-- container -->
		<div class="container">
			<h3 class="title">Feedback About us</h3>
			<!-- banner-text Slider starts Here -->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
				// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 4
						$("#slider3").responsiveSlides({
						auto: true,
						pager:true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});	
				});
			</script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="testimonial-grids">
							<div class="testimonial-left">
								<img src="images/t1.jpg" alt="" />
							</div>
							<div class="testimonial-right">
								<h5>Mary Wilson</h5>
								<p><span>"</span> Lorem ipsum dolor sit amet consec tetuer adi piscing elit Praesent vestibulum 
									molestie lacus consec tetuer adi piscing elit Praesent vestibulum molestie lacus <span>"</span>
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="testimonial-grids">
							<div class="testimonial-left">
								<img src="images/t3.jpg" alt="" />
							</div>
							<div class="testimonial-right">
								<h5>Lora  Alance</h5>
								<p><span>"</span> Lorem ipsum dolor sit amet consec tetuer adi piscing elit Praesent vestibulum 
									molestie lacus consec tetuer adi piscing elit Praesent vestibulum molestie lacus <span>"</span>
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="testimonial-grids">
							<div class="testimonial-left">
								<img src="images/t2.jpg" alt="" />
							</div>
							<div class="testimonial-right">
								<h5>David Smith</h5>
								<p><span>"</span> Lorem ipsum dolor sit amet consec tetuer adi piscing elit Praesent vestibulum 
									molestie lacus consec tetuer adi piscing elit Praesent vestibulum molestie lacus <span>"</span>
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //testimonial -->
	<!--footer-->
    @endsection