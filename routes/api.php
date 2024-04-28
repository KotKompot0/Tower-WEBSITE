<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BoardGameController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', [UserController::class, 'getUser']);
    Route::patch('/user/update', [UserController::class, 'update']);
});

Route::apiResources([
    'activities' => ActivityController::class,
    'games' => BoardGameController::class,
]);

//Route::get('/get', UserController::class);
