<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

       $popularMovies =  Movie::latest()->paginate(100);
       // $popularMovies = Movie::all()->toArray(); // Get Movies

        return view('home', compact('popularMovies')); // Send the movies list to the `View`
    }
}
