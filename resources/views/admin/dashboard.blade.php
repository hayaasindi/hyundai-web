@extends('admin.layout.index')

@section('title','Dashboard Admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            Dashboard
        </h3>

        <p class="text-muted mb-0">
            Hyundai Vehicle Management System
        </p>
    </div>


    <a href="{{ route('admin.kendaraan.create') }}"
       class="btn btn-dark px-4">

        <i class="bi bi-plus-lg me-2"></i>
        Tambah Kendaraan

    </a>

</div>




<div class="row g-4">


    <div class="col-md-4">

        <div class="dashboard-card">


            <div class="icon-box">

                <i class="bi bi-car-front-fill"></i>

            </div>


            <div>

                <p>
                    Total Kendaraan
                </p>

                <h2>
                    {{ $totalKendaraan }}
                </h2>

            </div>


        </div>


    </div>




    <div class="col-md-4">

        <div class="dashboard-card">


            <div class="icon-box">

                <i class="bi bi-grid-fill"></i>

            </div>


            <div>

                <p>
                    Kategori Kendaraan
                </p>


                <h2>
                    {{ \App\Models\Kendaraan::distinct('kategori')->count('kategori') }}
                </h2>

            </div>


        </div>


    </div>




    <div class="col-md-4">

        <div class="dashboard-card">


            <div class="icon-box">

                <i class="bi bi-images"></i>

            </div>


            <div>

                <p>
                    Total Gallery
                </p>


                <h2>
                    {{ \App\Models\KendaraanImage::count() }}
                </h2>


            </div>


        </div>


    </div>

    <div class="col-md-4">
    <div class="dashboard-card">
    <div class="icon-box">

    <i class="bi bi-calendar-check"></i>

    </div>


    <div>

    <p>
    Total Test Drive
    </p>


    <h2>
    {{ $totalTestDrive }}
    </h2>


    </div>


    </div>

    </div>





    <div class="col-md-4">

    <div class="dashboard-card">


    <div class="icon-box">

    <i class="bi bi-chat-square-text"></i>

    </div>


    <div>

    <p>
    Konsultasi Kredit
    </p>


    <h2>
    {{ $totalKonsultasiKredit }}
    </h2>


    </div>


    </div>

    </div>


</div>





<div class="admin-card mt-5 p-4">


    <div class="d-flex justify-content-between align-items-center mb-4">


        <h5 class="fw-bold mb-0">

            Kendaraan Terbaru

        </h5>


        <a href="{{ route('admin.kendaraan.index') }}"
           class="text-decoration-none">

            Lihat Semua

        </a>


    </div>




    <div class="table-responsive">


        <table class="table align-middle">


            <thead>


                <tr>

                    <th>
                        Gambar
                    </th>

                    <th>
                        Nama
                    </th>

                    <th>
                        Kategori
                    </th>

                    <th>
                        Harga
                    </th>

                    <th>
                        Action
                    </th>

                </tr>


            </thead>



            <tbody>


            @foreach($kendaraanTerbaru as $item)


                <tr>


                    <td>

                        <img
                        src="{{ asset('storage/'.$item->gambar) }}"
                        width="80"
                        height="50"
                        class="rounded object-fit-cover">

                    </td>



                    <td>

                        <strong>
                            {{ $item->nama }}
                        </strong>

                    </td>



                    <td>

                        <span class="badge bg-light text-dark">

                            {{ $item->kategori }}

                        </span>

                    </td>



                    <td>

                        {{ $item->harga }}

                    </td>



                    <td>


                        <a href="{{ route('admin.kendaraan.edit',$item->id) }}"
                           class="btn btn-sm btn-outline-dark">

                            Edit

                        </a>


                    </td>


                </tr>


            @endforeach


            </tbody>


        </table>


    </div>


</div>





<style>


.dashboard-card {

    background:white;

    border-radius:20px;

    padding:25px;

    display:flex;

    align-items:center;

    gap:20px;

    border:1px solid #e5e7eb;

    box-shadow:
    0 15px 35px rgba(15,23,42,.05);

    transition:.3s;

}



.dashboard-card:hover {

    transform:translateY(-5px);

}



.dashboard-card p {

    color:#64748b;

    margin:0;

    font-size:14px;

}



.dashboard-card h2 {

    margin:8px 0 0;

    font-weight:700;

    color:#0b1f3a;

}



.icon-box {

    width:60px;

    height:60px;

    border-radius:16px;

    background:#0b1f3a;

    color:white;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:26px;

}



.object-fit-cover {

    object-fit:cover;

}



</style>


@endsection