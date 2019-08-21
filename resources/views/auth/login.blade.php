<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>Edulab | Login</title>
    
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

    <!-- Login Page Area Start -->
    <section class="edulab-login-page-area login-bg">
        <div class="edulab-login-overlay"></div>
        <div class="edulab-login-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="login-box">
                            <div class="edulab-login-logo">
                                <a href="index.html">
                                    <h2>Departmental<span>MS</span></h2>
                                </a>
                            </div>
                            <div class="login-slogan">
                                <h3>login to your edulab account!</h3>
                            </div>
                            <form role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <p class="field">
                                   <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">

                                   @if ($errors->has('email'))
                                   <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <i class="fa fa-user"></i>
                            </p>
                            <p class="field">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                                <i class="fa fa-lock"></i>
                            </p>
                            <p class="submit">
                                <button type="submit" name="submit">
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Page Area End -->



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