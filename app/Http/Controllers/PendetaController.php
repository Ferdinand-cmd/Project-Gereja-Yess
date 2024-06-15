<?php

// app/Http/Controllers/PendetaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendeta;
use App\Models\User;

class PendetaController extends Controller
{
    public function index()
    {
        $pendetas = Pendeta::all();
        $jemaats = User::where('category', 'Jemaat YESS')->get();
        return view('home-admin', compact('pendetas', 'jemaats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'wa' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pendetas',
            'role' => 'required|string|max:255',
        ]);

        Pendeta::create([
            'name' => $request->name,
            'wa' => $request->wa,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('admin')->with('success', 'Pendeta added successfully');
    }
}


