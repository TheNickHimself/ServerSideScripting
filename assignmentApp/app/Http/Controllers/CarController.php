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
        $cars = Manufacturer::all();
        return view('cars.create');
    }

    public function show($id)
    {
        $cars = Car::find($id);
        return view('cars.show', compact('cars'));
    }
}
