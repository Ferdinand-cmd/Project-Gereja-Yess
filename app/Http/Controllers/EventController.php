<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i',
            'description' => 'required|string',
            'image' => 'nullable|image'
        ]);

        $event = Event::find($id);

        if (!$event) {
            return response()->json(['success' => false, 'message' => 'Event not found.'], 404);
        }

        // Update the event details
        $event->title = $request->title;
        $event->location = $request->location;
        $event->start_date = $request->start_date;
        $event->start_time = $request->start_time;
        $event->end_date = $request->end_date;
        $event->end_time = $request->end_time;
        $event->description = $request->description;

        // Handle file upload if an image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('event_images', 'public');
            $event->image_path = $imagePath;
        }

        // Save the updated event
        $event->save();

        return redirect()->back()->with('success', 'Event updated successfully.');
    }
}
