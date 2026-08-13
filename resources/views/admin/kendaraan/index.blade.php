@extends('admin.layout.index')

@section('title','Data Kendaraan')

@section('content')

<div class="admin-card p-4">


    <div class="d-flex justify-content-between align-items-center mb-4">


        <div>

            <h3 class="fw-bold mb-1">
                Data Kendaraan
            </h3>

            <p class="text-muted mb-0">
                Kelola seluruh kendaraan Hyundai yang tersedia
            </p>

        </div>


        <a href="{{ route('admin.kendaraan.create') }}"
           class="btn btn-dark px-4 py-2">

            <i class="bi bi-plus-lg me-2"></i>

            Tambah Kendaraan

        </a>


    </div>



    @if(session('success'))

    <div class="alert alert-success border-0 shadow-sm">

        <i class="bi bi-check-circle me-2"></i>

        {{ session('success') }}

    </div>

    @endif




    <div class="table-container">


        <div class="table-responsive">


            <table class="table align-middle mb-0">


                <thead>

                    <tr>

                        <th width="60">
                            No
                        </th>

                        <th>
                            Kendaraan
                        </th>

                        <th>
                            Kategori
                        </th>

                        <th>
                            Harga
                        </th>

                        <th>
                            Transmisi
                        </th>

                        <th width="180">
                            Action
                        </th>

                    </tr>

                </thead>


                <tbody>


                @forelse($kendaraans as $item)


                    <tr>


                        <td>

                            <span class="number">

                                {{ $loop->iteration }}

                            </span>

                        </td>




                        <td>


                            <div class="vehicle-info">


                                <img 
                                src="{{ asset('storage/'.$item->gambar) }}"
                                class="vehicle-image">


                                <div>


                                    <h6 class="mb-1 fw-bold">

                                        {{ $item->nama }}

                                    </h6>


                                    <small class="text-muted">

                                        {{ $item->slug }}

                                    </small>


                                </div>


                            </div>


                        </td>





                        <td>


                            <span class="category-badge">

                                {{ $item->kategori }}

                            </span>


                        </td>





                        <td>

                            <strong class="price">

                                {{ $item->harga }}

                            </strong>


                        </td>





                        <td>


                            <span class="transmission">

                                {{ $item->transmisi }}

                            </span>


                        </td>





                        <td>


                            <div class="d-flex gap-2">


                                <a href="{{ route('admin.kendaraan.edit',$item->id) }}"
                                   class="btn-action edit">


                                    <i class="bi bi-pencil"></i>


                                </a>




                                <form action="{{ route('admin.kendaraan.destroy',$item->id) }}"
                                      method="POST">


                                    @csrf

                                    @method('DELETE')



                                    <button 
                                    class="btn-action delete"
                                    onclick="return confirm('Hapus kendaraan ini?')">


                                        <i class="bi bi-trash"></i>


                                    </button>


                                </form>


                            </div>


                        </td>


                    </tr>


                @empty


                    <tr>


                        <td colspan="6" class="text-center py-5">


                            <div class="empty-state">


                                <i class="bi bi-car-front"></i>


                                <h5>
                                    Belum ada kendaraan
                                </h5>


                                <p class="text-muted">
                                    Tambahkan kendaraan pertama melalui tombol tambah kendaraan.
                                </p>


                            </div>


                        </td>


                    </tr>


                @endforelse


                </tbody>


            </table>


        </div>


    </div>


</div>





<style>


.table-container {

    border:1px solid #e5e7eb;

    border-radius:18px;

    overflow:hidden;

}



.table thead th {

    background:#f8fafc;

    color:#64748b;

    font-size:13px;

    text-transform:uppercase;

    letter-spacing:.05em;

    padding:18px;

    border-bottom:1px solid #e5e7eb;

}



.table tbody td {

    padding:18px;

    border-color:#f1f5f9;

}



.table tbody tr {

    transition:.25s;

}



.table tbody tr:hover {

    background:#f8fafc;

}



.vehicle-info {

    display:flex;

    align-items:center;

    gap:15px;

}



.vehicle-image {

    width:95px;

    height:60px;

    object-fit:cover;

    border-radius:12px;

    background:#f1f5f9;

}



.number {

    width:32px;

    height:32px;

    border-radius:10px;

    background:#0b1f3a;

    color:white;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:13px;

}



.category-badge {

    background:#e8eef8;

    color:#0b1f3a;

    padding:7px 14px;

    border-radius:20px;

    font-size:13px;

    font-weight:600;

}



.price {

    color:#0b1f3a;

}



.transmission {

    background:#f1f5f9;

    padding:7px 12px;

    border-radius:10px;

    font-size:13px;

}



.btn-action {

    width:38px;

    height:38px;

    border-radius:10px;

    display:flex;

    align-items:center;

    justify-content:center;

    border:none;

    transition:.3s;

}



.btn-action.edit {

    background:#fef3c7;

    color:#92400e;

}



.btn-action.delete {

    background:#fee2e2;

    color:#991b1b;

}



.btn-action:hover {

    transform:translateY(-3px);

}



.empty-state i {

    font-size:50px;

    color:#94a3b8;

}



.empty-state h5 {

    margin-top:15px;

    font-weight:700;

}



</style>


@endsection