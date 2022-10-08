<?php

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
    $list=country_list();
    return view('home',compact('list'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/get-cities', [App\Http\Controllers\HomeController::class, 'getCities']);
Route::post('/get-weather', [App\Http\Controllers\HomeController::class, 'getWeather']);