<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'location', 'start_date', 'start_time', 'end_date', 'end_time', 'description', 'image_path'
    ];

    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }

    public function archivedEvent()
    {
        return $this->hasOne(ArchivedEvent::class);
    }
}

