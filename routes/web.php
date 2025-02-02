<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/tentang',[HomeController::class,'tentang']);
Route::get('/kontak',[HomeController::class,'kontak']);
Route::get('/siswa',[SiswaController::class,'index']);
Route::match(['get','post'],'/siswa/insert',[SiswaController::class,'insert']);

