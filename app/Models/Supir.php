<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap', 'nik', 'tanggal_lahir', 'alamat', 'kota_tempat_tinggal'];
}
