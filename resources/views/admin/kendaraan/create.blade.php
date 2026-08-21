@extends('admin.layout.index')

@section('title','Tambah Kendaraan')

@section('content')

<div class="create-wrapper">


    <div class="page-header animate">

        <div>

            <h3>
                Tambah Kendaraan Baru
            </h3>

            <p>
                Tambahkan data kendaraan Hyundai ke sistem.
            </p>

        </div>


        <a href="{{ route('admin.kendaraan.index') }}"
           class="btn btn-outline-dark">

            <i class="bi bi-arrow-left me-2"></i>

            Kembali

        </a>


    </div>



    <form action="{{ route('admin.kendaraan.store') }}"
          method="POST"
          enctype="multipart/form-data">


        @csrf



        <!-- INFORMASI UTAMA -->

        <div class="form-card animate">


            <div class="section-title">

                <div class="icon">

                    <i class="bi bi-car-front-fill"></i>

                </div>


                <div>

                    <h5>
                        Informasi Kendaraan
                    </h5>

                    <small>
                        Data utama kendaraan
                    </small>

                </div>


            </div>



            <div class="row">


                <div class="col-md-6 mb-4">

                    <label>
                        Nama Kendaraan
                    </label>

                    <input type="text"
                           name="nama"
                           class="form-control"
                           placeholder="Contoh: Hyundai Creta">

                </div>



                <div class="col-md-6 mb-4">

                    <label>
                        Kategori
                    </label>


                    <select name="kategori"
                            class="form-control">


                        <option value="SUV">
                            SUV
                        </option>


                        <option value="MPV">
                            MPV
                        </option>


                        <option value="EV">
                            EV
                        </option>


                        <option value="Crossover">
                            Crossover
                        </option>


                    </select>


                </div>




                <div class="col-md-6 mb-4">

                    <label>
                        Harga
                    </label>

                    <input type="text"
                           name="harga"
                           class="form-control"
                           placeholder="Mulai Rp350 Juta">


                </div>



                <div class="col-md-6 mb-4">

                    <label>
                        Badge
                    </label>


                    <input type="text"
                           name="badge"
                           class="form-control"
                           placeholder="Best Seller">


                </div>




                <div class="col-md-6 mb-4">

                    <label>
                        Transmisi
                    </label>


                    <input type="text"
                           name="transmisi"
                           class="form-control"
                           placeholder="Automatic IVT">


                </div>




                <div class="col-md-6 mb-4">

                    <label>
                        Kapasitas Penumpang
                    </label>


                    <input type="text"
                           name="seat"
                           class="form-control"
                           placeholder="5 Seat">


                </div>


            </div>


        </div>

                <!-- MEDIA KENDARAAN -->

        <div class="form-card animate">


            <div class="section-title">

                <div class="icon">

                    <i class="bi bi-images"></i>

                </div>


                <div>

                    <h5>
                        Media Kendaraan
                    </h5>

                    <small>
                        Upload gambar utama dan galeri kendaraan
                    </small>

                </div>


            </div>



            <div class="row">


                <div class="col-md-6 mb-4">


                    <label>
                        Gambar Utama Kendaraan
                    </label>


                    <div class="upload-box">


                        <i class="bi bi-cloud-arrow-up"></i>


                        <input type="file"
                               name="gambar"
                               class="form-control mt-3">


                        <small>
                            Gambar utama yang tampil pada katalog
                        </small>


                    </div>


                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Gallery Kendaraan
                    </label>


                    <div class="upload-box">


                        <i class="bi bi-images"></i>


                        <input type="file"
                               name="gallery[]"
                               multiple
                               class="form-control mt-3">


                        <small>
                            Bisa upload beberapa gambar kendaraan
                        </small>


                    </div>


                </div>


                <div class="col-md-12 mb-4">


                    <label>
                        Deskripsi Kendaraan
                    </label>


                    <textarea name="deskripsi"
                              rows="5"
                              class="form-control"
                              placeholder="Masukkan deskripsi kendaraan"></textarea>


                </div>


            </div>


        </div>

                <!-- Variant -->
        <div class="form-card animate">
        <div class="section-title">

        <div class="icon">
        <i class="bi bi-car-front"></i>
        </div>


        <div>

        <h5>
        Tipe Kendaraan
        </h5>

        <small>
        Tambahkan pilihan variant kendaraan
        </small>

        </div>

        </div>



        <div id="variant-container">


        <div class="row mb-3 variant-item">


        <div class="col-md-4">

        <label>
        Nama Tipe
        </label>


        <input type="text"
        name="variant_nama[]"
        class="form-control"
        placeholder="Creta Prime">

        </div>



        <div class="col-md-4">

        <label>
        Harga
        </label>


        <input type="text"
        name="variant_harga[]"
        class="form-control"
        placeholder="Rp429.000.000">

        </div>



        <div class="col-md-3">

        <label>
        Nomor WhatsApp
        </label>


        <input type="text"
        name="variant_wa[]"
        class="form-control"
        placeholder="6285121546050">

        </div>



        <div class="col-md-1">

        <button type="button"
        class="btn btn-danger remove-variant mt-4">

        X

        </button>

        </div>


        </div>


        </div>


        <button type="button"
        id="addVariant"
        class="btn btn-outline-dark">

        + Tambah Tipe

        </button>


        </div>


        <!-- SPESIFIKASI -->

        <div class="form-card animate">


            <div class="section-title">

                <div class="icon">

                    <i class="bi bi-speedometer2"></i>

                </div>


                <div>

                    <h5>
                        Spesifikasi Kendaraan
                    </h5>

                    <small>
                        Detail performa kendaraan
                    </small>

                </div>


            </div>



            <div class="row">


                <div class="col-md-12 mb-4">


                    <label>
                        Package
                    </label>


                    <input type="text"
                           name="package"
                           class="form-control"
                           placeholder="Prime Package - IVT">


                </div>




                <div class="spec-header">

                    <i class="bi bi-gear-fill"></i>

                    Mesin

                </div>



                <div class="col-md-6 mb-4">

                    <label>
                        Engine Type
                    </label>

                    <input type="text"
                           name="engine_type"
                           class="form-control"
                           placeholder="Smartstream 1.5L MPI">

                </div>



                <div class="col-md-6 mb-4">

                    <label>
                        Displacement
                    </label>


                    <input type="text"
                           name="displacement"
                           class="form-control"
                           placeholder="1.497 cc">


                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Maks Power
                    </label>


                    <input type="text"
                           name="max_power"
                           class="form-control"
                           placeholder="115 PS / 6.300 rpm">


                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Maks Torsi
                    </label>


                    <input type="text"
                           name="max_torsi"
                           class="form-control"
                           placeholder="14.7 kg-m / 4.500 rpm">


                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Number of Cylinders
                    </label>


                    <input type="text"
                           name="cylinder"
                           class="form-control"
                           placeholder="4">


                </div>




                <div class="spec-header mt-3">

                    <i class="bi bi-arrow-left-right"></i>

                    Transmisi

                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Tipe Transmisi
                    </label>


                    <input type="text"
                           name="tipe_transmisi"
                           class="form-control"
                           placeholder="IVT">


                </div>

                                <div class="spec-header mt-3">

                    <i class="bi bi-fuel-pump-fill"></i>

                    Konsumsi Bahan Bakar

                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Jenis Bahan Bakar
                    </label>


                    <input type="text"
                           name="bahan_bakar"
                           class="form-control"
                           placeholder="Gasoline">


                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Kapasitas Bahan Bakar
                    </label>


                    <input type="text"
                           name="kapasitas_bbm"
                           class="form-control"
                           placeholder="40 L">


                </div>




                <div class="spec-header mt-3">

                    <i class="bi bi-arrows-fullscreen"></i>

                    Dimensi Kendaraan

                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Length Overall
                    </label>


                    <input type="text"
                           name="length"
                           class="form-control"
                           placeholder="4.610 mm">


                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Width Overall
                    </label>


                    <input type="text"
                           name="width"
                           class="form-control"
                           placeholder="1.820 mm">


                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Height Overall
                    </label>


                    <input type="text"
                           name="height"
                           class="form-control"
                           placeholder="1.740 mm">


                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Base Wheel
                    </label>


                    <input type="text"
                           name="wheelbase"
                           class="form-control"
                           placeholder="2.780 mm">


                </div>




                <div class="spec-header mt-3">

                    <i class="bi bi-circle"></i>

                    Roda

                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Front Wheels
                    </label>


                    <input type="text"
                           name="front_wheels"
                           class="form-control"
                           placeholder='6.5J x 17"'>


                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Rear Wheels
                    </label>


                    <input type="text"
                           name="rear_wheels"
                           class="form-control"
                           placeholder='6.5J x 17"'>


                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Front Tires
                    </label>


                    <input type="text"
                           name="front_tires"
                           class="form-control"
                           placeholder="205/50 R17">


                </div>



                <div class="col-md-6 mb-4">


                    <label>
                        Rear Tires
                    </label>


                    <input type="text"
                           name="rear_tires"
                           class="form-control"
                           placeholder="205/50 R17">


                </div>


            </div>


        </div>

        <div class="spec-header mt-3">

        <i class="bi bi-stars"></i>

        Fitur Unggulan

        </div>


        <div id="fitur-container">


        <div class="row mb-3 fitur-item">


        <div class="col-md-5">

        <label>
        Nama Fitur
        </label>

        <input type="text"
        name="fitur_nama[]"
        class="form-control"
        placeholder="Contoh: Hyundai SmartSense">

        </div>



        <div class="col-md-5">

        <label>
        Deskripsi Fitur
        </label>

        <input type="text"
        name="fitur_nilai[]"
        class="form-control"
        placeholder="Contoh: Sistem keselamatan aktif">

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
        class="btn btn-outline-dark">

        + Tambah Fitur

        </button>



        <div class="form-action animate">


            <a href="{{ route('admin.kendaraan.index') }}"
               class="btn btn-light">

                Kembali

            </a>



            <button type="submit"
                    class="btn btn-primary px-5">

                <i class="bi bi-save me-2"></i>

                Simpan Kendaraan

            </button>


        </div>



    </form>


</div>

<style>

.form-card{
    background:#fff;
    border-radius:24px;
    padding:35px;
    margin-bottom:30px;
    border:1px solid #e5e7eb;
    box-shadow:0 15px 40px rgba(0,0,0,.04);
    animation:fadeUp .6s ease;
}

.section-title{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:30px;
}

.section-title .icon{
    width:45px;
    height:45px;
    border-radius:14px;
    background:#0b1f3a;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
}

.section-title h5{
    margin:0;
    font-weight:700;
    color:#0b1f3a;
}

.section-title small{
    color:#94a3b8;
}

.form-card label{
    font-weight:600;
    font-size:14px;
    color:#334155;
    margin-bottom:8px;
}

.form-control{
    border-radius:12px;
    padding:12px 15px;
    border:1px solid #dbe2ea;
    transition:.3s;
}

.form-control:focus{
    border-color:#0b1f3a;
    box-shadow:0 0 0 .2rem rgba(11,31,58,.15);
}

.upload-box{
    background:#f8fafc;
    border:2px dashed #dbe2ea;
    padding:25px;
    border-radius:18px;
    text-align:center;
    transition:.3s;
}

.upload-box:hover{
    border-color:#0b1f3a;
    transform:translateY(-3px);
}

.upload-box i{
    font-size:40px;
    color:#0b1f3a;
}

.upload-box small{
    display:block;
    margin-top:10px;
    color:#64748b;
}

.spec-header{
    width:100%;
    background:#0b1f3a;
    color:#fff;
    padding:14px 20px;
    border-radius:14px;
    font-weight:600;
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:20px;
}

.form-action{
    display:flex;
    justify-content:flex-end;
    gap:15px;
    margin-top:25px;
}

.btn-primary{
    background:#0b1f3a;
    border:none;
    border-radius:12px;
}

.btn-primary:hover{
    background:#102b52;
}

.btn-light{
    border-radius:12px;
    padding:12px 25px;
}

.animate{
    animation:fadeUp .7s ease forwards;
}

@keyframes fadeUp{

    from{
        opacity:0;
        transform:translateY(25px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }

}

</style>

<script>

document.getElementById('addFitur')
.addEventListener('click',function(){

let html = `

<div class="row mb-3 fitur-item">


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

e.target.closest('.fitur-item').remove();

}

});

document.getElementById('addVariant')
.addEventListener('click',function(){


let html = `

<div class="row mb-3 variant-item">


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
placeholder="WhatsApp">

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


