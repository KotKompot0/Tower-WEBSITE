<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
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

Auth::routes();

Route::get('{any?}',  IndexController::class)->where('any', '.*');


Route::post('/image/store', [ImageController::class, 'store'])->name('image.store');

//Route::get('/test', [\App\Http\Controllers\ActivityController::class, 'index'])->name('test');
