<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostModelController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function() {
    return "test";
});

Route::get('/index', [PostModelController::class, 'index']);

Route::post('/add', [PostModelController::class, 'add']);

Route::delete('/delete', [PostModelController::class, 'delete']);

Route::put('/update', [PostModelController::class, 'update']);
