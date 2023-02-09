<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/user', [UserController::class, 'index']);

Route::get('/grad/{id}', [GradController::class, 'show']);
Route::get('/grad', [GradController::class, 'index']);
Route::delete('/grad/{id}', [GradController::class, 'destroy']);

Route::get('/hotel/{id}', [HotelController::class, 'show']);
Route::get('/hotel', [HotelController::class, 'index']);