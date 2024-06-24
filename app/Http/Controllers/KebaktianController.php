<?php

namespace App\Http\Controllers;

use App\Models\Kebaktian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KebaktianController extends Controller
{
    public function index()
    {
        $kebaktians = Kebaktian::all();
        return view('penjadwalan-admin', compact('kebaktians'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kebaktians' => 'required|array',
            'kebaktians.*.jenis' => 'required|string|max:255',
            'kebaktians.*.id' => 'nullable|integer|exists:kebaktians,id',
            'toDelete' => 'nullable|array',
            'toDelete.*' => 'integer|exists:kebaktians,id',
        ]);
    
        // Handle updates and new entries
        foreach ($request->kebaktians as $kebaktianData) {
            if (isset($kebaktianData['id'])) {
                // Update existing kebaktian
                $kebaktian = Kebaktian::find($kebaktianData['id']);
                $kebaktian->update(['jenis' => $kebaktianData['jenis']]);
            } else {
                // Check if the kebaktian already exists
                $existingKebaktian = Kebaktian::where('jenis', $kebaktianData['jenis'])->first();
                if (!$existingKebaktian) {
                    // Create new kebaktian
                    Kebaktian::create(['jenis' => $kebaktianData['jenis']]);
                }
            }
        }
    
        // Handle deletions
        if ($request->filled('toDelete')) {
            Kebaktian::whereIn('id', $request->toDelete)->delete();
        }

        
        return response()->json(['success' => true]);
    }    

    public function destroy($id)
    {
        $kebaktian = Kebaktian::find($id);

        if ($kebaktian) {
            $kebaktian->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Kebaktian not found'], 404);
        }
    }
}
