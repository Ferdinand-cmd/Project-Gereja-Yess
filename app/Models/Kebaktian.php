<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebaktian extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis', // Tambahkan kolom jenis ke dalam array fillable
    ];
}
