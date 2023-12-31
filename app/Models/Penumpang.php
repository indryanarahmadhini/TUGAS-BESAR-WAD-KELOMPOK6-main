<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;
    protected $fillable = [
            'nama_penumpang',
            'tanggal_lahir_penumpang',
            'no_telepon_penumpang',
            'email_penumpang',
            'foto_penumpang',
        ];

}
