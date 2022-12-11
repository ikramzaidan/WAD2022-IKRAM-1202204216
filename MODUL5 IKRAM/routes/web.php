<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use App\Http\Controllers\Showroom;
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

Route::get('/', [Home::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::get('/showroom', [Showroom::class, 'index']);
    Route::get('/showroom/create', [Showroom::class, 'create']);
    Route::post('/showroom/create', [Showroom::class, 'store']);
    Route::get('/logout', [Login::class, 'destroy']);
});

Route::get('/login', [Login::class, 'index']);
Route::post('/login', [Login::class, 'auth']);
Route::get('/register', [Register::class, 'index']);
Route::post('/register', [Register::class, 'store']);
