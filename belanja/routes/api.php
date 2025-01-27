<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index']);
// Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('create', [UserController::class, 'create']);
Route::post('read', [UserController::class, 'read']);
Route::post('update', [UserController::class, 'update']);
Route::post('delete', [UserController::class, 'delete']);

