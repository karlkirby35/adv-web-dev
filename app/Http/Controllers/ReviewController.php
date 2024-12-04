<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Series;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Series $series)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        //creates review for user
        $series->reviews()->create([
            'user_id' =>  auth()->id(),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
            'series_id' => $series->id
        ]);

        return redirect()->route('series.show', $series)->with('success', 'Review added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        if(auth()->user()->id !== $review->user_id && auth()->user()->role !== 'admin') {
            return redirect()->route('series.index')->with('error', 'Access denied.');
        }

        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $review->update($request->only(['rating', 'comment']));

        //check to ensure user is authorised

        //only rating and comment can be altered, not book_id or user_id

        return redirect()->route('series.show', $review->series_id)
                        ->with('success', 'Review updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        if(auth()->user()->id !== $review->user_id && auth()->user()->role !== 'admin') {
            return redirect()->route('series.index')->with('error', 'Access denied.');
        }

        $review->delete();

        return redirect()->route('series.index', $review->id) 
        ->with('success', 'Review deleted successfully');
    }
}
