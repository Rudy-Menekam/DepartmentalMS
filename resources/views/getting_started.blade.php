@extends('layouts.front')

@section('head')
<title>Getting Started | Departmental MS</title>
@endsection


@section('content')


<!-- Breadcromb Area Start -->
@include('partials.breadcrumb', ['page_name'=>'Getting Started'])
<!-- Breadcromb Area End -->

<!-- Feature Area Start -->
<section class="edulab-feature-area section_100">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="feature-left">
				<h2>Getting <span>Started</span></h2>
					<p>From creating courses and assessments to collecting students answers.
					All you need to get started with Departmental MS
					</p>
					<ul>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">Create Courses</a>
						</li>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">Add Course Presentation and Lessons</a>
						</li>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">Create Assessments and Homeworks</a>
						</li>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">Add students</a>
						</li>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">Discussion with other students</a>
						</li>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">Collect students answers</a>
						</li>
						<li>
							<i class="fa fa-check-circle"></i>
							<a href="#">Collect students answers</a>
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

<!-- About Area Start -->
<section class="edulab-about-area section_100">
	<div class="container">
		<div class="row">
			<div class="edulab-section-title">
				<h2>what students will see</h2>
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
						<p>
                      When they enroll in your course (after login with their student account), your students could access your 
                      course content, follow the lessons and complete homeworks and assessments.<br/>
                      They could exchange together using the different forums, and with you in their private board.
						</p>
						<!--<a href="#" class="edulab-btn">Read more</a>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About Edulab Area End -->


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
						<p>Course instructor </p>
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
						<p>Course instructor</p>
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
						<p>Course instructor</p>
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
					<p>Join thousand of instructors </p>
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