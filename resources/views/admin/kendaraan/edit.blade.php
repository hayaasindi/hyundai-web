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

        <button class="btn btn-dark">
            Simpan Perubahan
        </button>


        <a href="{{ route('admin.kendaraan.index') }}"
           class="btn btn-secondary">

            Kembali

        </a>


    </form>


</div>

@endsection