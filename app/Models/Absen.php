<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'presensi';
    protected $fillable = ['user_id', 'nuptk', 'tanggal_presensi', 'time_in', 'time_out', 'photo_in', 'photo_out', 'location_in', 'location_out'];

    public function leaderboard()
    {
        return "https://www.gravatar.com/avatar/" . md5(strtolower(trim($this->email)));
    }
}
