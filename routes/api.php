<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TodoController;

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


Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('admin-login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('register', [App\Http\Controllers\AuthController::class, 'store']);

// protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
    Route::resource('users', UserController::class);
    Route::resource('client', ClientController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('todo', TodoController::class);
});