<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Carlist;
use Illuminate\Http\Request;

class CarlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Carlist::orderBy('id', 'desc')->get();
        return view('backend.carlist.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.carlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carlist = new Carlist;

        $carlist->brand = $request->brand;
        $carlist->model = $request->model;
        $carlist->engine = $request->engine;
        $carlist->price_per_day = $request->price;
        $carlist->image = $request->image;
        $carlist->status = $request->status;

        $carlist->save();
        return redirect()->route('carlist.index')->with('msg', "Create Successfully");
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Carlist $carlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carlist $carlist)
    {
        return view('backend.carlist.edit',compact('carlist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carlist $carlist)
    {
        $carlist->brand = $request->brand;
        $carlist->model = $request->model;
        $carlist->engine = $request->engine;
        $carlist->price_per_day = $request->price;
        $carlist->image = $request->image;
        $carlist->status = $request->status;

        $carlist->update();
        return redirect()->route('carlist.index')->with('msg', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carlist $carlist)
    {
        $carlist->delete();

        return redirect()->route('carlist.index')->with('msg', 'Deleted Successfully');
    }
}
