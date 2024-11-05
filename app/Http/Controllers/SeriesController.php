<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function index()
    {
        $series = Series::all();    //Fetches series
        return view('series.index', compact('series'));     //Returns view with series

    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
         
         //validates input
         $request->validate([
             'title' => 'required',
             'description' => 'required|max:500',
             'year' => 'required|integer',
             'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
         ]);
 
         if ($request->hasFile('image')) {
 
             $imageName = time().'.'.$request->image->extension();
             $request->image->move(public_path('images/series'), $imageName);

         }
 
         Series::create([
             'title' => $request->title,
             'description' => $request->description,
             'year' => $request->year,
             'image' => $imageName,
             'created_at' => now(),
             'updated_at' => now()
         ]);
 
         return to_route('series.index')->with('success', 'Series created successfully!');
     }

    /**
     * Display the specified resource.
     */

    public function show($id)
{
    $series = Series::findOrFail($id);  // Fetch the series by ID

    return view('series.show', compact('series'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $series = Series::findOrFail($id);  //Finds series by id, if not found an error 404 will appear
        return view('series.edit', compact('series'));  //returns view for specific series
    }
    
    public function update(Request $request, $id)
    {
        $series = Series::findOrFail($id);
        $series->update($request->all());   //Updates series with the data received from request
        return redirect()->route('series.index')->with('success', 'Series updated successfully!'); //Redirects to success page with text
    }
    
    public function destroy($id)
    {
        $series = Series::findOrFail($id);
        $series->delete();      //deletes series from the database
        return redirect()->route('series.index')->with('success', 'Series deleted successfully!');
    }
}
