<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SimulasiKredit;
use Illuminate\Http\Request;


class SimulasiKreditController extends Controller
{


    public function index()
    {
        $simulasi = SimulasiKredit::latest()->get();
        return view(
            'admin.kredit.index',
            compact('simulasi')
        );

    }



    public function create()
    {
        return view('admin.kredit.create');
    }



    public function store(Request $request)
    {

        $request->validate([

            'nama_mobil'=>'required',
            'harga'=>'required',
            'dp'=>'required',
            'tenor'=>'required',
            'cicilan'=>'required'

        ]);



    SimulasiKredit::create([

        'nama_mobil'=>$request->nama_mobil,
        'harga'=>$request->harga,
        'dp'=>$request->dp,
        'tenor'=>$request->tenor,
        'cicilan'=>$request->cicilan

    ]);



    return redirect()

        ->route('admin.simulasi.index')

        ->with(
        'success',
        'Paket kredit berhasil ditambahkan'
        );

    }



    public function edit($id)
    {

        $simulasi = SimulasiKredit::findOrFail($id);

        return view(
        'admin.kredit.edit',
        compact('simulasi')
        );

    }



    public function update(Request $request,$id)
    {

        $simulasi = SimulasiKredit::findOrFail($id);


        $simulasi->update([

        'nama_mobil'=>$request->nama_mobil,
        'harga'=>$request->harga,
        'dp'=>$request->dp,
        'tenor'=>$request->tenor,
        'cicilan'=>$request->cicilan

        ]);


        return redirect()

        ->route('admin.simulasi.index')

        ->with(
        'success',
        'Data kredit diperbarui'
        );

    }



    public function destroy($id)
    {

        SimulasiKredit::destroy($id);

        return back()
        ->with(
        'success',
        'Data kredit dihapus'
        );

    }


}