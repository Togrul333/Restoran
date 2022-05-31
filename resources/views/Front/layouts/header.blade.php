<!DOCTYPE html>
<html lang="en">
<head>

    <title>Restaurant</title>
    <!--

    Eatery Cafe Template

    http://www.templatemo.com/tm-515-eatery

    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('templatemo_Restoran/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('templatemo_Restoran/')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('templatemo_Restoran/')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('templatemo_Restoran/')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('templatemo_Restoran/')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('templatemo_Restoran/')}}/css/magnific-popup.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('templatemo_Restoran/')}}/css/templatemo-style.css">

</head>
<body>
<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>
<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="" class="navbar-brand">Eatery <span>.</span> Cafe</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About</a></li>
                <li><a href="#team" class="smoothScroll">Chef</a></li>
                <li><a href="#menu" class="smoothScroll">Menu</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
{{--                @if (\Illuminate\Support\Facades\Route::has('login'))--}}
{{--                        @auth--}}
{{--                            <li><a href="{{ url('/dashboard') }}" >Dashboard</a></li>--}}
{{--                        @else--}}
{{--                            <li><a href="{{ route('login') }}" >Log in</a></li>--}}

{{--                            @if (\Illuminate\Support\Facades\Route::has('register'))--}}
{{--                                <li><a href="{{ route('register') }}" >Register</a></li>--}}
{{--                            @endif--}}
{{--                        @endauth--}}
{{--                @endif--}}
            </ul>

            <ul class="nav navbar-nav navbar-right">
{{--                <li><a href="#"><i class="fa fa-phone"></i> 010 020 0340</a></li>--}}
                <a href="#footer" class="section-btn">Reserve a table</a>
            </ul>
        </div>

    </div>
</section>
<!-- HOME -->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="row">

        <div class="owl-carousel owl-theme">
            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-8 col-sm-12">
                            <h3>Eatery Cafe &amp; Restaurant</h3>
                            <h1>Our mission is to provide an unforgettable experience</h1>
                            <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our chef</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-second">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-8 col-sm-12">
                            <h3>Your Perfect Breakfast</h3>
                            <h1>The best dinning quality can be here too!</h1>
                            <a href="#menu" class="section-btn btn btn-default smoothScroll">Discover menu</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-third">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-8 col-sm-12">
                            <h3>New Restaurant in Town</h3>
                            <h1>Enjoy our special menus every Sunday and Friday</h1>
                            <a href="#contact" class="section-btn btn btn-default smoothScroll">Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
