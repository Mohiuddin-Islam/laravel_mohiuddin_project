@extends('backend.layouts.app')

@section('css')
<!-- App favicon -->
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

<!-- App css -->
<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons -->
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section('js')
<!-- Vendor -->
<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>

<!-- App js-->
<script src="{{asset('assets/js/app.js')}}"></script>
@endsection

@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Profile</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card d-flex align-items-center justify-content-center">
                    <img src="{{asset($carlist->image)}}" class="rounded-top-2 " alt="image data" style="width: 300px">

                    <div class="card-body">
                        <div class="align-items-center">
                            
                            <div class="silva-main-sections">
                                

                                <div class="overflow-hidden ms-md-4 ms-0">
                                    <h4 class="m-0 text-dark fs-20 mt-2 mt-md-0">Brand: {{$carlist->brand}}</h4>
                                    <h4 class="m-0 text-dark fs-20 mt-2 mt-md-0">Model: {{$carlist->model}}</h4>
                                    <h4 class="m-0 text-dark fs-20 mt-2 mt-md-0">Engine: {{$carlist->engine}}</h4>
                                    <h4 class="m-0 text-dark fs-20 mt-2 mt-md-0">Price: {{$carlist->price_per_day}}</h4>
                                    <h4 class="m-0 text-dark fs-20 mt-2 mt-md-0">Status: {{$carlist->status}}</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

       

    </div> 
    <!-- container-fluid -->
</div>
@endsection