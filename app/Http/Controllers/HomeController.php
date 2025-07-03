<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\DivisionMember;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch divisions with their leaders (Ketua)
        $divisions = Division::with(['members' => function($query) {
            $query->where('position', 'Ketua');
        }])->get();

        // Fetch latest news (limit to 3)
        $latestNews = News::latest()->take(3)->get();

        return view('home', compact('divisions', 'latestNews'));
    }
}
