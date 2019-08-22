<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Departmental MS</title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>

    <!-- Header Top Area Start -->
   <!-- <div class="edulab-header-top-area section_15">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="edulab-header-top-left">
                        <p>
                            <a href="#">
                             <i class="fa fa-envelope-o"></i>
                                example@gmail.com
                            </a>
                        </p>
                        <p>
                            <a href="#">
                                <i class="fa fa-phone"></i>
                                67XXXXXX
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="edulab-header-top-middle">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="edulab-header-top-right">
                        <a href="{{ route('auth.register') }}" class="register">register</a>
                        <a href="{{ route('auth.login') }}" class="signin">sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Header Top Area End -->
    
    
    <!-- Main Header Area Start -->
    <header class="edulab-main-header-area sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="edulab-logo section_25">
                        <a href="index.html">
                            <h1>Departmental<span>MS</span></h1>
                        </a>
                    </div>
                    <!-- Responsive Menu Start -->
                    <div class="edulab-responsive-menu"></div>
                    <!-- Responsive Menu End -->
                </div>
                <div class="col-md-9">
                    <div class="edulab-mainmenu">
                   @include('partials.front-nav')
                    </div>
                    <div class="edulab-header-search-bar">
                        <form>
                            <input placeholder="Search..." type="search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Header Area End -->
    
    
    <!-- Slider Area Start -->
    <section class="edulab-slider-area">
        <div class="edulab-slide">
            <div class="edulab-main-slide slide-item-1">
                <div class="edulab-main-caption">
                    <div class="edulab-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2>University of Buea</h2>
                                    <p>Departmental MS</p>
                                    <a href="{{ route('getting_started') }}" class="edulab-btn">Getting Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edulab-main-slide slide-item-2">
                <div class="edulab-main-caption">
                    <div class="edulab-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2>University of Buea</h2>
                                    <p>Departmental MS</p>
                                    <a href="{{ route('getting_started') }}" class="edulab-btn">Getting Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    
    
    <!-- Choose Courses Area Start -->
    <section class="edulab-choose-courses-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="edulab-section-title">
                        <h2>choose <span>your courses</span></h2>
                        <div class="heading-line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="edulab-ch-grid">
                    <div class="col-sm-4">
                        <div class="edulab-ch">
                            <div class="edulab-ch-item">
                                <div class="edulab-ch-info">
                                    <h5>Language</h5>
                                    <p>by jhon smith</p>
                                </div>
                                <div class="ch-thumb ch-img-1">
                                    <i class="fa fa-check-square-o"></i>
                                </div>
                            </div>
                            <p>Language</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="edulab-ch">
                            <div class="edulab-ch-item">
                                <div class="edulab-ch-info">
                                    <h5>Trending</h5>
                                    <p>by jhon smith</p>
                                </div>
                                <div class="ch-thumb ch-img-1">
                                    <i class="fa fa-file-powerpoint-o"></i>
                                </div>
                            </div>
                            <p>Trending</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="edulab-ch">
                            <div class="edulab-ch-item">
                                <div class="edulab-ch-info">
                                    <h5>Business</h5>
                                    <p>by Jane Taylor</p>
                                </div>
                                <div class="ch-thumb ch-img-1">
                                    <i class="fa fa-diamond "></i>
                                </div>
                            </div>
                            <p>Business</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="edulab-ch">
                            <div class="edulab-ch-item">
                                <div class="edulab-ch-info">
                                    <h5>Economics</h5>
                                    <p>by Jane Taylor</p>
                                </div>
                                <div class="ch-thumb ch-img-1">
                                    <i class="fa fa-support "></i>
                                </div>
                            </div>
                            <p>Economics</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="edulab-ch">
                            <div class="edulab-ch-item">
                                <div class="edulab-ch-info">
                                    <h5>Agriculture</h5>
                                    <p>by jhon smith</p>
                                </div>
                                <div class="ch-thumb ch-img-1">
                                    <i class="fa fa-globe "></i>
                                </div>
                            </div>
                            <p>Agriculture</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="edulab-ch">
                            <div class="edulab-ch-item">
                                <div class="edulab-ch-info">
                                    
                                </div>
                                <div class="ch-thumb ch-img-1">
                                    <i class="fa fa-users "></i>
                                </div>
                            </div>
                            <p>Science</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose Courses Area End -->
        
    <!-- Important Facts Area Start -->
   <!-- <section class="edulab-important-facts-area section_100">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="edulab-section-title-overlay">
                        <h2>some <span> Important facts</span></h2>
                        <div class="heading-line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <h2 class="counter">112</h2>
                            <span>Certified Teachers</span>
                        </li>
                        <li>
                            <h2 class="counter">282673</h2>
                            <span>Students Enrolled</span>
                        </li>
                        <li>
                            <h2 class="counter">599666</h2>
                            <span>Passing to Universities</span>
                        </li>
                        <li>
                            <h2 class="counter">1200</h2>
                            <span class="reponsive-no">Satisfied Parents</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <-- Important Facts Area End -->
    
    
    <!-- Popular Courses Area Start -->
    <!--<section class="edulab-popular-courses-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="edulab-section-title">
                        <h2>popular <span> courses</span></h2>
                        <div class="heading-line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="courses-slider">
                        <div class="courses-item">
                            <div class="edulab-courses-slide-img">
                                <img src="img/course-1.jpg" alt="Courses Item" />
                                <div class="course-price">
                                    <p>$120</p>
                                </div>
                                <div class="course-overlay">
                                    <a href="single-course.html" class="edulab-btn">join now</a>
                                </div>
                            </div>
                            <div class="courses-text">
                                <h3><a href="single-course.html">Web Design</a></h3>
                                <div class="edulab-course-rating">
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star-o"></i></p>
                                </div>
                                <p>Do you learn web design?If you want, You have to join this course now.</p>
                                <div class="course-schedule">
                                    <ul>
                                        <li>1 year<span>course</span></li>
                                        <li>9:00 - 11:00 <span>class duration</span></li>
                                        <li>25<span>class size</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="courses-item">
                            <div class="edulab-courses-slide-img">
                                <img src="img/course-2.jpeg" alt="Courses Item" />
                                <div class="course-price">
                                    <p>$120</p>
                                </div>
                                <div class="course-overlay">
                                    <a href="single-course.html" class="edulab-btn">join now</a>
                                </div>
                            </div>
                            <div class="courses-text">
                                <h3><a href="single-course.html">App Development</a></h3>
                                <div class="edulab-course-rating">
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star-o"></i></p>
                                </div>
                                <p>Do you learn web design?If you want, You have to join this course now.</p>
                                <div class="course-schedule">
                                    <ul>
                                        <li>1 year<span>course</span></li>
                                        <li>9:00 - 11:00 <span>class duration</span></li>
                                        <li>25<span>class size</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="courses-item">
                            <div class="edulab-courses-slide-img">
                                <img src="img/course-3.jpg" alt="Courses Item" />
                                <div class="course-price">
                                    <p>$120</p>
                                </div>
                                <div class="course-overlay">
                                    <a href="single-course.html" class="edulab-btn">join now</a>
                                </div>
                            </div>
                            <div class="courses-text">
                                <h3><a href="single-course.html">Web development</a></h3>
                                <div class="edulab-course-rating">
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star"></i></p>
                                    <p><i class="fa fa-star-o"></i></p>
                                </div>
                                <p>Do you learn web design?If you want, You have to join this course now.</p>
                                <div class="course-schedule">
                                    <ul>
                                        <li>1 year<span>course</span></li>
                                        <li>9:00 - 11:00 <span>class duration</span></li>
                                        <li>25<span>class size</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="courses-item">
                            <div class="edulab-courses-slide-img">
                                <img src="img/course-4.jpeg" alt="Courses Item" />
                                <div class="course-price">
                                    <p>$120</p>
                                </div>
                                <div class="course-overlay">
                                    <a href="single-course.html" class="edulab-btn">join now</a>
                                </div>
                            </div>
                            <div class="courses-text">
                                <h3><a href="single-course.html">Softwere</a></h3>
                                <div class="edulab-course-rating">
                                 <p><i class="fa fa-star"></i></p>
                                 <p><i class="fa fa-star"></i></p>
                                 <p><i class="fa fa-star"></i></p>
                                 <p><i class="fa fa-star"></i></p>
                                 <p><i class="fa fa-star-o"></i></p>
                             </div>
                             <p>Do you learn web design?If you want, You have to join this course now.</p>
                             <div class="course-schedule">
                                <ul>
                                    <li>1 year<span>course</span></li>
                                    <li>9:00 - 11:00 <span>class duration</span></li>
                                    <li>25<span>class size</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Courses Area End -->


<!-- About Area Start -->
<!--<section class="edulab-about-area section_100">
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


<!-- Pricing Area Start -->
<!--<section class="edulab-pricing-area section_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="edulab-section-title">
                    <h2>pricing<span> we offered</span></h2>
                    <div class="heading-line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-pricing-table">
                    <div class="pricing-header">
                        <div class="pricing-heading">
                            <p>free</p>
                        </div>
                        <div class="price-value">
                            <p>$<span>0</span><span class="month">/mo</span></p>
                        </div>
                    </div>
                    <div class="pricing-desc">
                        <ul>
                            <li><strong>30 days</strong>Free trial</li>
                            <li><strong>limited</strong>Courses</li>
                            <li><strong>free</strong>30 Lessons</li>
                            <li><strong>no</strong>Exam</li>
                            <li><strong>no</strong>Tutorial</li>
                            <li><strong>limited</strong>Registered Users</li>
                        </ul>
                    </div>
                    <div class="pricing-signup">
                        <a href="#" class="edulab-btn">start course</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-pricing-table">
                    <div class="pricing-header">
                        <div class="pricing-heading">
                            <p>Standard</p>
                        </div>
                        <div class="price-value">
                            <p>$<span>12.00</span><span class="month">/mo</span></p>
                        </div>
                    </div>
                    <div class="pricing-desc">
                        <ul>
                            <li><strong>6 months</strong> access</li>
                            <li><strong>30</strong>Courses</li>
                            <li><strong>standard</strong>30 Lessons</li>
                            <li><strong>05</strong>Exam</li>
                            <li><strong>20</strong>Tutorial</li>
                            <li><strong>limited</strong>Registered Users</li>
                        </ul>
                    </div>
                    <div class="pricing-signup">
                        <a href="#" class="edulab-btn">start course</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-pricing-table">
                    <div class="pricing-header">
                        <div class="pricing-heading">
                            <p>Premium</p>
                        </div>
                        <div class="price-value">
                            <p>$<span>25.50</span><span class="month">/mo</span></p>
                        </div>
                    </div>
                    <div class="pricing-desc">
                        <ul>
                            <li><strong>1 year</strong>access</li>
                            <li><strong>50</strong>Courses</li>
                            <li><strong>standard</strong>120 Lessons</li>
                            <li><strong>10</strong>Exam</li>
                            <li><strong>30</strong>Tutorial</li>
                            <li><strong>limited</strong>Registered Users</li>
                        </ul>
                    </div>
                    <div class="pricing-signup">
                        <a href="#" class="edulab-btn">start course</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-pricing-table">
                    <div class="pricing-header">
                        <div class="pricing-heading">
                            <p>Extra</p>
                        </div>
                        <div class="price-value">
                            <p>$<span>47.60</span><span class="month">/mo</span></p>
                        </div>
                    </div>
                    <div class="pricing-desc">
                     <ul>
                        <li><strong>2 years</strong>access</li>
                        <li><strong>60</strong>Courses</li>
                        <li><strong>standard</strong>250 Lessons</li>
                        <li><strong>20</strong>Exam</li>
                        <li><strong>40</strong>Tutorial</li>
                        <li><strong>unlimited</strong>Registered Users</li>
                    </ul>
                </div>
                <div class="pricing-signup">
                    <a href="#" class="edulab-btn">start course</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Pricing Area End -->


<!-- Testimonial Area Start -->
<!--<section class="edulab-people-say-area section_100">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="client-say">
                <div class="item_4">
                    <div class="single_item">
                        <i class="fa fa-trophy"></i>
                        <div class="people-text">
                            <h4>what <span>people say</span></h4>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.dolor sit amet"</p>
                            <h5>by <span>JABIN KANE</span></h5>
                        </div>
                    </div>
                </div> 
                <div class="item_4">
                    <div class="single_item">
                        <i class="fa fa-trophy"></i>
                        <div class="people-text">
                            <h4>what <span>people say</span></h4>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.dolor sit amet"</p>
                            <h5>by <span>JABIN KANE</span></h5>
                        </div>
                    </div>
                </div> 
                <div class="item_4">
                    <div class="single_item">
                        <i class="fa fa-trophy"></i>
                        <div class="people-text">
                            <h4>what <span>people say</span></h4>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.dolor sit amet"</p>
                            <h5>by <span>JABIN KANE</span></h5>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area End -->


<!-- Education Staff Area Start -->
<!--<section class="edulab-education-staff-area section_100">
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
                        <h3><a href="single-team.html">jhon smith</a></h3>
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
                        <h3><a href="single-team.html">Jabin kane</a></h3>
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
                        <h3><a href="single-team.html">John doe</a></h3>
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


<!-- Education News Area Start -->
<section class="edulab-education-news-area section_100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="edulab-section-title">
                    <h2>Latest<span>Posts</span></h2>
                    <div class="heading-line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-news">
                    <div class="single-news-img">
                        <img src="img/course-1.jpg" alt="Latest Blog 1" />
                        <div class="news-caption">
                            <span class="news-author">
                                <i class="fa fa-user"></i>
                                enny White
                            </span>
                            <ul class="news-section">
                                <li>
                                    <span class="news-author">
                                        <i class="fa fa-comment"></i>
                                        6
                                    </span>
                                </li>
                                <li>
                                    <span class="news-author">
                                        <i class="fa fa-heart-o"></i>
                                        73
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-news-desc">
                        <h4><a href="single-news.html">Latest Blog title here</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat.adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-news">
                    <div class="single-news-img">
                        <img src="img/course-4.jpeg" alt="Latest Blog 1" />
                        <div class="news-caption">
                            <span class="news-author">
                                <i class="fa fa-user"></i>
                                enny White
                            </span>
                            <ul class="news-section">
                                <li>
                                    <span class="news-author">
                                        <i class="fa fa-comment"></i>
                                        6
                                    </span>
                                </li>
                                <li>
                                    <span class="news-author">
                                        <i class="fa fa-heart-o"></i>
                                        73
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-news-desc">
                        <h4><a href="single-news.html">Latest Blog title here</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat.adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-news">
                    <div class="single-news-img">
                        <img src="img/course-3.jpg" alt="Latest Blog 1" />
                        <div class="news-caption">
                            <span class="news-author">
                                <i class="fa fa-user"></i>
                                enny White
                            </span>
                            <ul class="news-section">
                                <li>
                                    <span class="news-author">
                                        <i class="fa fa-comment"></i>
                                        6
                                    </span>
                                </li>
                                <li>
                                    <span class="news-author">
                                        <i class="fa fa-heart-o"></i>
                                        73
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-news-desc">
                        <h4><a href="single-news.html">Latest Blog title here</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat.adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Education News Area End -->


<!-- Quotes Area Start -->
<!--<section class="edulab-quotes-area section_25">
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


<!-- Footer Area Start -->
@include('partials.footer')
<!-- Footer Area End -->



<!-- jQuery -->
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>

<!-- Magnific Popup JS -->
<script src="js/jquery.magnific-popup.min.js"></script>

<!-- OwlCarousel JS -->
<script src="js/owl.carousel.min.js"></script>

<!-- Slicknav JS -->
<script src="js/jquery.slicknav.min.js"></script>

<!-- Counter JS -->
<script src="js/jquery.counterup.min.js"></script>

<!-- Waypoints JS -->
<script src="js/waypoints-min.js"></script>

<!-- Isotop Min JS -->
<script src="js/isotope.pkgd.min.js"></script>

<!-- Sticky JS -->
<script src="js/jquery.sticky.js"></script>

<!-- Custom JS -->
<script src="js/active.js"></script>

</body>
</html>