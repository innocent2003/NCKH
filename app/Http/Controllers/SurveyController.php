<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SurveyController extends Controller
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
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    // Validate the request
    $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif',
        'video' => 'mimetypes:video/mp4',
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
    }

    // Handle video upload
    if ($request->hasFile('video')) {
        $videoPath = $request->file('video')->store('videos', 'public');
    }

    // Save data to the database
    Survey::create([
        'user_id' => auth()->id(),
        'image' => $imagePath ?? null,
        'video' => $videoPath ?? null,
        'information' => $request->input('information'),
    ]);

    return redirect()->back()->with('success', 'Survey created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        //
    }
}
