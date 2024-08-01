<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Models\Genre;

Route::get('/', function () {
    $movies = Movie::all();
    $genres = Genre::all();
    return view('Movie.index', ['movies' => $movies, 'genres' => $genres]);
});

Route::get('/genre/{genre}', [App\Http\Controllers\MovieController::class, 'show']);
Route::get('/movie/{movie}', [App\Http\Controllers\MovieController::class, 'showMovie']);
