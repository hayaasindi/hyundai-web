@extends('admin.layout.index')

@section('title','Simulasi Kredit')

@section('content')

<div class="admin-card p-4">

<div class="d-flex justify-content-between align-items-center mb-4">

<div>

<h3 class="fw-bold mb-1">
Paket Simulasi Kredit
</h3>

<p class="text-muted mb-0">
Kelola harga, DP, tenor, dan cicilan kendaraan Hyundai
</p>

</div>


<a href="{{route('admin.simulasi.create')}}"
class="btn btn-dark px-4 py-2">

<i class="bi bi-plus-lg me-2"></i>

Tambah Paket

</a>


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
Kendaraan
</th>

<th>
Harga
</th>

<th>
DP
</th>

<th>
Tenor
</th>

<th>
Cicilan / Bulan
</th>

<th width="150">
Action
</th>

</tr>

</thead>




<tbody>


@forelse($simulasi as $item)



<tr>



<td>

<span class="number">

{{$loop->iteration}}

</span>

</td>




<td>


<div class="vehicle-info">


<div>


<h6 class="mb-1 fw-bold">

{{$item->nama_mobil}}

</h6>


<small class="text-muted">

Paket Kredit Hyundai

</small>


</div>


</div>


</td>





<td>


<strong class="price">

Rp {{number_format($item->harga)}}

</strong>


</td>





<td>


<span class="dp-badge">

Rp {{number_format($item->dp)}}

</span>


</td>





<td>


<span class="tenor-badge">

{{$item->tenor}} Tahun

</span>


</td>





<td>


<strong class="installment">

Rp {{number_format($item->cicilan)}}

</strong>


</td>





<td>


<div class="d-flex gap-2">


<a href="{{route('admin.simulasi.edit',$item->id)}}"

class="btn-action edit">


<i class="bi bi-pencil"></i>


</a>





<form action="{{route('admin.simulasi.destroy',$item->id)}}"

method="POST">


@csrf

@method('DELETE')



<button

class="btn-action delete"

onclick="return confirm('Hapus paket kredit ini?')">


<i class="bi bi-trash"></i>


</button>


</form>


</div>


</td>



</tr>



@empty


<tr>


<td colspan="7" class="text-center py-5">


<div class="empty-state">


<i class="bi bi-calculator"></i>


<h5>
Belum ada paket simulasi kredit
</h5>


<p class="text-muted">

Tambahkan paket kredit kendaraan melalui tombol tambah paket.

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




.vehicle-info{

display:flex;

align-items:center;

gap:15px;

}





.price{

color:#0b1f3a;

font-size:15px;

}




.dp-badge{

background:#e8eef8;

color:#0b1f3a;

padding:7px 14px;

border-radius:20px;

font-size:13px;

font-weight:600;

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



.btn-action.edit{

background:#fef3c7;

color:#92400e;

}



.btn-action.delete{

background:#fee2e2;

color:#991b1b;

}



.btn-action:hover{

transform:translateY(-3px);

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