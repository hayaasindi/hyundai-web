<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KendaraanImage extends Model
{
    protected $fillable = [
        'kendaraan_id',
        'gambar'
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}