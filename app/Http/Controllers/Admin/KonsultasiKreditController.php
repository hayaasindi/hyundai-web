<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\KonsultasiKredit;


class KonsultasiKreditController extends Controller
{


    public function index()
    {

        $konsultasi = KonsultasiKredit::latest()->get();


        return view(
            'admin.kredit.konsultasi',
            compact('konsultasi')
        );

    }



    public function destroy($id)
    {

        KonsultasiKredit::destroy($id);


        return back()
        ->with(
            'success',
            'Data berhasil dihapus'
        );

    }


}