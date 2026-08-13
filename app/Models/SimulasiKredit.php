<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SimulasiKredit extends Model
{

    protected $fillable = [

        'nama_mobil',
        'harga',
        'dp',
        'tenor',
        'cicilan'

    ];

}