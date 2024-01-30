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
    return view('dashboard.home');
});
Route::get('/login', function () {
    return view('logs.login');
});
Route::get('/forgot', function () {
    return view('logs.forgot');
});
Route::get('/regis', function () {
    return view('logs.regis');
});
Route::get('/reset', function () {
    return view('logs.reset');
});
