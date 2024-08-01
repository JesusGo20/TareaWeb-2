<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function show(Genre $genre)
    {
        $movies = Movie::where('genre_id', $genre->id)->get();
        return view('Movie.show', ['genre' => $genre, 'movies' => $movies]);
    }

    public function showMovie(Movie $movie)
    {
        return view('Movie.showMovie', ['movie' => $movie]);
    }
}
