<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
        $mobil = Kendaraan::all();

        return view('kendaraan', compact('mobil'));
    }

    public function show($slug)
    {
        $mobil = Kendaraan::with([
            'images',
            'specs',
            'variants'
        ])
        ->where('slug',$slug)
        ->firstOrFail();

        return view('detail-kendaraan', compact('mobil'));
    }
}