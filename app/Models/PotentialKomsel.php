<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotentialKomsel extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'umur', 'nomor', 'kecamatan', 'kegiatan'];
}
