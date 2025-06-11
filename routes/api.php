<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Public routes for unauthenticated users
// Use POST /api/register for user registration
Route::post('/users/register', [UserController::class, 'store']);
// Use POST /api/login for user login
Route::post('/users/login', [UserController::class, 'login']);

// Authenticated routes (require a Sanctum token)
Route::middleware('auth:sanctum')->group(function () {

    // These are the resource routes for users.
    // 'except("store")' means that POST /api/users is NOT supported here.
    // All other standard resource methods (GET, PUT, DELETE for /users) ARE supported, but only for authenticated users.
    Route::apiResource('/users', UserController::class)->except('store');

    // Example: Get the authenticated user's details
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
