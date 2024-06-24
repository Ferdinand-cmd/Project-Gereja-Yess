<?php
namespace App\Http\Controllers;

use App\Models\Kebaktian;
use App\Models\Tempat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KebaktianController extends Controller
{
    public function index()
    {
        $kebaktians = Kebaktian::all();
        $tempats = Tempat::all();
        return view('penjadwalan-admin', compact('kebaktians', 'tempats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kebaktians' => 'required|array',
            'kebaktians.*.jenis' => 'required|string|max:255',
            'kebaktians.*.id' => 'nullable|integer|exists:kebaktians,id',
            'tempats' => 'required|array',
            'tempats.*.tempat' => 'required|string|max:255',
            'tempats.*.alamat' => 'required|string|max:255',
            'tempats.*.id' => 'nullable|integer|exists:tempats,id',
            'toDeleteKebaktian' => 'nullable|array',
            'toDeleteKebaktian.*' => 'integer|exists:kebaktians,id',
            'toDeleteTempat' => 'nullable|array',
            'toDeleteTempat.*' => 'integer|exists:tempats,id',
        ]);

        // Handle Kebaktian updates and new entries
        foreach ($request->kebaktians as $kebaktianData) {
            if (isset($kebaktianData['id'])) {
                $kebaktian = Kebaktian::find($kebaktianData['id']);
                $kebaktian->update(['jenis' => $kebaktianData['jenis']]);
            } else {
                Kebaktian::create(['jenis' => $kebaktianData['jenis']]);
            }
        }

        // Handle Tempat updates and new entries
        foreach ($request->tempats as $tempatData) {
            if (isset($tempatData['id'])) {
                $tempat = Tempat::find($tempatData['id']);
                $tempat->update(['tempat' => $tempatData['tempat'], 'alamat' => $tempatData['alamat']]);
            } else {
                Tempat::create(['tempat' => $tempatData['tempat'], 'alamat' => $tempatData['alamat']]);
            }
        }

        // Handle Kebaktian deletions
        if ($request->filled('toDeleteKebaktian')) {
            Kebaktian::whereIn('id', $request->toDeleteKebaktian)->delete();
        }

        // Handle Tempat deletions
        if ($request->filled('toDeleteTempat')) {
            Tempat::whereIn('id', $request->toDeleteTempat)->delete();
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

