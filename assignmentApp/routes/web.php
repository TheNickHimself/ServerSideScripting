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



Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [ManufacturerController::class, 'create'])->name('cars.create');
Route::get('/cars/{id}', [ContactController::class, 'show'])->name('cars.show');