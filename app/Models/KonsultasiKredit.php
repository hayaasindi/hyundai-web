<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class KonsultasiKredit extends Model
{

protected $fillable=[
        'nama',
        'hp',
        'mobil',
        'dp',
        'tenor',
        'cicilan',
        'status'
    ];

}