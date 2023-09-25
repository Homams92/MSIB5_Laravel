<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\depan;
use App\Http\Controllers\profile;
use App\Http\Controllers\univ;

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
    return view('welcome');
});
route::get('/depan',[depan::class,'index']);
route::get('/profile',[profile::class,'index']);
route::get('/univ',[univ::class,'index']);
