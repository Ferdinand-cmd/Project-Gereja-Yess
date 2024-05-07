<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelayananEvent;
use Illuminate\Support\Facades\Log;

class PelayananController extends Controller
{
    public function registerEvent(Request $request) {
        Log::info('Received data:', $request->all());
    
        $validated = $request->validate([
            'email' => 'required|email',
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'no_hp' => 'required|string',
            'kecamatan' => 'required|string',
            'alasan' => 'required|string|max:200',
            'kegiatan_saat_ini' => 'required|string',
            'role' => 'required|string'
        ]);
    
        Log::info('Validated data:', $validated);
    
        try {
            $event = PelayananEvent::create($validated);
            return redirect()->back()->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            Log::error('Error saving event: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Registration failed!');
        }
    }    
}
