<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function showMovie($order)
    {
        if ($order == 'asc') {
            return Movie::orderBy('id', 'asc')->get();
        } else {
            return Movie::orderBy('id', 'desc')->get();
        }
    }

    public function showMovieById($id)
    {
        return Movie::find($id);
    }

    public function update (Request $resquest, Movie $movie)
    {
        $movie->update($resquest->all());
        return response()->json($movie);
    }

    public function store(Request $request)
    {
        $movie = Movie::create($request->all());
        return response()->json($movie);
    }
}
