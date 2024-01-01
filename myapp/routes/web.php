<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example01Controller;
use App\Http\Controllers\Example02Controller;
use App\Http\Controllers\Example03Controller; 
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\ImportController;

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
    return view('example01/home');
});

// Route::get('/', [Example01Controller::class, 'home']);
Route::get('/news', [Example01Controller::class, 'news']);
Route::get('/apple', [Example01Controller::class, 'apple']);
Route::get('/apple', [Example01Controller::class, 'apple']);

// Example 02

Route::get('/frm_ex01', [Example02Controller::class, 'ex01']);
Route::post('/frm_ex01', [Example02Controller::class, 'ex01_submit']);
Route::get('/frm_ex02', [Example02Controller::class, 'ex02']);
Route::post('/frm_ex02', [Example02Controller::class, 'ex02_submit']);
Route::get('/frm_ex03', [Example02Controller::class, 'ex03']);
Route::post('/frm_ex03', [Example02Controller::class, 'ex03_submit']);
Route::get('/frm_ex04', [Example02Controller::class, 'ex04']);
Route::post('/frm_ex04', [Example02Controller::class, 'ex04_submit']);

Route::resource('products', App\Http\Controllers\ProductController::class);
