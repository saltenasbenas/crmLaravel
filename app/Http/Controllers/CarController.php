<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\CarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car::all();
        return view('cars.cars', ['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $owners= Owner::all();
       return view('cars.create', ['owners'=>$owners]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {
       
        
//         $request->validate([
//         'reg_number'=> 'required| min:3|max:6',
//         'brand'=> 'required',
//         'model'=> 'required',
//         'owner_id'=> 'required|numeric',
    
//         ]);
        
        
        $car=new Car();
        $car->fill($request->all());
        $car->save();
        return redirect()->route("cars.index");
        
    }
 
    /**
     * Display the specified resource.
     *  Redirectas tiesiai i funkcija index
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        $owners= Owner::all();
        return view('cars.show', ['car'=>$car, 'owners'=>$owners]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $owners= Owner::all();
        return view('cars.edit', ['car'=>$car, 'owners'=>$owners]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(CarRequest $request, Car $car)
    {
        $car->fill($request->all());
        $car->save();
        return redirect()->route("cars.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);
        return redirect()->route("cars.index");
    }
}
