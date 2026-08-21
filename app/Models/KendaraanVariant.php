<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class KendaraanVariant extends Model
{

    protected $fillable = [
        'kendaraan_id',
        'nama',
        'harga',
        'whatsapp'
    ];


    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

}