<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $achievements = Achievement::all();
        return response()->json($achievements);
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
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'winner_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string'
        ]);

        $imagePath = $request->file('image')->store('achievements', 'public');

        $achievement = Achievement::create([
            'image' => $imagePath,
            'winner_name' => $request->winner_name,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Achievement successfully added',
            'data' => $achievement
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
