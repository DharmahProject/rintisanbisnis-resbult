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
    return view('user/home');
});
Route::get('/storedetail', function () {
    return view('user/storedetail');
});
Route::get('/contactus', function () {
    return view('user/contactus');
});
Route::get('/aboutus', function () {
    return view('user/aboutus');
});
