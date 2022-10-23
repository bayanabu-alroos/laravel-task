<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMovieRequest $request)
    {
        $request->validate([
            'movie_name' => 'required',
            'movie_description' => 'required',
            'movie_gener' => 'required',
            'movie_img' => 'required'
        ]);

        // Movie::create($request->all());

        if ($movie_img = $request->file('movie_img')) {
            $destinationPath = 'movie_img/';
            $profileImage = date('YmdHis') . "." . $movie_img->getClientOriginalExtension();
            $movie_img->move($destinationPath, $profileImage);
            $input['movie_img'] = "$profileImage";
        }

        Movie::create($request->all());
        return redirect()->route('admin.index')
                    ->with('success','Movie created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {

        return view('movie.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMovieRequest  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {

        $request->validate([
            'movie_name' => 'required',
            'movie_description' => 'required',
            'movie_gener' => 'required',
            'movie_img' => 'required'
        ]);

        // $movie->update($request->all());


        if ($movie_img = $request->file('movie_img')) {
            $destinationPath = 'movie_img/';
            $profileImage = date('YmdHis') . "." . $movie_img->getClientOriginalExtension();
            $movie_img->move($destinationPath, $profileImage);
            $input['movie_img'] = "$profileImage";
        } 
        $movie->update($request->all());

          
        return redirect()->route('admin.index')->with('success','Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {

        $movie->delete();
        
        return redirect()->route('admin.index')->with('success','Movie deleted successfully');

    }
}