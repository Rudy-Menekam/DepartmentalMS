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
    
    <!-- Main Header Area Start -->
    <header class="edulab-main-header-area sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="edulab-logo section_25">
                        <a href="{{ route('welcome') }}">
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