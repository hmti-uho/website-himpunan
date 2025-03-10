<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Ambil semua data galleries dari database
        $galleries = Gallery::all();

        // Kirim data ke view galleries.blade.php
        return view("galleries", compact("galleries"));
    }
}
