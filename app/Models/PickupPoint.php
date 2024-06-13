<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'region', 'title', 'description', 'date', 'time', 'image', 'seats_o', 'seats_t'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
