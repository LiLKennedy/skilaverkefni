<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function Show($slug)
    {
        $movie=\DB::table('movies')->where('slug', $slug)->first();
        // if (! array_key_exists($movie, $movies)){
        //     abort(404,"Sorry this page doesn't exsist.");
        // }

        return view('welcome',[movie=>$movie]);
        
    }
    
}
