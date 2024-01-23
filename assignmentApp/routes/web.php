<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Default route
Route::get('/', function () {
    return view('welcome');
});


Route::get('/manufacturers', [ManufacturerController::class, 'index'])->name('manufacturers.index');;
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');;
