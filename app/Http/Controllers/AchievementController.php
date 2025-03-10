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
        // Ambil semua data achievements dari database
        $achievements = Achievement::all();

        // Kirim data ke view achievement.blade.php
        return view("achievements", compact("achievements"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Cari achievement berdasarkan ID
        $achievement = Achievement::findOrFail($id);

        // Kirim data ke view show.blade.php
        return view("achievement_show", compact("achievement"));
    }
}
