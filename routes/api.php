<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::get('index', [\App\Http\Controllers\Api\CitizenController::class, 'index'])->middleware('auth:sanctum');
Route::get('citizen-store', [\App\Http\Controllers\Api\CitizenController::class, 'store'])->middleware('auth:sanctum');
