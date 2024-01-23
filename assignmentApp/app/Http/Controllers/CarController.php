<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }
    public function create()
    {
        
        return view('cars.create', compact('cars'));
    }

    public function show($id)
    {
        return view('cars.show');
        //$cars = Car::find($id);
        //return view('cars.show', compact('cars'));
    }
}
