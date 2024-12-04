@extends('frontend.layouts.app')

@section('content')
    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/banner.jpg');">
        <div class="container">
            <div class="page-heading">
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                    <li>
                        <a href="{{route('home')}}">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li>
                        blog
                    </li>
                </ul>
                <h1 class="wow fadeInUp" data-wow-delay=".5s">blog</h1>
            </div>
        </div>
    </div>

    <!-- News Section Start -->
    <section class="news-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/01.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    20 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
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
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/02.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    26 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
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
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/03.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    29 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
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
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/04.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    20 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
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
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/05.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    26 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
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
                    <div class="news-card-items mt-0">
                        <div class="news-image">
                            <img src="assets/img/news/06.webp" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    29 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.webp" alt="img">
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
@endsection
