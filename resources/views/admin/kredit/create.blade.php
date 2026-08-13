@extends('admin.layout.index')


@section('title','Tambah Simulasi Kredit')


@section('content')


<div class="admin-card p-4">


<h3 class="mb-4">
Tambah Paket Kredit
</h3>



<form action="{{route('admin.simulasi.store')}}" method="POST">

@csrf


<div class="row">


<div class="col-md-6 mb-3">

<label>
Nama Mobil
</label>

<input 
type="text"
name="nama_mobil"
class="form-control"
placeholder="Hyundai Creta">

</div>




<div class="col-md-6 mb-3">

<label>
Harga Mobil
</label>

<input 
type="number"
name="harga"
class="form-control"
placeholder="350000000">

</div>





<div class="col-md-6 mb-3">

<label>
DP
</label>

<input 
type="number"
name="dp"
class="form-control"
placeholder="50000000">

</div>





<div class="col-md-6 mb-3">

<label>
Tenor Tahun
</label>


<select name="tenor" class="form-control">

<option value="1">
1 Tahun
</option>

<option value="2">
2 Tahun
</option>

<option value="3">
3 Tahun
</option>

<option value="4">
4 Tahun
</option>

<option value="5">
5 Tahun
</option>


</select>

</div>





<div class="col-md-12 mb-3">


<label>
Cicilan Per Bulan
</label>


<input 
type="number"
name="cicilan"
class="form-control"
placeholder="5000000">


</div>


</div>




<button class="btn btn-dark">

Simpan

</button>



<a href="{{route('admin.simulasi.index')}}"
class="btn btn-secondary">

Kembali

</a>


</form>


</div>


@endsection