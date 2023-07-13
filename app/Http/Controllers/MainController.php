<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MainController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('vote', 'desc')->get();
        // dd($movies);

        return view('home', compact('movies'));
    }
}
