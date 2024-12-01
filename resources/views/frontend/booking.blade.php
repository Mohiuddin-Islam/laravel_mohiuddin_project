@extends('frontend.layouts.app')

@section('content')

 <!-- Car Details Section Start -->
 <section class="car-details fix section-padding">
    <div class="container">
        <div class="car-details-wrapper">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="car-details-items">
                        <div class="car-image">
                            <img src="{{asset('assets/img/car/car-details.jpg')}}" alt="img">
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
                            <h3>Hyundai Accent Limited</h3>
                            <h6>$70.00 <span>/ Day</span></h6>
                            <p class="mt-4 mb-4">
                                To deliver on the promise of technology and human We help our clients become sions of themselves. Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem ipsum has been the industry’s standard dummy text ever since the 1500s.
                            </p>
                            <div class="icon-details-area">
                                <h4>Key Features</h4>
                                <div class="icon-details-main-items">
                                    <div class="icon-items">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/car/icon/07.png')}}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h6>body:</h6>
                                            <p>Sedan</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/car/icon/07.png')}}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h6>Mileage:</h6>
                                            <p>70.000 (Mi)</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/car/icon/07.png')}}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h6>Year:</h6>
                                            <p>2024</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/car/icon/07.png')}}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h6>Engine:</h6>
                                            <p>2500 cc</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-details-main-items">
                                    <div class="icon-items">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/car/door.svg')}}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h6>Passengers:</h6>
                                            <p>6 Seats</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/car/seat.svg')}}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h6>Gear:</h6>
                                            <p>Automatic</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/car/automatic.svg')}}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h6>Gear:</h6>
                                            <p>Automatic</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <img src="{{asset('assets/img/car/petrol.svg')}}" alt="img">
                                        </div>
                                        <div class="content">
                                            <h6>Fuel:</h6>
                                            <p>Petrol</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-table-area">
                                <h6>Table Price <span>( by day of the week )</span></h6>
                                <div class="price-table-items section-bg">
                                    <p>Monday</p>
                                    <p>$70.00</p>
                                </div>
                                <div class="price-table-items">
                                    <p>Tuesday</p>
                                    <p>$70.00</p>
                                </div>
                                <div class="price-table-items section-bg">
                                    <p>Wednesday</p>
                                    <p>$70.00</p>
                                </div>
                                <div class="price-table-items">
                                    <p>Thursday</p>
                                    <p>$70.00</p>
                                </div>
                                <div class="price-table-items section-bg">
                                    <p>Friday</p>
                                    <p>$70.00</p>
                                </div>
                                <div class="price-table-items">
                                    <p>Saturday</p>
                                    <p>$70.00</p>
                                </div>
                                <div class="price-table-items section-bg">
                                    <p>Sunday</p>
                                    <p>$70.00</p>
                                </div>
                            </div>
                            <div class="car-video">
                                <img src="{{asset('assets/img/car/car-details-2.jpg')}}" alt="img">
                                <div class="video-box">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="car-booking-items">
                        <div class="booking-header">
                            <h3>Request for Booking</h3>
                            <p>Send your requirement to us. We will check email and contact you soon.</p>
                        </div>
                        <form action="#" id="contact-form" method="POST" class="contact-form-items">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">Your Name</label>
                                        <input type="text" name="name" id="name" placeholder="Afzaal Islam">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">Email</label>
                                        <input type="text" name="email" id="email" placeholder="pixydrops@gmail.com">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">Phone Number</label>
                                        <input type="text" name="phone" id="phone" placeholder="+ 00 0000 - 000">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">Details</label>
                                        <input type="text" name="details" id="address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-clt">
                                        <label class="label-text">Pick-up Location</label>
                                        <div class="category-oneadjust">
                                            <select name="cate" class="category" style="display: none;">
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
                                            </select><div class="nice-select category" tabindex="0"><span class="current">
                                                    Select Location
                                                </span><ul class="list"><li data-value="1" class="option selected">
                                                    Select Location
                                                </li><li data-value="1" class="option">
                                                    Houston
                                                </li><li data-value="1" class="option">
                                                    Texas
                                                </li><li data-value="1" class="option">
                                                    New York
                                                </li><li data-value="1" class="option">
                                                    Other Location
                                                </li></ul></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-clt">
                                        <label class="label-text">Pick-up Date</label>
                                        <div id="datepicker3" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="Check in" readonly>
                                            <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-clt">
                                        <label class="label-text">Drop-off Date</label>
                                        <div id="datepicker4" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="Check in" readonly>
                                            <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="input-save-items-area">
                                        <div class="input-save-items">
                                            <div class="input-save d-flex align-items-center mb-3">
                                                <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext1">
                                                <label for="saveForNext1">Driver</label>
                                            </div>
                                            <div class="input-save d-flex align-items-center">
                                                <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext2">
                                                <label for="saveForNext2">Baby Seat</label>
                                            </div>
                                        </div>
                                        <div class="input-save-items">
                                            <div class="input-save d-flex align-items-center mb-3">
                                                <label>$10.00 / Day</label>
                                            </div>
                                            <div class="input-save d-flex align-items-center">
                                                <label>$30.00 / Total</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="theme-btn" type="submit">
                                        Send Request
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                
                </div>
                <div class="col-lg-4">
                    <div class="car-list-sidebar">
                        <h4 class="title">Booking Form</h4>
                        <form action="{{ route('booking.store') }}" id="contact-form2" method="POST" class="contact-form-items" style="background-color: black">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text" style="color: white">CarList</label>
                                        <div class="rr-form-input-box pb-30" style="background-color: white">
                                            <select name="carlist" style="display: none;">
                                                <option value="">Choose Car</option>
                                                @foreach ($carlists as $carlist)
                                                <option value="{{ $carlist->id }}" @selected(old('carlist')==$carlist->id)>{{$carlist->brand}}</option>
                                            @endforeach

                                            </select>
    
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Your Name</label>
                                        <input type="text" name="name" id="name" placeholder="Afzaal Islam">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Email</label>
                                        <input type="text" name="email" id="email" placeholder="pixydrops@gmail.com">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Phone Number</label>
                                        <input type="text" name="phone" id="phone" placeholder="+ 00 0000 - 000">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Details</label>
                                        <input type="text" name="details" id="address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text" style="color: white">Pick-up Date</label>
                                        <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" name="date" type="text" placeholder="Check in" readonly>
                                            <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Drop-off Date</label>
                                        <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="Check in" readonly>
                                            <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div> --}}
                                
                                
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                    <button type="submit" class="theme-btn">Book Now</button>
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

@endsection