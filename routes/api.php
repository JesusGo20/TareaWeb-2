<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/order/{order}', [App\Http\Controllers\ApiController::class, 'showMovie']);
Route::get('/movie/{id}', [App\Http\Controllers\ApiController::class, 'showMovieById']);
Route::put('/update/{movie}', [App\Http\Controllers\ApiController::class, 'update']);
Route::post('/store', [App\Http\Controllers\ApiController::class, 'store']);
