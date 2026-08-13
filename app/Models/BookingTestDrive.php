<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingTestDrive extends Model
{

    protected $fillable = [
        'nama',
        'hp',
        'kendaraan',
        'tanggal',
        'waktu',
        'status'
    ];

}