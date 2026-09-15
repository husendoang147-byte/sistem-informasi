<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    use HasFactory;

    protected $table = 'pengaturan';

    protected $fillable = [
        'nama_masjid',
        'deskripsi',
        'logo',
        'alamat',
        'no_hp',
        'email',
        'tahun_berdiri',
        'website',
    ];
}