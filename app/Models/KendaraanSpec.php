<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KendaraanSpec extends Model
{

    protected $fillable = [
        'kendaraan_id',
        'kategori',
        'nama',
        'nilai'
    ];


    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

}