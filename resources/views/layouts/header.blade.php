<!DOCTYPE html>
<html lang="en">

<head>
    <title>SkyKing Images</title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('web/images/skyking.png') }}" type="image/gif" sizes="32x32">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&amp;family=Roboto+Mono:wght@400;700&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('web/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/4.12/video.js"></script>
</head>
<body>
<div class="site-wrap">
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar py-3" role="banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-xl-2" data-aos="fade-down">
                    <!--<h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">Sky King Images</a></h1>-->
                    <img src="{{ asset('web/images/skyking4.png') }}" height="150" width="200" alt="">
                </div>
                <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                    <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                            <li class="<?php if($page == 'home') echo 'active';?>"><a href="/">Home</a></li>
                            <li class="has-children <?php if($page == 'gallery') echo 'active';?>">
                                <a href="#">Gallery</a>
                                <ul class="dropdown">
                                   
                                    @foreach ($category as $data)
                                    <li><a href="/single/{{ $data->id }}">{{ $data->category_name}}</a></li>

                                    @endforeach
                                    
                                </ul>
                            </li>
                            <li class="<?php if($page == 'services') echo 'active';?>"><a href="/services">Services</a></li>
                            <li class="<?php if($page == 'about') echo 'active';?>"><a href="/about">About</a></li>
                            <li class="<?php if($page == 'contact') echo 'active';?>"><a href="/contact">Contact</a></li>
                            <li class="<?php if($page == 'faq') echo 'active';?>"><a href="/wfaq">FAQs</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
                    <div class="d-none d-xl-inline-block">
                        <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0"
                            data-class="social">
                            <li>
                                <a target="_blank" href="https://www.facebook.com/skykingimages/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            </li>
                            <li>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            </li>
                            <li>
                                <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="
                    position: relative; top: 3px;">
                        <a href="#" class="site-menu-toggle js-menu-toggle">
                            <span class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('site')
</div>
<script src="{{ asset('web/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('web/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('web/js/jquery-ui.js') }}"></script>
<script src="{{ asset('web/js/popper.min.js') }}"></script>
<script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('web/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('web/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('web/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('web/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('web/js/swiper.min.js') }}"></script>
<script src="{{ asset('web/js/aos.js') }}"></script>
<script src="{{ asset('web/js/picturefill.min.js') }}"></script>
<script src="{{ asset('web/js/lightgallery-all.min.js') }}"></script>
<script src="{{ asset('web/js/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('web/js/main.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#lightgallery').lightGallery();
        $('#html5-videos').lightGallery();
    });
</script>
<script>
    feather.replace();
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>