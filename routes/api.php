<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\authController;

Route::post('/registeruser', [authController::class, 'register']);
Route::post('/loginuser', [authController::class, 'login']); // This is correct for login
Route::middleware('auth:sanctum')->get('/user', [authController::class, 'user']); // This should be a GET request