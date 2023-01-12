<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta name="csrf_token" value="{{ csrf_token() }}"/>
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet" type="text/css"  >
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" >

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <title>Keystone</title>
    @livewireStyles
</head>

@if(LaravelLocalization::getCurrentLocale() == 'en')
    <body dir="ltr">
@else
    <body dir="rtl">
@endif
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:malmalah04@gmail.com">malmalah04@gmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+20 102 647 5912</span></i>
            @if(LaravelLocalization::getCurrentLocale() == 'en')
                <a class="bi bi-globe d-flex align-items-center ms-4"><a href="{{ LaravelLocalization::getLocalizedURL('ar') }}"> <span> عربي</span></a></a> </i>
            @else
                <a class="bi bi-globe d-flex align-items-center ms-4"><a href="{{ LaravelLocalization::getLocalizedURL('en') }}"><span> English</span></a></a> </i>
            @endif

        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

        <div class="logo">
            <h1 class="text-light"><a href="{{'/'}}">{{ __('Home.Keystone')}}</a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="active" href="{{'/'}}">{{ __('Home.home') }}</a></li>
                <li><a class="active" href="{{'/about'}}">{{ __('Home.about') }}</a></li>
{{--                <li><a class="active" href="{{'/services'}}">{{ __('Home.services') }}</a></li>--}}
                <li><a class="active" href="{{'/testimonials'}}">{{ __('Home.testimonials') }}</a></li>
                <li><a class="active" href="{{'/plan'}}">{{ __('Home.plan') }}</a></li>
                <li><a class="active" href="{{'/portfolio'}}">{{ __('Home.portfolio') }}</a></li>
                <li><a class="active" href="{{'/contact'}}">{{ __('Home.contact') }}</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

{{ $slot }}}

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{ __('Home.Keystone')}}</h3>
                    <p>
                        {{ __('Home.DESOK')}}, {{ __('Home.16 Street')}}<br>
                        {{ __('Home.EGYPT')}} <br><br>
                        <strong>{{ __('Home.Phone')}}:</strong> +20 102 647 5912<br>
                        <strong>{{ __('Home.Email')}}:</strong> malmalah04@gmail.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>{{ __('Home.Useful Links')}}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{'/'}}">{{ __('Home.home')}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{'/about'}}">{{__('Home.about')}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{'/services'}}">{{__('Home.services')}}</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{ __('Home.Our Services')}}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{'/services'}}">{{ __('Home.App Development')}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{'/services'}}">{{ __('Home.Web Development')}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{'/services'}}">{{ __('Home.Web Designer')}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{'/services'}}">{{ __('Home.BackEnd Development')}}</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ __('Home.Keystone Programing')}}</span></strong>. {{ __('Home.All Rights Reserved')}}
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js')}}"></script>
@livewireScripts
</body>
</html>
