<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
protected $fillable = [

    'nama',
    'slug',
    'kategori',
    'harga',
    'gambar',
    'badge',
    'deskripsi',
    'transmisi',
    'seat',
    ];

    public function images()
    {
        return $this->hasMany(KendaraanImage::class);
    }

    public function specs()
    {
        return $this->hasMany(KendaraanSpec::class);
    }
}

