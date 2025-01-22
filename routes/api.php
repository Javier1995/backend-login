<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
   
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    
    //current auth user
    Route::get('user', [\App\Http\Controllers\AuthController::class, 'user']);
    Route::put('user/info', [\App\Http\Controllers\AuthController::class, 'updateInfo']);
    Route::put('user/password', [\App\Http\Controllers\AuthController::class, 'updatePassword']);


    Route::ApiResource('user', UserController::class);
    Route::apiResource('roles', \App\Http\Controllers\RoleController::class);
    Route::apiResource('products', \App\Http\Controllers\ProductController::class);
    Route::get('permissions', [\App\Http\Controllers\PermissionController::class, 'index']); 
});
