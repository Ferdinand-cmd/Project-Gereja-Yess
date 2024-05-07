<?php

namespace App\Http\Controllers;

use App\Models\PelayananEvent;
use App\Models\PelayanApproved;
use Illuminate\Http\Request;

class AdminPelayananController extends Controller
{

    public function showRegistrations()
    {
        // Retrieve all pending registrations
        $registrations = PelayananEvent::all();

        // Retrieve all approved members
        $approvedMembers = PelayanApproved::all();

        // Pass both variables to the view
        return view('pelayanan-admin', compact('registrations', 'approvedMembers'));
    }
    public function approveRegistration($id)
    {
        $registration = PelayananEvent::findOrFail($id);

        // Create a new entry in the approved table
        PelayanApproved::create([
            'email' => $registration->email,
            'name' => $registration->nama,
            'age' => $registration->umur,
            'occupation' => $registration->kegiatan_saat_ini,
            'role' => $registration->role,
        ]);

        
        $registration->delete();

        return redirect()->back()->with('success', 'Registration approved and moved to approved list!');
    }

    public function removeApprovedMember($id)
    {
        $member = PelayanApproved::findOrFail($id);
        $member->delete();
    
        return redirect()->back()->with('success', 'Member removed successfully!');
    }
    

    public function rejectRegistration($id)
    {
        $registration = PelayananEvent::findOrFail($id);
        $registration->delete();

        return redirect()->back()->with('error', 'Registration rejected and removed!');
    }
}

