<?php

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


Route::get('/blockchain', [App\Http\Controllers\DesktopController::class, 'view']);

Route::get('/blockchain/check', [App\Http\Controllers\DesktopController::class, 'checkData']);

Route::post('/blockchain', [App\Http\Controllers\DesktopController::class, 'store'])->name('blockchain.store');



Route::get('/', function () {
    return view('welcome');
});


