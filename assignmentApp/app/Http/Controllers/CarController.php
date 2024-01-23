<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('cars.index');
    }
    public function create()
    {
        return view('cars.create');
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }
}
