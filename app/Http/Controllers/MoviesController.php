<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //
    public function index(){
        return view('movies');
    }

    public function viewForm(){
        return view('add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'duration' => 'required|integer|min:1',
            'release_year' => 'required|integer|min:1900|max:' . date('Y'),
            'genre' => 'nullable|string',
            'language' => 'nullable|string',
            'director' => 'nullable|string',
            'starring' => 'nullable|string',
            'subtitles' => 'nullable|string',
            'rating' => 'required|string|in:N-7,N-13,N-16,N-18',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $filePath = $file->store('posters', 'public'); // Store in 'storage/app/public/posters'
            $validated['poster_url'] = '/storage/' . $filePath; // Save URL to DB
        }

        // Create a new movie with the validated data
        Movies::create($validated);

        return redirect()->route('movies')->with('success', 'Movie added successfully!');
    }
}
