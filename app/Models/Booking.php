<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'pickup_point_id', 'user_id', 'status'
    ];

    public function pickupPoint()
    {
        return $this->belongsTo(PickupPoint::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
