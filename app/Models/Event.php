<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'quota', 'location', 'start_date', 'start_time', 'end_date', 'end_time', 'description', 'image_path', 'archived', 'type'
    ];

    // Definisikan relasi dengan model EventRegistration
    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }

    // Definisikan relasi dengan model ArchivedEvent
    public function archivedEvent()
    {
        return $this->hasOne(ArchivedEvent::class);
    }
}
