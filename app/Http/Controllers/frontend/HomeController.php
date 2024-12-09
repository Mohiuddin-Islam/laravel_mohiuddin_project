<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CarList;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $carlists = CarList::orderBy('brand')->limit(9)->get();
        return view('frontend.home',compact('carlists'));
        // return view('frontend.home');
    }

    public function car_show(){
        $carlists = CarList::all();
        return view('frontend.car',compact('carlists'));
    }
}
