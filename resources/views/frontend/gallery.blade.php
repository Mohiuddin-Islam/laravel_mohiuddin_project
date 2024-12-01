@extends('frontend.layouts.app')

@section('content')

<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/bg-header-banner.jpg');">
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
                    Gallery
                </li>
            </ul>
            <h1 class="wow fadeInUp" data-wow-delay=".5s">Gallery</h1>
        </div>
    </div>
</div>

<!--<< Gallery Section Start >>-->
<div class="gallery-section-3 fix section-padding">
    <div class="container">
        <div class="galley-wrapper-2">
            <div class="gallery-items">
                <div class="g-items">
                    <img src="assets/img/gallery/g-14.jpg" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/g-14.jpg" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="assets/img/gallery/g-15.jpg" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/g-15.jpg" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="assets/img/gallery/g-16.jpg" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/g-16.jpg" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
            </div>
            <div class="gallery-items gallery-items-two">
                <div class="g-items">
                    <img src="assets/img/gallery/g-17.jpg" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/g-17.jpg" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="assets/img/gallery/g-18.jpg" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/g-18.jpg" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
            </div>
            <div class="gallery-items gallery-items-three">
                <div class="g-items">
                    <img src="assets/img/gallery/g-19.jpg" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/g-19.jpg" class="icon img-popup-2">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="mask"></div>
                    <div class="mask-second"></div>
                </div>
                <div class="g-items">
                    <img src="assets/img/gallery/g-20.jpg" alt="ga-img">
                    <div class="icon-box">
                        <a href="assets/img/gallery/g-20.jpg" class="icon img-popup-2">
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
    
@endsection