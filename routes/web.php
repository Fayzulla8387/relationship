<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KitobController;
use App\Http\Controllers\MuallifiController;

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

//Route::get('/', function () {
//    return view('kitob.index');
//});
//Route::get('/', function () {
//    return view('kitob.index');
//});
Route::get('/',[\App\Http\Controllers\KitobController::class, 'index']);
Route::post('/kitob_store',[\App\Http\Controllers\KitobController::class, 'store'])->name('kitob_store');
Route::resource('kitob', \App\Http\Controllers\KitobController::class,);
Route::resource('muallif', \App\Http\Controllers\MuallifiController::class,);
