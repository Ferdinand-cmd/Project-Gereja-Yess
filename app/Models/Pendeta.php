<?php

// app/Models/Pendeta.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendeta extends Model
{
    use HasFactory;

    protected $table = 'pendetas';

    protected $fillable = [
        'name',
        'wa',
        'email',
        'role',
    ];
}

