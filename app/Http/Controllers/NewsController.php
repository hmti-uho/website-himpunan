<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        // Ambil semua data news dari database
        $news = News::all();

        // Kirim data ke view news.blade.php
        return view("news", compact("news"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Cari news berdasarkan ID
        $news = News::findOrFail($id);

        // Kirim data ke view news_show.blade.php
        return view("news_show", compact("news"));
    }
}
