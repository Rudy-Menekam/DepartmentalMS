@extends('layouts.front')

@section('head')
<title>About | Departmental MS</title>
@endsection


@section('content')


<!-- Breadcromb Area Start -->
@include('partials.breadcrumb', ['page_name'=>'About Us'])
<!-- Breadcromb Area End -->

<!-- About Area Start -->
<section class="edulab-about-area section_100">
	<div class="container">
		<div class="row">
			<div class="edulab-section-title">
				<h2>who <span>we are</span></h2>
				<div class="heading-line"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="edulab-about-left">
					<div class="edulab-about-img">
						<img src="img/about-shadow.jpg" alt="About Image 1" />
						<div class="edulab-about-img-shadow">
							<img src="img/about-shadow.jpg" alt="About Image 2" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="edulab-about-right">
					<div class="edulab-about-text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
						<a href="#" class="edulab-btn">Read more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About Edulab Area End -->


<!-- Feature Area Start -->
<section class="edulab-feature-area section_100">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="feature-left">
					<h3>learning at edulab</h3>
					<p>Aliquam pulvinar pellentesque purus, nec condimentum nibh. Aenean dapibus iaculis odio id vestibulum. Nam at justo ante. Aenean hendrerit gravida ligula, id lacinia.</p>
					<ul>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">90% lessons are video</a>
						</li>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">Compatible with Ubermenu</a>
						</li>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">Compatible with Many Popular Plugins</a>
						</li>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">Discussion with other students</a>
						</li>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">Displaying clear curriculum</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="feature-right">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" width="816" height="459" src="https://www.youtube.com/embed/HndV87XpkWg" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Feature Area End -->


<!-- Education Staff Area Start -->
<section class="edulab-education-staff-area section_100">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="edulab-section-title">
					<h2>Our <span>Education staff</span></h2>
					<div class="heading-line"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="single-staff">
					<div class="top-line"></div>
					<div class="staff-img">
						<img src="img/member-1.jpg" alt="Member 1" />
					</div>
					<div class="staff-text">
						<h3>jhon smith</h3>
						<p class="staff-post-title">Web Developer</p>
						<p>Ipsum saepe ex nesciunt, quidem quis illo cupiditate.Facere minus velit voluptate accusamus hic! </p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-staff">
					<div class="top-line"></div>
					<div class="staff-img">
						<img src="img/member-3.jpg" alt="Member 1" />
					</div>
					<div class="staff-text">
						<h3>Jabin kane</h3>
						<p class="staff-post-title">Web Developer</p>
						<p>Ipsum saepe ex nesciunt, quidem quis illo cupiditate.Facere minus velit voluptate accusamus hic! </p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="single-staff">
					<div class="top-line"></div>
					<div class="staff-img">
						<img src="img/member-4.jpg" alt="Member 1" />
					</div>
					<div class="staff-text">
						<h3>John doe</h3>
						<p class="staff-post-title">Web Developer</p>
						<p>Ipsum saepe ex nesciunt, quidem quis illo cupiditate.Facere minus velit voluptate accusamus hic! </p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Education Staff Area End -->


<!-- Quotes Area Start -->
<section class="edulab-quotes-area section_25">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="quotes-left">
					<h2> become an instructor</h2>
					<p>Join thousand of instructors and earn money hassle free!</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="quotes-right">
					<a href="#">get Started Now</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Quotes Area End -->

@endsection