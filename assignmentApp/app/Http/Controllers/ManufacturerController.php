<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function index()
    {
        $manufacturer = Manufacturer::all();
        return view('manufacturers.index', compact('manufacturer'));
    }
}
