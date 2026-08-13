<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\SimulasiKredit;
use App\Models\KonsultasiKredit;



class KreditController extends Controller
{


    public function index()
    {


        $simulasi = SimulasiKredit::latest()->get();


        return view(
            'kredit',
            compact('simulasi')
        );


    }




    public function store(Request $request)
    {


        $request->validate([

            'nama'=>'required',
            'hp'=>'required',
            'mobil'=>'required',
            'dp'=>'required',
            'tenor'=>'required',
            'cicilan'=>'required'

        ]);




        $konsultasi = KonsultasiKredit::create([


            'nama'=>$request->nama,

            'hp'=>$request->hp,

            'mobil'=>$request->mobil,

            'dp'=>$request->dp,

            'tenor'=>$request->tenor,

            'cicilan'=>$request->cicilan,

            'status'=>'pending'


        ]);





        $pesan =

        "Halo Hyundai, saya ingin konsultasi kredit.\n\n".

        "Nama : ".$konsultasi->nama."\n".

        "WhatsApp : ".$konsultasi->hp."\n".

        "Mobil : ".$konsultasi->mobil."\n".

        "DP : Rp ".number_format($konsultasi->dp)."\n".

        "Tenor : ".$konsultasi->tenor." Tahun\n".

        "Cicilan : Rp ".number_format($konsultasi->cicilan);





        $nomorSales = "6285121546050";



        return redirect()->away(

            "https://wa.me/".$nomorSales."?text=".urlencode($pesan)

        );


    }



}