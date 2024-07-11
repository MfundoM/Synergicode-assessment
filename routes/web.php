<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('contactus');
});

Route::post('/contactus', 'App\Http\Controllers\ContactUsController@store')->name('contactus.store');
Route::get('/success', 'App\Http\Controllers\ContactUsController@success')->name('show.success');
