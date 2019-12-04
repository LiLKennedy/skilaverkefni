<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MovieController extends Controller
{
    public function Show($slug)
    {
        $movie=\DB::table('movies')->where('slug', $slug)->first();
        // if (! array_key_exists($movie, $movies)){
        // abort(404,"Sorry this page doesn't exsist.");
        // }

        return view('movie', ['movie' => $movie]);
        
    }
    
    public function Index()
    {
        $movies=\DB::table('movies')->orderBy('id', 'desc')->get();
        return view('index', ['movies' => $movies]);
    }

    public function Create()
    {
        return view('create');
    }

    public function Store(Request $request)
    {
        $path = $request->file('poster')->store('img', ['disk' => 'public']);
        $slug = Str::slug(request('name'), '-');
        $movie = new Movie();

        $movie->name = request('name');
        $movie->rating = request('rating');
        $movie->genre = request('genre');
        $movie->description = request('description');
        $movie->poster = $path;
        $movie->release_date = request('release_date');
        $movie->slug = $slug;

        $movie->save();

        return redirect('/');
    }
}

