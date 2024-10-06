<?php

use App\Http\Controllers\FrontController;
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

Route::controller(FrontController::class)->name('front.')->group(function () {
    Route::get('/set-city/{city}', 'setCity')->name('setCity');
    Route::get('/detect-city', 'detectCity')->name('detectCity');
    Route::get('/', 'index')->name('index');
});
