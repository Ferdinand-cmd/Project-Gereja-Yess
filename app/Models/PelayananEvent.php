<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelayananEvent extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'nama', 'umur', 'no_hp', 'kecamatan', 'alasan', 'kegiatan_saat_ini', 'role'];
}
