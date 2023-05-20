<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('layouts.landing');
});
Route::get('/detail', function () {
    return view('includes.details');
});
Route::get('/checkout', function () {
    return view('includes.checkout');
});
Route::get('/about_us', function () {
    return view('includes.tentang');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::post('login', [LoginController::class, 'login']);

Route::post('register', [LoginController::class, 'register']);

Route::post('logout', [LoginController::class, 'logout']);

