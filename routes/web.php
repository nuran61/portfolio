<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dene\DeneController;
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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/homepage', function () {
    return view('homepage.homepage');
});



