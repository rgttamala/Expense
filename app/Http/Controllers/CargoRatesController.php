<?php

namespace App\Http\Controllers;

use App\CargoRates;
use Illuminate\Http\Request;

class CargoRatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargorates = CargoRates::all();
        return view('cargorates.index')->with('cargorates', $cargorates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargorates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargorates = new CargoRates();
        $cargorates->origin = $request->input('origin');
        $cargorates->destination = $request->input('dest');
        $cargorates->route = $request->input('route');
        $cargorates->trucktype = $request->input('trucktype');   
        $cargorates->cargoname = $request->input('cargoname');   
        $cargorates->rate = $request->input('rate');   
        $cargorates->save();
        $cargpratesId = $cargorates->id;
        return redirect('/cargorates')->with('success', 'Cargo Rates Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CargoRates  $cargoRates
     * @return \Illuminate\Http\Response
     */
    public function show(CargoRates $cargoRates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CargoRates  $cargoRates
     * @return \Illuminate\Http\Response
     */

    public function editCargoRates(Request $request, $id){
    
        $cargorates = CargoRates::findOrFail($id);
        return view('cargorates.edit')->with('cargorates', $cargorates);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CargoRates  $cargoRates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cargorates = CargoRates::findOrFail($id);
        $cargorates->origin = $request->input('origin');
        $cargorates->destination = $request->input('dest');
        $cargorates->route = $request->input('route');
        $cargorates->trucktype = $request->input('trucktype');   
        $cargorates->cargoname = $request->input('cargoname');   
        $cargorates->rate = $request->input('rate');   
        $cargorates->update();
        
        return redirect('/cargorates')->with('success', 'Cargo Rates Updated Sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CargoRates  $cargoRates
     * @return \Illuminate\Http\Response
     */
    public function destroy(CargoRates $cargoRates)
    {
        return 'henlo';
    }
}
