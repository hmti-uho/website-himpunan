<?php

namespace App\Http\Controllers;

use App\Models\SuggestionBox;
use Illuminate\Http\Request;

class SuggestionBoxController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'message' => 'required|string|max:500', // Validasi pesan tidak kosong dan max 500 karakter
        ]);

        // Simpan ke database
        SuggestionBox::create([
            'message' => $request->message,
        ]);

        // Beri response sukses
        return response()->json(['message' => 'Aspirasi berhasil dikirim!'], 201);
    }
}
