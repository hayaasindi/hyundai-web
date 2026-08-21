@extends('admin.layout.index')

@section('title','Edit Kendaraan')

@section('content')

<div class="admin-card p-4">

    <h3 class="mb-4">
        Edit Kendaraan
    </h3>

    <form action="{{ route('admin.kendaraan.update',$kendaraan->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')


        <div class="row">

            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Nama Kendaraan
                </label>

                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ $kendaraan->nama }}">
            </div>


            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Kategori
                </label>

                <select name="kategori"
                        class="form-control">

                    <option {{ $kendaraan->kategori == 'SUV' ? 'selected' : '' }}>
                        SUV
                    </option>

                    <option {{ $kendaraan->kategori == 'MPV' ? 'selected' : '' }}>
                        MPV
                    </option>

                    <option {{ $kendaraan->kategori == 'EV' ? 'selected' : '' }}>
                        EV
                    </option>

                    <option {{ $kendaraan->kategori == 'Crossover' ? 'selected' : '' }}>
                        Crossover
                    </option>

                </select>
            </div>


            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Harga
                </label>

                <input type="text"
                       name="harga"
                       class="form-control"
                       value="{{ $kendaraan->harga }}">
            </div>


            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Badge
                </label>

                <input type="text"
                       name="badge"
                       class="form-control"
                       value="{{ $kendaraan->badge }}">
            </div>


            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Transmisi
                </label>

                <input type="text"
                       name="transmisi"
                       class="form-control"
                       value="{{ $kendaraan->transmisi }}">
            </div>


            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Seat
                </label>

                <input type="text"
                       name="seat"
                       class="form-control"
                       value="{{ $kendaraan->seat }}">
            </div>


            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Gambar Utama
                </label>

                <input type="file"
                       name="gambar"
                       class="form-control">


                <small class="text-muted">
                    Kosongkan jika tidak ingin mengganti gambar
                </small>
            </div>


            <div class="col-md-6 mb-3">

                <label class="form-label">
                    Preview Gambar
                </label>

                <br>

                <img src="{{ asset('storage/'.$kendaraan->gambar) }}"
                     width="150"
                     class="rounded">

            </div>


            <div class="col-md-12 mb-3">

                <label class="form-label">
                    Deskripsi
                </label>


                <textarea name="deskripsi"
                          rows="5"
                          class="form-control">{{ $kendaraan->deskripsi }}</textarea>

            </div>

        </div>


        <hr>


        <h5>
            Gallery Kendaraan
        </h5>


        <div class="row mb-4">

            @foreach($kendaraan->images as $image)

            <div class="col-md-3 mb-3">

                <img src="{{ asset('storage/'.$image->gambar) }}"
                     class="img-fluid rounded">

            </div>

            @endforeach

        </div>



        <div class="mb-4">

            <label class="form-label">
                Tambah Gallery Baru
            </label>


            <input type="file"
                   name="gallery[]"
                   multiple
                   class="form-control">


        </div>



        <hr>

        <hr>


        <h5>
            Tipe Kendaraan
        </h5>


        <div id="variant-container">


        @foreach($kendaraan->variants as $variant)


        <div class="row mb-3 variant-item">


        <input type="hidden"
        name="variant_id[]"
        value="{{ $variant->id }}">



        <div class="col-md-4">


        <label class="form-label">
        Nama Tipe
        </label>


        <input type="text"
        name="variant_nama[]"
        class="form-control"
        value="{{ $variant->nama }}">


        </div>



        <div class="col-md-4">


        <label class="form-label">
        Harga
        </label>


        <input type="text"
        name="variant_harga[]"
        class="form-control"
        value="{{ $variant->harga }}">


        </div>



        <div class="col-md-3">


        <label class="form-label">
        WhatsApp
        </label>


        <input type="text"
        name="variant_wa[]"
        class="form-control"
        value="{{ $variant->whatsapp }}">


        </div>



        <div class="col-md-1 d-flex align-items-end">


        <button type="button"
        class="btn btn-danger remove-variant">

        X

        </button>


        </div>


        </div>


        @endforeach



        </div>



        <button type="button"
        id="addVariant"
        class="btn btn-outline-dark mb-4">

        + Tambah Tipe

        </button>


        <h5>
            Spesifikasi Kendaraan
        </h5>

        @foreach($kendaraan->specs as $index => $spec)

        <div class="row mb-3">

            <input type="hidden"
                name="spec_id[]"
                value="{{ $spec->id }}">


            <div class="col-md-4">

                <label class="form-label">
                    Kategori
                </label>

                <input type="text"
                    name="spec_kategori[]"
                    class="form-control"
                    value="{{ $spec->kategori }}">

            </div>


            <div class="col-md-4">

                <label class="form-label">
                    Nama
                </label>

                <input type="text"
                    name="spec_nama[]"
                    class="form-control"
                    value="{{ $spec->nama }}">

            </div>


            <div class="col-md-4">

                <label class="form-label">
                    Nilai
                </label>

                <input type="text"
                    name="spec_nilai[]"
                    class="form-control"
                    value="{{ $spec->nilai }}">

            </div>


        </div>

        @endforeach

        <hr>

        <h5>
            Tambah Fitur Kendaraan
        </h5>


        <div id="fitur-container">


        <div class="row mb-3">


        <div class="col-md-5">

        <label class="form-label">
        Nama Fitur
        </label>

        <input type="text"
        name="fitur_nama[]"
        class="form-control"
        placeholder="Contoh Hyundai SmartSense">


        </div>


        <div class="col-md-5">

        <label class="form-label">
        Deskripsi Fitur
        </label>


        <input type="text"
        name="fitur_nilai[]"
        class="form-control"
        placeholder="Contoh Sistem keamanan aktif">


        </div>


        <div class="col-md-2 d-flex align-items-end">

        <button type="button"
        class="btn btn-danger remove-fitur">

        Hapus

        </button>


        </div>


        </div>


        </div>


        <button type="button"
        id="addFitur"
        class="btn btn-outline-dark mb-4">

        + Tambah Fitur

        </button>
        <button class="btn btn-dark">
            Simpan Perubahan
        </button>


        <a href="{{ route('admin.kendaraan.index') }}"
           class="btn btn-secondary">

            Kembali

        </a>


    </form>


</div>

<script>

document.getElementById('addFitur')
.addEventListener('click', function(){


let html = `

<div class="row mb-3">


<div class="col-md-5">

<input type="text"
name="fitur_nama[]"
class="form-control"
placeholder="Nama Fitur">

</div>



<div class="col-md-5">

<input type="text"
name="fitur_nilai[]"
class="form-control"
placeholder="Deskripsi">

</div>



<div class="col-md-2">

<button type="button"
class="btn btn-danger remove-fitur">

Hapus

</button>

</div>


</div>

`;


document
.getElementById('fitur-container')
.insertAdjacentHTML(
'beforeend',
html
);


});



document.addEventListener('click',function(e){

if(e.target.classList.contains('remove-fitur')){

e.target.closest('.row').remove();

}

});

document.getElementById('addVariant')
.addEventListener('click',function(){


let html = `


<div class="row mb-3 variant-item">


<input type="hidden"
name="variant_id[]"
value="">



<div class="col-md-4">

<input type="text"
name="variant_nama[]"
class="form-control"
placeholder="Nama Tipe">

</div>



<div class="col-md-4">

<input type="text"
name="variant_harga[]"
class="form-control"
placeholder="Harga">

</div>



<div class="col-md-3">

<input type="text"
name="variant_wa[]"
class="form-control"
placeholder="628xxx">

</div>



<div class="col-md-1">


<button type="button"
class="btn btn-danger remove-variant">

X

</button>


</div>


</div>


`;


document
.getElementById('variant-container')
.insertAdjacentHTML(
'beforeend',
html
);


});



document.addEventListener('click',function(e){


if(e.target.classList.contains('remove-variant')){


e.target.closest('.variant-item').remove();


}


});
</script>
@endsection