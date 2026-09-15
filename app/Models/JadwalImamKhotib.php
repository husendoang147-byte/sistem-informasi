<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalImamKhotib extends Model
{
    use HasFactory;

    protected $table = 'jadwal_imam';

    protected $primaryKey = 'id_jadwal_imam';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'id_user',
        'tanggal',
        'imam',
        'khotib',
        'bilal',
        'keterangan',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}