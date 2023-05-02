<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'presensi';
    protected $fillable = ['user_id', 'nuptk', 'tanggal_presensi', 'jam_in', 'jam_out', 'photo_in', 'photo_out', 'location_in', 'location_out'];
}
