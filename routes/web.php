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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home.index');
Route::post('/result', [App\Http\Controllers\IndexController::class, 'result'])->name('home.result');

Route::get('/rajaongkir', [App\Http\Controllers\IndexController::class, 'rajaongkir'])->name('home.rajaongkir');
Route::post('/rajaongkir/result', [App\Http\Controllers\IndexController::class, 'rajaongkirResult'])->name('home.rajaongkir.result');