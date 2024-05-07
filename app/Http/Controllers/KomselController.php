<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PotentialKomsel;

class KomselController extends Controller
{
    public function register(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'nomor' => 'required|string',
            'kecamatan' => 'required|string',
            'kegiatan' => 'required|string'
        ]);

        PotentialKomsel::create($validatedData);

        return redirect()->back()->with('success', 'Thank you for registering!');
    }
}

