<?php

namespace App\Http\Controllers;

use App\Models\Event;

abstract class Controller
{
    public function index()
    {
        // Ambil semua data events dari database
        $events = Event::all();

        // Kirim data ke view events.blade.php
        return view("events", compact("events"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Cari event berdasarkan ID
        $event = Event::findOrFail($id);

        // Kirim data ke view event_show.blade.php
        return view("event_show", compact("event"));
    }
}
