<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PelayanApproved extends Model
{
    protected $table = 'pelayan_approved'; // Ensure this matches your actual table name

    protected $fillable = ['email', 'name', 'age', 'occupation', 'role'];
}


