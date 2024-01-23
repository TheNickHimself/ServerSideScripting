<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class CarController extends Controller
{
    public function index()
    {
        $makes = Manufacturer::orderBy('name')->pluck('name', "id") ->prepend('All Car Makes', '');
        if (request('manufacturer_id') == null) {
            $cars = Car::all();
        } else {
            $cars = Car::where('id', request('manufacturer_id'))->get();
        }
        return view('cars.index', compact('cars','makes'));
    }
    public function create()
    {
        $makes = Manufacturer::all();
        return view('cars.create', compact('makes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ]);
        //dd($request->all());

        Car::create($request->all());
        return redirect()->route('cars.index')->with('message', 'The new car was adeed successfully'); 
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::find($id);
        $makes = Manufacturer::all();
        return view('cars.edit', compact('makes', 'car'));
    }
    
    public function destroy ($id)
    {
        $car = Car::find($id);
        $car->delete();
        return back()->with('message', 'Car has been removed from sale');
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => 'required|exists:manufacturers,id'
        ]);

        $car = Car::find($id);
        $car->update($request->all());

        return redirect()->route('cars.index')->with('message', 'Car has been updated!');
    }
}
