<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    Route::get('/', 'index')->name('index');
    Route::get('/set-city/{city}', 'setCity')->name('setCity');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacyPolicy');
});
