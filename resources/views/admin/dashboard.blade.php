@extends('admin.layout.index')


@section('title', 'Dashboard Admin')


@section('content')


<h3 class="mb-4">
    Dashboard
</h3>



<div class="row">


    <div class="col-md-3">

        <div class="card shadow-sm">

            <div class="card-body">

                <h6>Total User</h6>

                <h2>
                    150
                </h2>

                <i class="bi bi-people fs-1 text-primary"></i>

            </div>

        </div>

    </div>



    <div class="col-md-3">

        <div class="card shadow-sm">

            <div class="card-body">

                <h6>Total Produk</h6>

                <h2>
                    80
                </h2>

                <i class="bi bi-box-seam fs-1 text-success"></i>

            </div>

        </div>

    </div>



    <div class="col-md-3">

        <div class="card shadow-sm">

            <div class="card-body">

                <h6>Total Pesanan</h6>

                <h2>
                    230
                </h2>

                <i class="bi bi-cart fs-1 text-warning"></i>

            </div>

        </div>

    </div>



    <div class="col-md-3">

        <div class="card shadow-sm">

            <div class="card-body">

                <h6>Pendapatan</h6>

                <h2>
                    Rp15jt
                </h2>

                <i class="bi bi-cash-stack fs-1 text-danger"></i>

            </div>

        </div>

    </div>


</div>



<div class="card mt-4 shadow-sm">

    <div class="card-body">

        <h5>
            Grafik Statistik
        </h5>

        <div style="height:300px;" 
             class="d-flex justify-content-center align-items-center bg-light">

            Grafik akan dibuat nanti

        </div>


    </div>

</div>



@endsection