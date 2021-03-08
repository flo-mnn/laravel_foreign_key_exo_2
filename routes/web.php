<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ColorController;
use App\Models\Car;
use App\Models\Color;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',[
        'cars'=>Car::all(),
        'colors'=>Color::all()
    ]);
});
Route::resource('colors',ColorController::class);
Route::resource('cars',CarController::class);
