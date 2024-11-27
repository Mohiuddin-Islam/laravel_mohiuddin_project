<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="pixydrops">
        <meta name="description" content="Remons - Booking Rental HTML Template">
        <!-- ======== Page title ============ -->
        <title>Remons - Booking Rental HTML Template</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <!--<< DatePicker.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/datepickerboot.css')}}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    </head>
    <body>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back To Top Start -->
        <div class="scroll-up">
            <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <img src="{{asset('assets/img/logo/black-logo.svg')}}" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+11002345909">+11002345909</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="contact.html" class="theme-btn text-center">
                                    <span>Get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                                </a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Section Start -->
        @include('frontend.layouts.header')

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Hero Section Start -->
        <section class="hero-section hero-3 fix">
            <div class="array-button">
                <button class="image-array-left bg-cover" style="background-image: url('{{ asset('assets/img/') }}');">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="image-array-right bg-cover" style="background-image: url('{{ asset('assets/img/') }}');">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
            <h6 class="search-text">Search Any Car</h6>
            <div class="line-icon">
                <img src="{{asset('assets/img/hero/icon.png')}}" alt="img">
            </div>
            <div class="swiper hero-slider-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover" style="background-image: url('{{ asset('assets/img/hero/car_lax.jpg') }}');">
                            <div class="line-shape" data-animation="slideInLeft" data-duration="3s" data-delay="2.1s">
                                <img src="{{asset('assets/img/hero/line-shape-1.png')}}" alt="shape-img">
                            </div>
                            <div class="line-shape-2" data-animation="slideInLeft" data-duration="3s" data-delay="2.3s">
                                <img src="{{asset('assets/img/hero/line-shape-2.png')}}" alt="shape-img">
                            </div>
                        </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-12">
                                    <div class="hero-content">
                                            <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                Welcome to remons rentals
                                            </h4>
                                            <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                Save big <br>
                                                with car rental
                                            </h1>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover" style="background-image: url('{{ asset('assets/img/hero/line-shape-1.png') }}');">
                            <div class="line-shape" data-animation="slideInLeft" data-duration="3s" data-delay="2.1s">
                                <img src="{{asset('assets/img/hero/bannar22.jpg')}}" alt="shape-img">
                            </div>
                            <div class="line-shape-2" data-animation="slideInLeft" data-duration="3s" data-delay="2.3s">
                                <img src="{{asset('assets/img/hero/slider1.png')}}" alt="shape-img">
                            </div>
                        </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-12">
                                    <div class="hero-content">
                                            <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                Welcome to remons rentals
                                            </h4>
                                            <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                                Save big <br>
                                                with car rental
                                            </h1>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Search Booking Section Start -->
        <section class="search-booking-section section-padding">
            <div class="container">
                <div class="search-booking-wrapper">
                    <div class="booking-man float-bob-x">
                        <img src="{{asset('assets/img/booking-man.webp')}}" alt="img">
                    </div>
                    <div class="row g-4 justify-content-between">
                        <div class="col-xl-6 col-lg-6">
                            <div class="search-booking-content">
                                <div class="section-title">
                                    <img src="{{asset('assets/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                        Search Book & <br>
                                        Rent Vehicle Easily
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".6s">
                                    Lorem ipsum is simply ipun txns mane so dummy text of free <br> available in market the printing and typesetting industry has <br> been the industry's standard dummy text ever.
                                </p>
                                <div class="icon-area">
                                    <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/feature-benefit/icon-1.png')}}" alt="icon-img">
                                        </div>
                                        <h4>
                                            Easier & <br>
                                            Faster Bookings
                                        </h4>
                                    </div>
                                    <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/feature-benefit/icon-2.png')}}" alt="icon-img">
                                        </div>
                                        <h4>
                                            Too Many <br>
                                            Pickup Locations
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="product-search-area">
                                <form action="#" id="contact-form" method="POST">
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Pickup Location</label>
                                            <div class="category-oneadjust">
                                                <select name="cate" class="category">
                                                    <option value="1">
                                                        Broklyn Street
                                                    </option>
                                                    <option value="1">
                                                        Houston
                                                    </option>
                                                    <option value="1">
                                                        Texas
                                                    </option>
                                                    <option value="1">
                                                        New York
                                                    </option>
                                                    <option value="1">
                                                        Other Location
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-12">
                                            <div class="pickup-items">
                                                <label class="field-label">Pick-up Date</label>
                                                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control" type="text" placeholder="Check in" readonly>
                                                    <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="pickup-items">
                                                <label class="field-label">Drop-off Date</label>
                                                <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control" type="text" placeholder="Check in" readonly>
                                                    <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="pickup-items">
                                                <label class="field-label">Car Type</label>
                                                <div class="category-oneadjust">
                                                    <select name="cate" class="category">
                                                        <option value="1">
                                                            cars
                                                        </option>
                                                        <option value="1">
                                                            sedan
                                                        </option>
                                                        <option value="1">
                                                            sports
                                                        </option>
                                                        <option value="1">
                                                            jeep
                                                        </option>
                                                        <option value="1">
                                                            limousine
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="pickup-items">
                                            <button type="submit" class="theme-btn">
                                                    Find a Car
                                            </button>
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Car Rentals Section Start -->
        <section class="car-rentals-section-2 section-padding fix">
            <div class="container">
                <div class="section-title text-center">
                    <img src="{{asset('assets/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                    <span class="wow fadeInUp" data-wow-delay=".2s">Checkout our new cars</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        Cars We’re Offering <br>
                        for Rentals
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="{{asset('assets/img/car/car-5.webp')}}" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    2024 Model
                                </div>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                                <h6>$70.00 <span>/ Day</span></h6>
                                <div class="icon-items">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/seat.svg')}}" alt="img" class="me-1">
                                            6 Seats
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/door.svg')}}" alt="img" class="me-1">
                                            2 Doors
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/automatic.svg')}}" alt="img" class="me-1">
                                            Automatic
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/petrol.svg')}}" alt="img" class="me-1">
                                            Petrol
                                        </li>
                                    </ul>
                                </div>
                                <a href="car-details.html" class="theme-btn bg-color w-100 text-center">book now <i class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="{{asset('assets/img/car/car-6.webp')}}" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    2024 Model
                                </div>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                                <h6>$70.00 <span>/ Day</span></h6>
                                <div class="icon-items">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/seat.svg')}}" alt="img" class="me-1">
                                            6 Seats
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/door.svg')}}" alt="img" class="me-1">
                                            2 Doors
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/automatic.svg')}}" alt="img" class="me-1">
                                            Automatic
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/petrol.svg')}}" alt="img" class="me-1">
                                            Petrol
                                        </li>
                                    </ul>
                                </div>
                                <a href="car-details.html" class="theme-btn bg-color w-100 text-center">book now <i class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="{{asset('assets/img/car/car-7.webp')}}" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    2024 Model
                                </div>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                                <h6>$70.00 <span>/ Day</span></h6>
                                <div class="icon-items">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/seat.svg')}}" alt="img" class="me-1">
                                            6 Seats
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/door.svg')}}" alt="img" class="me-1">
                                            2 Doors
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/automatic.svg')}}" alt="img" class="me-1">
                                            Automatic
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/petrol.svg')}}" alt="img" class="me-1">
                                            Petrol
                                        </li>
                                    </ul>
                                </div>
                                <a href="car-details.html" class="theme-btn bg-color w-100 text-center">book now <i class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="{{asset('assets/img/car/car-8.webp')}}" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    2024 Model
                                </div>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                                <h6>$70.00 <span>/ Day</span></h6>
                                <div class="icon-items">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/seat.svg')}}" alt="img" class="me-1">
                                            6 Seats
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/door.svg')}}" alt="img" class="me-1">
                                            2 Doors
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/automatic.svg')}}" alt="img" class="me-1">
                                            Automatic
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/petrol.svg')}}" alt="img" class="me-1">
                                            Petrol
                                        </li>
                                    </ul>
                                </div>
                                <a href="car-details.html" class="theme-btn bg-color w-100 text-center">book now <i class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="{{asset('assets/img/car/car-9.webp')}}" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    2024 Model
                                </div>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                                <h6>$70.00 <span>/ Day</span></h6>
                                <div class="icon-items">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/seat.svg')}}" alt="img" class="me-1">
                                            6 Seats
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/door.svg')}}" alt="img" class="me-1">
                                            2 Doors
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/automatic.svg')}}" alt="img" class="me-1">
                                            Automatic
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/petrol.svg')}}" alt="img" class="me-1">
                                            Petrol
                                        </li>
                                    </ul>
                                </div>
                                <a href="car-details.html" class="theme-btn bg-color w-100 text-center">book now <i class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="{{asset('assets/img/car/car-10.webp')}}" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    2024 Model
                                </div>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>2 Reviews</span>
                                </div>
                                <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                                <h6>$70.00 <span>/ Day</span></h6>
                                <div class="icon-items">
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/seat.svg')}}" alt="img" class="me-1">
                                            6 Seats
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/door.svg')}}" alt="img" class="me-1">
                                            2 Doors
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <img src="{{asset('assets/img/car/automatic.svg')}}" alt="img" class="me-1">
                                            Automatic
                                        </li>
                                        <li>
                                            <img src="{{asset('assets/img/car/petrol.svg')}}" alt="img" class="me-1">
                                            Petrol
                                        </li>
                                    </ul>
                                </div>
                                <a href="car-details.html" class="theme-btn bg-color w-100 text-center">book now <i class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section Start -->
        <div class="gallery-section-2 fix">
            <div class="gallery-wrapper">
                <div class="row g-4">
                    <div class="col-xxl-5 col-xl-6 col-lg-7">
                        <div class="row g-3">
                            <div class="col-lg-6 col-md-6">
                                <div class="gallery-image">
                                    <img src="{{asset('assets/img/gallery/g-10.webp')}}" alt="img">
                                    <div class="icon-box">
                                        <a href="{{asset('assets/img/gallery/g-10.webp')}}" class="icon img-popup-2">
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="mask"></div>
                                    <div class="mask-second"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="row g-3">
                                    <div class="col-lg-12">
                                        <div class="gallery-image">
                                            <img src="{{asset('assets/img/gallery/g-11.webp')}}" alt="img">
                                            <div class="icon-box">
                                                <a href="{{asset('assets/img/gallery/g-webp')}}" class="icon img-popup-2">
                                                    <i class="fa-solid fa-plus"></i>
                                                </a>
                                            </div>
                                            <div class="mask"></div>
                                            <div class="mask-second"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="gallery-image">
                                            <img src="{{asset('assets/img/gallery/g-12.webp')}}" alt="img">
                                            <div class="icon-box">
                                                <a href="{{asset('assets/img/gallery/g-12.webp')}}" class="icon img-popup-2">
                                                    <i class="fa-solid fa-plus"></i>
                                                </a>
                                            </div>
                                            <div class="mask"></div>
                                            <div class="mask-second"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-5 col-md-6">
                        <div class="gallery-image style-width">
                            <img src="{{asset('assets/img/gallery/g-13.webp')}}" alt="img">
                            <div class="icon-box">
                                <a href="{{asset('assets/img/gallery/g-13.webp')}}" class="icon img-popup-2">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <div class="mask"></div>
                            <div class="mask-second"></div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6">
                        <div class="gallery-content">
                            <div class="icon">
                                <img src="{{asset('assets/img/gallery/icon.png')}}" alt="img">
                            </div>
                            <h2>
                                Trusted & Reliable
                                Car Rentals <br>
                                Gallery
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section-3 bg-cover section-padding fix" style="background-image: url('{{ asset('assets/img/testimonial/bg-testimonial-home3.png') }}');">
            <div class="container">
                <div class="testimonial-wrapper-2">
                    <div class="swiper testimonial-slider-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-single-items">
                                    <div class="testimonial-img bg-cover" style="background-image: url('{{ asset('assets/img/testimonial/client5.png') }}');"></div>
                                    <div class="testimonial-content">
                                        <p>
                                            This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.
                                        </p>
                                        <div class="name-job">
                                            <h3 class="name">
                                                Christine Eve
                                            </h3>
                                        <div class="separator">.</div>
                                        <span class="job">Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-single-items">
                                    <div class="testimonial-img bg-cover" style="background-image: url('{{ asset('assets/img/testimonial/client3.png') }}');"></div>
                                    <div class="testimonial-content">
                                        <p>
                                            This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.
                                        </p>
                                        <div class="name-job">
                                            <h3 class="name">
                                                Mike Hardson
                                            </h3>
                                        <div class="separator">.</div>
                                        <span class="job">Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-single-items">
                                    <div class="testimonial-img bg-cover" style="background-image: url('{{ asset('assets/img/testimonial/client4.png') }}');"></div>
                                    <div class="testimonial-content">
                                        <p>
                                            This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.
                                        </p>
                                        <div class="name-job">
                                            <h3 class="name">
                                                Shirley Smith
                                            </h3>
                                        <div class="separator">.</div>
                                        <span class="job">Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-img-items">
                        <div class="client-img bg-cover" style="background-image: url('{{ asset('assets/img/testimonial/client3.png') }}');"></div>
                        <div class="client-img bg-cover" style="background-image: url('{{ asset('assets/img/testimonial/client4.png') }}');"></div>
                        <div class="client-img bg-cover" style="background-image: url('{{ asset('assets/img/testimonial/client5.png') }}');"></div>
                        <div class="array-button wow fadeInUp" data-wow-delay=".6s">
                            <button class="array-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                            <button class="array-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Faster Booking Section Start -->
        <section class="faster-booking-section fix section-padding pt-0">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                        <div class="faster-booking-image">
                            <img src="{{asset('assets/img/f-booking-01.webp')}}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="faster-booking-items">
                        <div class="thumb">
                                <img src="{{asset('assets/img/f-booking-02.webp')}}" alt="img">
                        </div>
                        <div class="content">
                                <div class="icon">
                                    <img src="{{asset('assets/img/feature-benefit/icon-1.png')}}" alt="icon-img">
                                </div>
                                <h4>
                                    Easier & <br>
                                    Faster Bookings
                                </h4>
                                <p>
                                    Sed ut perspiciatis unde omnis <br> iste natus.
                                </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay=".7s">
                        <div class="faster-booking-image">
                            <img src="{{asset('assets/img/f-booking-03.webp')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-section fix section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <img src="{{asset('assets/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                    <span class="wow fadeInUp" data-wow-delay=".2s">Our expert people</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        Meet Our Professional <br>
                        Team Members
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-card-items">
                            <div class="border-shape">
                                <img src="{{asset('assets/img/team/border.png')}}" alt="img">
                            </div>
                            <div class="team-image">
                                <img src="{{asset('assets/img/team/team-01.webp')}}" alt="team-img">
                            </div>
                            <div class="team-content">
                                <h3><a href="index-3.html">Mike Hardson</a></h3>
                                <p>manager</p>
                                <div class="social-icon d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="team-card-items">
                            <div class="border-shape">
                                <img src="{{asset('assets/img/team/border.png')}}" alt="img">
                            </div>
                            <div class="team-image">
                                <img src="{{asset('assets/img/team/team-02.webp')}}" alt="team-img">
                            </div>
                            <div class="team-content">
                                <h3><a href="index-3.html">Aleesha Brown</a></h3>
                                <p>manager</p>
                                <div class="social-icon d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="team-card-items">
                            <div class="border-shape">
                                <img src="{{asset('assets/img/team/border.png')}}" alt="img">
                            </div>
                            <div class="team-image">
                                <img src="{{asset('assets/img/team/team-03.webp')}}" alt="team-img">
                            </div>
                            <div class="team-content">
                                <h3><a href="index-3.html">David Jhonson</a></h3>
                                <p>manager</p>
                                <div class="social-icon d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section Start -->
        <section class="news-section section-padding fix bg-cover" style="background-image: url('assets/img/news/bg.jpg');">
            <div class="container">
                <div class="section-title text-center">
                    <img src="{{asset('assets/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                    <span class="wow fadeInUp" data-wow-delay=".2s">From the Blog</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">
                        Latest News & <br>
                        Articles From the Blog
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="news-card-items">
                            <div class="news-image">
                                <img src="{{asset('assets/img/news/01.webp')}}" alt="news-img">
                                <div class="post-date">
                                    <h6>
                                        20 <br>
                                        Mar 
                                    </h6>
                                </div>
                            </div>
                            <div class="news-content">
                                <div class="post-client">
                                    <img src="{{asset('assets/img/news/client.webp')}}" alt="img">
                                </div>
                                <div class="news-cont">
                                    <span>by Mike Hardson</span>
                                    <h3><a href="news-details.html">The best fastest and most powerful road car</a></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</p>
                                </div>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-comments"></i>
                                        2 Comments
                                    </li>
                                    <li>
                                    <a href="news-details.html">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                            More 
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-card-items">
                            <div class="news-image">
                                <img src="{{asset('assets/img/news/02.webp')}}" alt="news-img">
                                <div class="post-date">
                                    <h6>
                                        26 <br>
                                        Mar 
                                    </h6>
                                </div>
                            </div>
                            <div class="news-content">
                                <div class="post-client">
                                    <img src="{{asset('assets/img/news/client.webp')}}" alt="img">
                                </div>
                                <div class="news-cont">
                                    <span>by Mike Hardson</span>
                                    <h3><a href="news-details.html">The best fastest and most powerful road car</a></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</p>
                                </div>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-comments"></i>
                                        2 Comments
                                    </li>
                                    <li>
                                    <a href="news-details.html">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                            More 
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="news-card-items">
                            <div class="news-image">
                                <img src="{{asset('assets/img/news/03.webp')}}" alt="news-img">
                                <div class="post-date">
                                    <h6>
                                        29 <br>
                                        Mar 
                                    </h6>
                                </div>
                            </div>
                            <div class="news-content">
                                <div class="post-client">
                                    <img src="{{asset('assets/img/news/client.webp')}}" alt="img">
                                </div>
                                <div class="news-cont">
                                    <span>by Mike Hardson</span>
                                    <h3><a href="news-details.html">The best fastest and most powerful road car</a></h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</p>
                                </div>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-comments"></i>
                                        2 Comments
                                    </li>
                                    <li>
                                    <a href="news-details.html">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                            More 
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Car Booking Section Start -->
        <section class="cta-car-booking-section bg-cover section-padding" style="background-image: url('assets/img/cta/image.jpg');">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-12">
                        <div class="cta-car-booking-items">
                            <div class="content">
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Save Time & Money with Top <br>
                                    Rent Car Service in Town
                                </h2>
                                <div class="button-items">
                                    <a href="about.html" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">Discover More</a>
                                    <a href="car-details.html" class="theme-btn bg-header wow fadeInUp" data-wow-delay=".7s">Book Your Car</a>
                                </div>
                            </div>
                            <div class="car-image">
                                <img src="{{asset('assets/img/car-slideshow-2.webp')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Faq Section Start -->
        <section class="faq-section fix section-padding">
            <div class="container">
                <div class="faq-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="faq-image">
                                <img src="{{asset('assets/img/faq.webp')}}" alt="img">
                                <div class="color-shape float-bob-y">
                                    <img src="{{asset('assets/img/faq-color-shape.png')}}" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-content">
                                <div class="section-title">
                                    <img src="{{asset('assets/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">Frequently asked questions</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                        Question & Answers
                                    </h2>
                                </div>
                                <div class="faq-accordion mt-4 mt-md-0">
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay=".3s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                    How to process the funtion for construction?
                                                </button>
                                            </h5>
                                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay=".5s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                    Where should I incorporate my business?
                                                </button>
                                            </h5>
                                            <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h5 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                    How there are many variations of passages
                                                </button>
                                            </h5>
                                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    There are many variations of passages of available but the have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable now.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand Section Start -->
        <div class="brand-wrapper style-2 pt-0 pb-80">
        <div class="array-button">
            <button class="array-prev-2"><i class="far fa-chevron-left"></i></button>
            <button class="array-next-2"><i class="far fa-chevron-right"></i></button>
        </div>
        <div class="container">
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="{{asset('assets/img/brand/01.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="{{asset('assets/img/brand/02.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="{{asset('assets/img/brand/03.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="{{asset('assets/img/brand/04.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="{{asset('assets/img/brand/05.png')}}" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="{{ asset('assets/img/brand/06.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Cta Cheap Rental Section Start -->
        <section class="cta-cheap-rental-section">
            <div class="container">
                <div class="cta-cheap-rental">
                    <div class="cta-cheap-rental-left wow fadeInUp" data-wow-delay="
                    .3s">
                        <div class="logo-thumb">
                            <a href="index.html">
                                <img src="{{asset('assets/img/logo/white-logo.svg')}}" alt="logo-img">
                            </a>
                        </div>
                        <h4 class="text-white">Save big with our cheap car rental</h4>
                    </div>
                    <div class="social-icon d-flex align-items-center wow fadeInUp" data-wow-delay="
                    .5s">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </section>

    <!-- Footer Section Start -->
        @include('frontend.layouts.footer')
        
        <!--<< All JS Plugins >>-->
        <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{asset('assets/js/viewport.jquery.js')}}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{asset('assets/js/jquery.waypoints.js')}}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
        <!--<< Datepicker Js >>-->
        <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!--<< GSAP Animation Js >>-->
        <script src="{{asset('assets/js/animation.js')}}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <!--<< Main.js >>-->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>