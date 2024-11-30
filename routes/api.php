<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\API_AuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// url/api/register

// Open Routes
Route::post('register', [API_AuthController::class, 'register']);
Route::post('login', [API_AuthController::class, 'login']);

// Protected Routes
// Route::group([
//     "middleware" => ["auth:api"]
// ], function () {
//     Route::get("profile", [API_AuthController::class, "profile"]);
//     Route::get("logout", [API_AuthController::class, "logout"]);
// });