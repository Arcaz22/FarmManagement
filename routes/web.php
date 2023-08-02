<?php

use App\Http\Controllers\FarmController;
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
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('/farm/search', [FarmController::class, 'search'])->name('farm.search');
Route::get('/farm/filter', [FarmController::class, 'filter'])->name('farm.filter');
Route::resource('farm', FarmController::class);
