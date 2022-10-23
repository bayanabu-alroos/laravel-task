<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $movies = Movie::latest()->paginate(5);
    
        return view('movies.index',compact('movies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    /**
     * 
     * Show the form for creating a new resource.
     *
     */
    
    public function create()
    {
        return view('movies.create');
    }
    /**
     *
     *  Store a newly created resource in storage.
     *
     */
   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gener' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Movie::create($input);
     
        return redirect()->route('movies.index')
                        ->with('success','Movie created successfully.');

    }
     /**
     *
     *  Display the specified resource.
     *
     */

    public function show(Movie $movie)
    {
        return view('movies.show',compact('movie'));
    }


   
 /**
     *
     *  Show the form for editing the specified resource.
     *
     */
   
    public function edit(Movie $movie)
    {
        return view('movies.edit',compact('movie'));
    }

 /**
     *
     *  Update the specified resource in storage.
     *
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'name' => 'required',
            'gener' => 'required',
            'description' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $movie->update($input);
    
        return redirect()->route('movies.index')
                        ->with('success','Movie updated successfully');

    }

    /**
     * 
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
     
        return redirect()->route('movies.index')
                        ->with('success','Movie deleted successfully');

    }
}
