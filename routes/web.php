<?php

use App\Http\Controllers\GedungBaruController;
use App\Http\Controllers\GedungLamaController;
use App\Http\Controllers\GedungBiotekController;
use App\Http\Controllers\GedungSiskomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Session;
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

Route::get('locale/{locale}',function($locale){
    \Session::put('locale', $locale);
    return redirect()->back();
});

Route::resource('/', BerandaController::class );

Route::get('/virtualtour', function () {
    return view('user/virtualtour');
});
Route::get('/virtualtour/gedungbaru', function () {
    return view('user/virtualtour/gedungbaru');
});
Route::get('/virtualtour/gedunglama', function () {
    return view('user/virtualtour/gedunglama');
});
Route::get('/virtualtour/gedungbiotek', function () {
    return view('user/virtualtour/gedungbiotek');
});
Route::get('/virtualtour/gedungsiskom', function () {
    return view('user/virtualtour/gedungsiskom');
});


Route::resource('/dashboard', DashboardController::class )->middleware('auth');
Route::resource('/gedungbaru', GedungBaruController::class )->middleware('auth');
Route::resource('/gedunglama', GedungLamaController::class )->middleware('auth');
Route::resource('/gedungbiotek', GedungBiotekController::class )->middleware('auth');
Route::resource('/gedungsiskom', GedungSiskomController::class )->middleware('auth');

Route::get('/admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


