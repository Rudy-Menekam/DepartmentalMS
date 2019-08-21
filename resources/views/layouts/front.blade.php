<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    @yield('head')
    
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
    <div class="edulab-header-top-area section_15">
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
                                +123 456 0321
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
                        <!-- <a href="{{ route('auth.register') }}" class="register">register</a> -->
                        <a href="{{ route('auth.login') }}" class="signin">sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    @yield('content')
    <!-- Footer Area Start -->
    <footer class="edulab-footer-area ">
        <div class="footer-top-area section_50">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="single-footer">
                            <div class="text-widget">
                                <a href="index.html">
                                    <h2>Departmental<span>MS</span></h2>
                                </a>
                                <p>Ipsum dolor sit amet consect adipsicing sed elit tempor incididunt ueta nostrud dolore magna aliqua ut enim minim .</p>
                            </div>
                            <div class="footer-social-icon">
                                <h3>Follow Us</h3>
                                <ul class="footer-social">
                                    <li>
                                        <a href="#" class="fb">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="gp">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-footer">
                            <h3>usefull links</h3>
                            <ul class="top-links">
                                <li><a href="#"><i class="fa fa-angle-right"></i>Teachers</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Courses</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>about edulab</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>help topics</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>policies</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>blog post</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-footer">
                            <h3>gallery</h3>
                            <div class="footer-gallery">
                                <a href="#">
                                    <img src="img/footer-img-1.jpg" alt="Footer Gallery" />
                                </a>
                                <a href="#">
                                    <img src="img/footer-img-2.jpg" alt="Footer Gallery" />
                                </a>
                                <a href="#">
                                    <img src="img/footer-img-3.jpg" alt="Footer Gallery" />
                                </a>
                                <a href="#">
                                    <img src="img/footer-img-1.jpg" alt="Footer Gallery" />
                                </a>
                                <a href="#">
                                    <img src="img/footer-img-2.jpg" alt="Footer Gallery" />
                                </a>
                                <a href="#">
                                    <img src="img/footer-img-3.jpg" alt="Footer Gallery" />
                                </a>
                                <a href="#">
                                    <img src="img/footer-img-1.jpg" alt="Footer Gallery" />
                                </a>
                                <a href="#">
                                    <img src="img/footer-img-3.jpg" alt="Footer Gallery" />
                                </a>
                            </div>
                            <a href="#" class="load-more">Load more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-footer">
                            <h3>Newsletter</h3>
                            <div class="footer-newsletter">
                                <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium quas molestias except. </p>
                                <form>
                                    <input name="email" placeholder="Email Address" type="email">
                                    <input class="button" name="subscribe" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="edulab-copyright-area section_15">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="edulab-copyright-left">
                            <p> Copyright © 2017 Edulab.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="edulab-copyright-right">
                            <p>Built with <i class="fa fa-heart"></i> from<span>Rudy Menekam</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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