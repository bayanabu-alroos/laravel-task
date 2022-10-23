<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;

class AdminController extends Controller
{

    public function index()
    {

        $popularMovies =  Movie::latest()->paginate(100);

         return view('admin.movies', compact('popularMovies'));
    }

}
