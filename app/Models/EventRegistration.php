<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    protected $fillable = ['event_id', 'registrant_email'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}

