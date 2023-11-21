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

Route::get('/', [Controller::class,'login'])->name('login');
Route::get('loading', [Controller::class,'loading'])->name('loading');
Route::get('calendario', [Controller::class,'calendario'])->name('calendario');