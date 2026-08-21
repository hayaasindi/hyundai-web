<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\KendaraanImage;
use App\Models\KendaraanSpec;
use App\Models\KendaraanVariant;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::latest()->get();

        return view('admin.kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('admin.kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image',
            'deskripsi' => 'required',
            'transmisi' => 'required',
            'seat' => 'required',
        ]);

        $gambar = $request->file('gambar')
            ->store('kendaraan', 'public');

        $kendaraan = Kendaraan::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'gambar' => $gambar,
            'badge' => $request->badge,
            'deskripsi' => $request->deskripsi,
            'transmisi' => $request->transmisi,
            'seat' => $request->seat,
        ]);
        

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $galleryPath = $file->store('kendaraan/gallery', 'public');

                KendaraanImage::create([
                    'kendaraan_id' => $kendaraan->id,
                    'gambar' => $galleryPath
                ]);
            }
        }

        $specifications = [
            'Performa' => [
                'Package' => $request->package,
            ],
            'Mesin' => [
                'Engine Type' => $request->engine_type,
                'Displacement' => $request->displacement,
                'Maks Power' => $request->max_power,
                'Maks Torsi' => $request->max_torsi,
                'Number of Cylinders' => $request->cylinder,
            ],
            'Transmisi' => [
                'Tipe Transmisi' => $request->tipe_transmisi,
            ],
            'Konsumsi Bahan Bakar' => [
                'Jenis Bahan Bakar' => $request->bahan_bakar,
                'Kapasitas Bahan Bakar' => $request->kapasitas_bbm,
            ],
            'Dimensi' => [
                'Length Overall' => $request->length,
                'Width Overall' => $request->width,
                'Height Overall' => $request->height,
                'Base Wheel' => $request->wheelbase,
            ],
            'Roda' => [
                'Front Wheels' => $request->front_wheels,
                'Rear Wheels' => $request->rear_wheels,
                'Front Tires' => $request->front_tires,
                'Rear Tires' => $request->rear_tires,
            ],
        ];

        foreach ($specifications as $kategori => $items) {
            foreach ($items as $nama => $nilai) {
                if (!empty($nilai)) {
                    KendaraanSpec::create([
                        'kendaraan_id' => $kendaraan->id,
                        'kategori' => $kategori,
                        'nama' => $nama,
                        'nilai' => $nilai
                    ]);
                }
            }
        }
        // SIMPAN FITUR KENDARAAN

        if($request->fitur_nama){

            foreach($request->fitur_nama as $index=>$nama){

                if(!empty($nama)){

                    KendaraanSpec::create([

                        'kendaraan_id'=>$kendaraan->id,

                        'kategori'=>'Fitur Unggulan',

                        'nama'=>$nama,

                        'nilai'=>$request->fitur_nilai[$index]

                    ]);

                }

            }

        }

        if($request->variant_nama){

        foreach($request->variant_nama as $index=>$nama){


        if($nama){

        KendaraanVariant::create([

        'kendaraan_id'=>$kendaraan->id,

        'nama'=>$nama,

        'harga'=>$request->variant_harga[$index],

        'whatsapp'=>$request->variant_wa[$index]

        ]);


        }

        }

        }
        return redirect()
            ->route('admin.kendaraan.index')
            ->with('success','Kendaraan berhasil ditambahkan');
            
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::with([
            'images',
            'specs',
            'variants'
        ])->findOrFail($id);

        return view(
            'admin.kendaraan.edit',
            compact('kendaraan')
        );
    }

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        $request->validate([
            'nama'=>'required',
            'kategori'=>'required',
            'harga'=>'required',
            'deskripsi'=>'required',
            'transmisi'=>'required',
            'seat'=>'required',
        ]);


        $data = [
            'nama'=>$request->nama,
            'slug'=>Str::slug($request->nama),
            'kategori'=>$request->kategori,
            'harga'=>$request->harga,
            'badge'=>$request->badge,
            'deskripsi'=>$request->deskripsi,
            'transmisi'=>$request->transmisi,
            'seat'=>$request->seat,
        ];


        // UPDATE GAMBAR UTAMA

        if($request->hasFile('gambar')){

            $data['gambar'] = $request
                ->file('gambar')
                ->store('kendaraan','public');

        }


        $kendaraan->update($data);



        // TAMBAH GALLERY BARU

        if($request->hasFile('gallery')){


            foreach($request->file('gallery') as $file){


                $gambar = $file->store(
                    'kendaraan/gallery',
                    'public'
                );

                KendaraanImage::create([
                    'kendaraan_id'=>$kendaraan->id,
                    'gambar'=>$gambar
                ]);

            }
        }

        // UPDATE SPESIFIKASI
        if($request->spec_id){

            foreach($request->spec_id as $index=>$id){

                KendaraanSpec::where('id',$id)
                ->update([
                    'kategori'=>$request->spec_kategori[$index],
                    'nama'=>$request->spec_nama[$index],
                    'nilai'=>$request->spec_nilai[$index],
                ]);

            }
        }

        // TAMBAH FITUR BARU

        if($request->fitur_nama){

            foreach($request->fitur_nama as $index=>$nama){

                if(!empty($nama)){


                    KendaraanSpec::create([

                        'kendaraan_id'=>$kendaraan->id,

                        'kategori'=>'Fitur Unggulan',

                        'nama'=>$nama,

                        'nilai'=>$request->fitur_nilai[$index]

                    ]);

                }

            }

        }

        // UPDATE VARIANT

        if($request->variant_nama){


        foreach($request->variant_nama as $index=>$nama){



        if(!$nama){
            continue;
        }



        if(!empty($request->variant_id[$index])){


            KendaraanVariant::where(
                'id',
                $request->variant_id[$index]
            )
            ->update([

                'nama'=>$nama,

                'harga'=>$request->variant_harga[$index],

                'whatsapp'=>$request->variant_wa[$index]

            ]);



        }else{


            KendaraanVariant::create([

                'kendaraan_id'=>$kendaraan->id,

                'nama'=>$nama,

                'harga'=>$request->variant_harga[$index],

                'whatsapp'=>$request->variant_wa[$index]

            ]);


        }



        }

        }

        return redirect()
            ->route('admin.kendaraan.index')
            ->with('success','Kendaraan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        $kendaraan->delete();


        return redirect()
            ->route('admin.kendaraan.index')
            ->with('success','Kendaraan berhasil dihapus');
    }

    public function deleteVariant($id)
    {

    KendaraanVariant::findOrFail($id)
    ->delete();


    return back();

    }

    
}