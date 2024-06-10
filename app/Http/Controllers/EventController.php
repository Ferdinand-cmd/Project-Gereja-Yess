<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\ArchivedEvent;
use App\Models\EventRegistration;
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
            'quota' => 'nullable|integer|min:1',
            'location' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i',
            'description' => 'required|string',
            'image' => 'required|image',
            'archived' => 'required|boolean',
            'type' => 'required|string|max:255'
        ]);

        $imagePath = $request->file('image')->store('event_images', 'public');

        Event::create([
            'title' => $request->title,
            'quota' => $request->quota ?? 150,
            'location' => $request->location,
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'end_date' => $request->end_date,
            'end_time' => $request->end_time,
            'description' => $request->description,
            'image_path' => $imagePath,
            'archived' => $request->archived,
            'type' => $request->type,
        ]);

        return redirect()->back()->with('success', 'Event added successfully.');
    }

    public function archive($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return redirect()->back()->with('error', 'Event not found.');
        }

        $event->archived = true;
        $event->save();

        return redirect()->back()->with('success', 'Event archived successfully.');
    }

    public function register($eventId, Request $request)
    {
        $request->validate(['registrant_email' => 'required|email']);

        EventRegistration::create(['event_id' => $eventId, 'registrant_email' => $request->registrant_email]);

        return redirect()->back()->with('success', 'Registration successful.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'quota' => 'nullable|integer|min:1',
            'location' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'archived' => 'required|boolean',
            'type' => 'required|string|max:255'
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
        $event->archived = $request->archived;
        $event->type = $request->type;

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
