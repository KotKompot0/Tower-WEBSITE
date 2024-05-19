<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\BoardGameController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'activities' => ActivityController::class,
    'games' => BoardGameController::class,
]);

// Public routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::resource('tasks', TaskController::class);
    Route::patch('/user/update', [UserController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);
});




