<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    use HasFactory;

    protected $fillable = ['tempat', 'alamat'];
}

class Kebaktian extends Model
{
    use HasFactory;

    protected $fillable = ['jenis'];
}

