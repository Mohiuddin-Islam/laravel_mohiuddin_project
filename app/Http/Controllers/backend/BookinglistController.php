<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookinglistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Booking::orderBy('id', 'desc')->get();
        return view('backend.booking.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $booking = new Booking;

        $booking->name = $request->name;
        $booking->car_id = $request->carlist;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->details = $request->details;
        
        $booking->save();
        return redirect()->route('booking.index')->with('msg', "Add Booking Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('backend.booking.show',compact("booking"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        return view('backend.booking.edit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        $booking->name = $request->name;
        $booking->car_id = $request->carlist;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->details = $request->details;
        
        $booking->update();
        return redirect()->route('booking.index')->with('msg', "Booking Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('booking.index')->with('msg', 'Booking Deleted Successfully');
    }
}
