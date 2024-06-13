<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PickupPoint;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class PickupPointController extends Controller
{
    public function index()
    {
        $points = PickupPoint::all();
        $bookings = Booking::where('user_id', Auth::id())->get();
        return view('bareng', compact('points', 'bookings'));
    }

    public function book(Request $request, $id)
    {
        $point = PickupPoint::findOrFail($id);

        $existingBooking = Booking::where('user_id', Auth::id())->where('status', 'waiting')->first();
        if ($existingBooking) {
            return back()->with('error', 'You already have a booking.');
        }

        if ($point->seats_o >= $point->seats_t) {
            return back()->with('error', 'No seats available.');
        }

        Booking::create([
            'pickup_point_id' => $id,
            'user_id' => Auth::id(),
            'status' => 'waiting'
        ]);

        $point->increment('seats_o');
        $point->save();

        return back()->with('success', 'Booking successful.');
    }

    public function cancelBooking(Request $request, $id)
    {
        $booking = Booking::where('pickup_point_id', $id)->where('user_id', Auth::id())->where('status', 'waiting')->firstOrFail();
        $booking->delete();

        $point = PickupPoint::findOrFail($id);
        $point->decrement('seats_o');
        $point->save();

        return response()->json(['success' => true]);
    }
}
