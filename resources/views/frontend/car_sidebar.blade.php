@extends('frontend.layouts.app')

@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/banner.jpg');">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        Cars
                    </li>
                </ul>
                <h1 class="wow fadeInUp" data-wow-delay=".5s">list Style</h1>
            </div>
        </div>
    </div>

    <!-- Car Rentals Section Start -->
    <section class="car-list-section section-padding fix">
        <div class="container">
            <div class="car-list-wrapper">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="car-list-sidebar">
                            <h4 class="title">Search Car</h4>
                            <form action="#" id="contact-form" method="POST" class="contact-form-items">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">Category</label>
                                            <div class="category-oneadjust">
                                                <select name="cate" class="category">
                                                    <option value="1">
                                                        Select Category
                                                    </option>
                                                    <option value="1">
                                                        Category 01
                                                    </option>
                                                    <option value="1">
                                                        Category 02
                                                    </option>
                                                    <option value="1">
                                                        Category 03
                                                    </option>
                                                    <option value="1">
                                                        Category 04
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">Pick-up Location</label>
                                            <div class="category-oneadjust">
                                                <select name="cate" class="category">
                                                    <option value="1">
                                                        Select Location
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
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">Dropoff Location</label>
                                            <div class="category-oneadjust">
                                                <select name="cate" class="category">
                                                    <option value="1">
                                                        Select Location
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
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">Pick-up Date</label>
                                            <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" placeholder="Check in" readonly>
                                                <span class="input-group-addon"> <i
                                                        class="fa-solid fa-calendar-days"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">Drop-off Date</label>
                                            <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" placeholder="Check in" readonly>
                                                <span class="input-group-addon"> <i
                                                        class="fa-solid fa-calendar-days"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">Car Type</label>
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
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">Colors</label>
                                            <div class="category-oneadjust">
                                                <select name="cate" class="category">
                                                    <option value="1">
                                                        Select Colors
                                                    </option>
                                                    <option value="1">
                                                        Red
                                                    </option>
                                                    <option value="1">
                                                        Green
                                                    </option>
                                                    <option value="1">
                                                        Yellow
                                                    </option>
                                                    <option value="1">
                                                        Black
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <button type="submit" class="theme-btn">Search Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="woocommerce-notices-wrapper">
                            <div class="product-showing">
                                <p>Showing 1–9 of 12 Results</p>
                            </div>
                            <div class="woocommerce-right d-flex align-items-center">
                                <div class="icon-items">
                                    <a href="car-grid.html"><i class="fas fa-th"></i></a>
                                    <a href="car-list.html"><i class="fa-solid fa-list"></i></a>
                                </div>
                                <div class="form-clt">
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">
                                            Sort by Popular
                                        </span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected focus">
                                                Default sorting
                                            </li>
                                            <li data-value="1" class="option">
                                                Sort by popularity
                                            </li>
                                            <li data-value="1" class="option">
                                                Sort by average rating
                                            </li>
                                            <li data-value="1" class="option">
                                                Sort by latest
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="car-list-items style-2">
                                    <div class="car-image bg-cover"
                                        style="background-image: url('assets/img/car/car-5.webp');">
                                        <div class="post-cat">
                                            2024 Model
                                        </div>
                                    </div>
                                    <div class="car-content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span>2 Reviews</span>
                                        </div>
                                        <h6 class="price">$70.00 <span>/ Day</span></h6>
                                        <h3><a href="car-details.html">Hyundai Accent Limited</a></h3>
                                        <p>
                                            To deliver on the promise of technology and human ingenuity We help our clients
                                            become the next and best versions of themselves.
                                        </p>
                                        <ul class="icon-items">
                                            <li>
                                                <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                                6 Seats
                                            </li>
                                            <li>
                                                <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                                2 Doors
                                            </li>
                                            <li>
                                                <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                                Automatic
                                            </li>
                                            <li>
                                                <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                                Petrol
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="car-list-items style-2">
                                    <div class="car-image bg-cover"
                                        style="background-image: url('assets/img/car/car-6.webp');">
                                        <div class="post-cat">
                                            2024 Model
                                        </div>
                                    </div>
                                    <div class="car-content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span>2 Reviews</span>
                                        </div>
                                        <h6 class="price">$70.00 <span>/ Day</span></h6>
                                        <h3><a href="car-details.html">Hyundai Accent Limited</a></h3>
                                        <p>
                                            To deliver on the promise of technology and human ingenuity We help our clients
                                            become the next and best versions of themselves.
                                        </p>
                                        <ul class="icon-items">
                                            <li>
                                                <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                                6 Seats
                                            </li>
                                            <li>
                                                <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                                2 Doors
                                            </li>
                                            <li>
                                                <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                                Automatic
                                            </li>
                                            <li>
                                                <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                                Petrol
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="car-list-items style-2">
                                    <div class="car-image bg-cover"
                                        style="background-image: url('assets/img/car/car-7.webp');">
                                        <div class="post-cat">
                                            2024 Model
                                        </div>
                                    </div>
                                    <div class="car-content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span>2 Reviews</span>
                                        </div>
                                        <h6 class="price">$70.00 <span>/ Day</span></h6>
                                        <h3><a href="car-details.html">Hyundai Accent Limited</a></h3>
                                        <p>
                                            To deliver on the promise of technology and human ingenuity We help our clients
                                            become the next and best versions of themselves.
                                        </p>
                                        <ul class="icon-items">
                                            <li>
                                                <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                                6 Seats
                                            </li>
                                            <li>
                                                <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                                2 Doors
                                            </li>
                                            <li>
                                                <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                                Automatic
                                            </li>
                                            <li>
                                                <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                                Petrol
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="car-list-items style-2">
                                    <div class="car-image bg-cover"
                                        style="background-image: url('assets/img/car/car-8.webp');">
                                        <div class="post-cat">
                                            2024 Model
                                        </div>
                                    </div>
                                    <div class="car-content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span>2 Reviews</span>
                                        </div>
                                        <h6 class="price">$70.00 <span>/ Day</span></h6>
                                        <h3><a href="car-details.html">Hyundai Accent Limited</a></h3>
                                        <p>
                                            To deliver on the promise of technology and human ingenuity We help our clients
                                            become the next and best versions of themselves.
                                        </p>
                                        <ul class="icon-items">
                                            <li>
                                                <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                                6 Seats
                                            </li>
                                            <li>
                                                <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                                2 Doors
                                            </li>
                                            <li>
                                                <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                                Automatic
                                            </li>
                                            <li>
                                                <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                                Petrol
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="car-list-items style-2">
                                    <div class="car-image bg-cover"
                                        style="background-image: url('assets/img/car/car-9.webp');">
                                        <div class="post-cat">
                                            2024 Model
                                        </div>
                                    </div>
                                    <div class="car-content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span>2 Reviews</span>
                                        </div>
                                        <h6 class="price">$70.00 <span>/ Day</span></h6>
                                        <h3><a href="car-details.html">Hyundai Accent Limited</a></h3>
                                        <p>
                                            To deliver on the promise of technology and human ingenuity We help our clients
                                            become the next and best versions of themselves.
                                        </p>
                                        <ul class="icon-items">
                                            <li>
                                                <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                                6 Seats
                                            </li>
                                            <li>
                                                <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                                2 Doors
                                            </li>
                                            <li>
                                                <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                                Automatic
                                            </li>
                                            <li>
                                                <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                                Petrol
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="car-list-items style-2">
                                    <div class="car-image bg-cover"
                                        style="background-image: url('assets/img/car/car-10.webp');">
                                        <div class="post-cat">
                                            2024 Model
                                        </div>
                                    </div>
                                    <div class="car-content">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span>2 Reviews</span>
                                        </div>
                                        <h6 class="price">$70.00 <span>/ Day</span></h6>
                                        <h3><a href="car-details.html">Hyundai Accent Limited</a></h3>
                                        <p>
                                            To deliver on the promise of technology and human ingenuity We help our clients
                                            become the next and best versions of themselves.
                                        </p>
                                        <ul class="icon-items">
                                            <li>
                                                <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                                6 Seats
                                            </li>
                                            <li>
                                                <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                                2 Doors
                                            </li>
                                            <li>
                                                <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                                Automatic
                                            </li>
                                            <li>
                                                <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                                Petrol
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
