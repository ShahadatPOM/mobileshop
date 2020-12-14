<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bonique - Beauty & Cosmetic eCommerce HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS  ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css')}}">
    <!--slick min css-->
    <link rel="stylesheet" href="{{asset('assets/front/css/slick.css')}}">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">
    <!--font awesome css-->
    <link rel="stylesheet" href="{{asset('assets/front/css/font.awesome.css')}}">
    <!--ionicons css-->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--simple line icons css-->
    <link rel="stylesheet" href="{{asset('assets/front/css/simple-line-icons.css')}}">
    <!--animate css-->
    <link rel="stylesheet" href="{{asset('assets/front/css/animate.css')}}">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{asset('assets/front/css/jquery-ui.min.css')}}">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{asset('assets/front/css/slinky.menu.css')}}">
    <!--plugins css-->
    <link rel="stylesheet" href="{{asset('assets/front/css/plugins.css')}}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">

    @stack('base.css')
    
    <!--modernizr min js here-->
    <script src="{{asset('assets/front/js/vendor/modernizr-3.7.1.min.js')}}"></script>
</head>

<body>

@yield('base.content')

<!-- JS ============================================ -->
    <!--jquery min js-->
    <script src="{{asset('assets/front/js/vendor/jquery-3.4.1.min.js')}}"></script>
    <!--popper min js-->
    <script src="{{asset('assets/front/js/popper.js')}}"></script>
    <!--bootstrap min js-->
    <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
    <!--owl carousel min js-->
    <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
    <!--slick min js-->
    <script src="{{asset('assets/front/js/slick.min.js')}}"></script>
    <!--magnific popup min js-->
    <script src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
    <!--counterup min js-->
    <script src="{{asset('assets/front/js/jquery.counterup.min.js')}}"></script>
    <!--jquery countdown min js-->
    <script src="{{asset('assets/front/js/jquery.countdown.js')}}"></script>
    <!--jquery ui min js-->
    <script src="{{asset('assets/front/js/jquery.ui.js')}}"></script>
    <!--jquery elevatezoom min js-->
    <script src="{{asset('assets/front/js/jquery.elevatezoom.js')}}"></script>
    <!--isotope packaged min js-->
    <script src="{{asset('assets/front/js/isotope.pkgd.min.js')}}"></script>
    <!--slinky menu js-->
    <script src="{{asset('assets/front/js/slinky.menu.js')}}"></script>
    <!-- Plugins JS -->
    <script src="{{asset('assets/front/js/plugins.js')}}"></script>
    
    <!-- Main JS -->
    <script src="{{asset('assets/front/js/main.js')}}"></script>
    
    @stack('base.js')
    
    </body>    
    </html>