@extends('admin.layout.index')

@section('title','Konsultasi Kredit')

@section('content')

    <div class="admin-card p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <div>

    <h3 class="fw-bold mb-1">
    Konsultasi Kredit
    </h3>

    <p class="text-muted mb-0">
    Kelola data pelanggan yang melakukan konsultasi kredit Hyundai
    </p>

    </div>

    <div>

    <span class="total-badge">

    Total :
    {{count($konsultasi)}}
    Data

    </span>

    </div>


    </div>


    @if(session('success'))

    <div class="alert alert-success border-0 shadow-sm">

    <i class="bi bi-check-circle me-2"></i>

    {{session('success')}}

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
    Pelanggan
    </th>

    <th>
    WhatsApp
    </th>

    <th>
    Kendaraan
    </th>

    <th>
    DP
    </th>

    <th>
    Tenor
    </th>

    <th>
    Cicilan
    </th>

    <th>
    Status
    </th>

    <th width="170">
    Action
    </th>

    </tr>

    </thead>




    <tbody>


    @forelse($konsultasi as $item)



    <tr>



    <td>

    <span class="number">

    {{$loop->iteration}}

    </span>

    </td>





    <td>


    <div class="customer-info">


    <div>


    <h6 class="mb-1 fw-bold">

    {{$item->nama}}

    </h6>


    <small class="text-muted">

    Pengajuan Kredit Hyundai

    </small>


    </div>


    </div>


    </td>





    <td>


    <a

    href="https://wa.me/{{preg_replace('/[^0-9]/','',$item->hp)}}"

    target="_blank"

    class="whatsapp-link">


    <i class="bi bi-whatsapp"></i>


    {{$item->hp}}


    </a>


    </td>





    <td>


    <span class="vehicle-badge">

    {{$item->mobil}}

    </span>


    </td>





    <td>


    <strong class="price">

    Rp {{number_format($item->dp,0,',','.')}}

    </strong>


    </td>





    <td>


    <span class="tenor-badge">

    {{$item->tenor}} Tahun

    </span>


    </td>





    <td>


    <strong class="installment">

    Rp {{number_format($item->cicilan,0,',','.')}}

    </strong>


    </td>





    <td>


    @if($item->status == 'pending')


    <span class="status pending">

    Pending

    </span>


    @elseif($item->status == 'dihubungi')


    <span class="status process">

    Dihubungi

    </span>


    @else


    <span class="status done">

    Selesai

    </span>


    @endif



    </td>





    <td>


    <div class="d-flex gap-2">



    <a

    href="https://wa.me/{{preg_replace('/[^0-9]/','',$item->hp)}}"

    target="_blank"

    class="btn-action whatsapp">


    <i class="bi bi-whatsapp"></i>


    </a>





    <form

    action="{{route('admin.konsultasi.destroy',$item->id)}}"

    method="POST">


    @csrf

    @method('DELETE')



    <button

    class="btn-action delete"

    onclick="return confirm('Hapus data konsultasi ini?')">


    <i class="bi bi-trash"></i>


    </button>


    </form>



    </div>


    </td>





    </tr>



    @empty


    <tr>


    <td colspan="9" class="text-center py-5">


    <div class="empty-state">


    <i class="bi bi-chat-square-text"></i>


    <h5>

    Belum ada konsultasi kredit

    </h5>


    <p class="text-muted">

    Data pelanggan yang melakukan konsultasi akan muncul disini

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

.table-container{

border:1px solid #e5e7eb;

border-radius:18px;

overflow:hidden;

}



.table thead th{

background:#f8fafc;

color:#64748b;

font-size:13px;

text-transform:uppercase;

letter-spacing:.05em;

padding:18px;

border-bottom:1px solid #e5e7eb;

}



.table tbody td{

padding:18px;

border-color:#f1f5f9;

}



.table tbody tr{

transition:.25s;

}



.table tbody tr:hover{

background:#f8fafc;

}





.number{

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





.customer-info{

display:flex;

align-items:center;

gap:15px;

}





.whatsapp-link{

display:flex;

align-items:center;

gap:8px;

color:#0b1f3a;

font-weight:600;

text-decoration:none;

}



.whatsapp-link i{

color:#16a34a;

font-size:18px;

}





.vehicle-badge{

background:#e8eef8;

color:#0b1f3a;

padding:7px 14px;

border-radius:20px;

font-size:13px;

font-weight:600;

}





.price{

color:#0b1f3a;

}





.tenor-badge{

background:#f1f5f9;

padding:7px 14px;

border-radius:10px;

font-size:13px;

font-weight:600;

}





.installment{

color:#0b1f3a;

}





.status{

padding:7px 14px;

border-radius:20px;

font-size:13px;

font-weight:600;

}



.status.pending{

background:#fef3c7;

color:#92400e;

}



.status.process{

background:#dbeafe;

color:#1d4ed8;

}



.status.done{

background:#dcfce7;

color:#166534;

}





.btn-action{

width:38px;

height:38px;

border-radius:10px;

display:flex;

align-items:center;

justify-content:center;

border:none;

transition:.3s;

}



.btn-action.whatsapp{

background:#dcfce7;

color:#15803d;

}



.btn-action.delete{

background:#fee2e2;

color:#991b1b;

}



.btn-action:hover{

transform:translateY(-3px);

}





.total-badge{

background:#e8eef8;

color:#0b1f3a;

padding:10px 18px;

border-radius:20px;

font-size:13px;

font-weight:600;

}





.empty-state i{

font-size:50px;

color:#94a3b8;

}



.empty-state h5{

margin-top:15px;

font-weight:700;

}


</style>


@endsection