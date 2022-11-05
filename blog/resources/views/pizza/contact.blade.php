@extends('layout.site')
@section('content')
	<!--//banner-->
	<!-- contact -->
	<div class="contact-top">
		<!-- container -->
		<div class="container">
			<div class="contact-info">
				<h3 class="title">How to find Us</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipiscing elit in id malesuada lectus aenean convallis interdum gravida donec faucibus bibendum tortor vel facilisis.</p>
			</div>
			<div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15550.640322310655!2d36.22589433222831!3d49.99450661029229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a09f63ab0f8b%3A0x2d4c18681aa4be0a!2z0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1610317911069!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>			</div>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left">
					<h3 class="title">Address</h3>
					<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
					<h4>Headquarters</h4>
					<p>123 T. Globel Place.
						<span>CG 09-123</span>
						Italy, Ba. 4567
					</p>
					<h4>Get In Touch</h4>
					<p>Telephone: +1 234 567 9871
						<span>FAX: +1 234 567 9871</span>
						E-mail: <a href="mailto:info@example.com">mail@example.com</a>
					</p>
				</div>
				<div class="col-md-6 contact-form">
					<form method = 'post'>
						<input type="text" placeholder="Name" required="">
						<input type="text" placeholder="Email" required="">
						<input type="text" placeholder="Subject" required="">
						<textarea placeholder="Message" required=""></textarea>
						<input type="submit" value="SEND">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //contact -->
	<!--footer-->

    @endsection