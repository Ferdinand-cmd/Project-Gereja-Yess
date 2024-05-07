<?php

namespace App\Http\Controllers;
use App\Models\EventRegistration;
use App\Models\ArchivedEvent;
use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        // Fetch all events
        $events = Event::all();
    
        // Pass to the view
        return view('event-admin', compact('events'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'start_time' => 'nullable|date_format:H:i',
        'end_time' => 'nullable|date_format:H:i',
        'description' => 'required|string',
        'image' => 'required|image'
        ]);

        $imagePath = $request->file('image')->store('event_images', 'public');

        Event::create([
            'title' => $request->title,
            'location' => $request->location,
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'end_date' => $request->end_date,
            'end_time' => $request->end_time,
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Event added successfully.');
    }

    public function archive($id)
    {
        ArchivedEvent::create(['event_id' => $id]);
        return redirect()->back();
    }

    public function register($eventId, Request $request)
    {
        $request->validate(['registrant_email' => 'required|string']);
        EventRegistration::create(['event_id' => $eventId, 'registrant_email' => $request->registrant_email]);
        return redirect()->back();
    }
}
