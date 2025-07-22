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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/iletisim', function () {
  // return view('iletisim'); 
//}); 

//Route::get('/hakkimizda', function () {
  //  return view('hakkimizda');
//});


Route::controller(DeneController::class,)->group(function () {
    Route::get('/iletisim', 'iletfonksiyon')->name('ilet.yon')->middleware('yas');
Route::get('/hakkimizda', 'hakFonksiyon')->name('hak.yon');
});

