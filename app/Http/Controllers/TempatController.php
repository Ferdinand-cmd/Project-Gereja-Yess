<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TempatController extends Controller
{
    // Menampilkan semua tempat
    public function index()
    {
        $tempats = Tempat::all();
        return view('penjadwalan-admin', compact('tempats'));
    }

    // Menyimpan tempat baru
    public function store(Request $request)
    {
        $request->validate([
            'tempat' => 'required|string',
            'alamat' => 'required|string',
        ]);

        Tempat::create([
            'tempat' => $request->tempat,
            'alamat' => $request->alamat,
        ]);

        return redirect()->back()->with('success', 'Tempat berhasil ditambahkan.');
    }

    // Menghapus tempat
    public function destroy($id)
    {
        Tempat::destroy($id);
        return redirect()->back()->with('success', 'Tempat berhasil dihapus.');
    }
}
