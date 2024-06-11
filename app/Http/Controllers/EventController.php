<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\ArchivedEvent;
use App\Models\EventRegistration;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function user()
    {
        // Ambil semua event tanpa registrasi
        $events = Event::all();

        // Kembalikan tampilan event
        return view('event', compact('events'));
    }

    // Metode untuk admin
    public function admin()
    {
        // Ambil semua event dengan registrasi
        $events = Event::with('registrations')->get();

        // Kembalikan tampilan event admin
        return view('event-admin', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'quota' => 'nullable|integer|min:1',
            'location' => 'required|string|max:255',
            'start_date' => 'required|date',
            'start_time' => 'nullable|date_format:H:i',
            'end_date' => 'required|date|after_or_equal:start_date',
            'end_time' => 'nullable|date_format:H:i',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required|string'
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('event-images', 'public');
        }

        // Create the new event
        $event = Event::create([
            'title' => $request->input('title'),
            'quota' => $request->input('quota'),
            'location' => $request->input('location'),
            'start_date' => $request->input('start_date'),
            'start_time' => $request->input('start_time'),
            'end_date' => $request->input('end_date'),
            'end_time' => $request->input('end_time'),
            'description' => $request->input('description'),
            'image_path' => $imagePath,
            'type' => $request->input('type')
        ]);

        return response()->json(['success' => true, 'event' => $event]);
    }
    
    public function archive($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['success' => false, 'message' => 'Event not found.'], 404);
        }

        // Toggle nilai archived antara 0 dan 1
        $event->archived = $event->archived ? 0 : 1;
        $event->save();

        return response()->json(['success' => true, 'message' => $event->archived ? 'Event archived.' : 'Event restored.']);
    }

    public function register(Request $request)
    {
        $eventId = $request->input('event_id');
        $user = auth()->user();

        // Validate user is logged in
        if (!$user) {
            return response()->json(['message' => 'User not logged in.'], 401);
        }

        // Create a new event registration
        EventRegistration::create([
            'event_id' => $eventId,
            'registrant_email' => $user->email,
            'name' => $user->name
        ]);

        return response()->json(['message' => 'Registration successful.']);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'quota' => 'nullable|integer|min:1',
            'location' => 'required|string|max:255',
            'start_date' => 'required|date',
            'start_time' => 'nullable|date_format:H:i',
            'end_date' => 'required|date|after_or_equal:start_date',
            'end_time' => 'nullable|date_format:H:i',
            'description' => 'required|string',
            'type' => 'required|string' // Field 'type' is required
        ]);        

        $event = Event::find($id);

        if (!$event) {
            return response()->json(['success' => false, 'message' => 'Event not found.'], 404);
        }

        // Update the event details
        $event->title = $request->title;
        $event->quota = $request->quota ?? 150;
        $event->location = $request->location;
        $event->start_date = $request->start_date;
        $event->start_time = $request->start_time;
        $event->end_date = $request->end_date;
        $event->end_time = $request->end_time;
        $event->description = $request->description;
        $event->type = $request->type;

        // Check if archived field is present in the request
        if ($request->has('archived')) {
            $event->archived = $request->archived;
        }

        // Handle file upload if an image is provided
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imagePath = $request->file('image')->store('event_images', 'public');
            $event->image_path = $imagePath;
        }

        // Save the updated event
        $event->save();

        return redirect()->back()->with('success', 'Event updated successfully.');
    }

    public function delete($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json(['success' => false, 'message' => 'Event not found.'], 404);
        }

        // Hapus gambar terkait dari penyimpanan
        if ($event->image_path) {
            Storage::disk('public')->delete($event->image_path);
        }

        // Hapus event dari database
        $event->delete();

        return response()->json(['success' => true, 'message' => 'Event deleted successfully.']);
    }
    public function show($id)
    {
        // Ambil detail event berdasarkan ID
        $event = Event::findOrFail($id);

        // Tampilkan halaman detail event dengan data event
        return view('event-detail', compact('event'));
    }
    public function showDetail(Request $request)
    {
        // Dapatkan ID dari query string
        $eventId = $request->query('id');

        // Ambil data event dari database berdasarkan ID
        $event = Event::findOrFail($eventId);

        // Tampilkan halaman detail event dengan data event
        return view('event-detail', compact('event'));
    }
}
