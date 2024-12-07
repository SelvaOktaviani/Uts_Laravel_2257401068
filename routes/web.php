<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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
})->name('welcome');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/daftar', function() {
    return view('daftar');
})->name('daftar');

Route::POST('/logout', function() {
    Auth::logout();
    return redirect()->route('welcome');
})->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');