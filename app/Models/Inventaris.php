<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = 'inventaris';

    protected $primaryKey = 'id_inventaris';

    public $timestamps = false;

    protected $fillable = [
        'nama_barang',
        'jumlah_barang',
        'foto',
        'keterangan',
    ];
}