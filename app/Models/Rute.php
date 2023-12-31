<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;
    protected $fillable = [
        'titik_jemput',
        'tujuan',
        // ... kolom-kolom lain yang ingin diisi secara massal
    ];
}
