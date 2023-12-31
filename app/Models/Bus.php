<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = ['nama_perusahaan', 'merk_mobil', 'model_mobil', 'titik_jemput_id', 'foto'];
}
