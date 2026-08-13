@extends('admin.layout.index')


@section('title','Edit Simulasi Kredit')


@section('content')


<div class="admin-card p-4">


<h3>
Edit Paket Kredit
</h3>



<form action="{{route('admin.simulasi.update',$simulasi->id)}}"
method="POST">


@csrf

@method('PUT')


<label>
Nama Mobil
</label>

<input 
name="nama_mobil"
class="form-control mb-3"
value="{{$simulasi->nama_mobil}}">



<label>
Harga
</label>

<input 
name="harga"
class="form-control mb-3"
value="{{$simulasi->harga}}">



<label>
DP
</label>

<input 
name="dp"
class="form-control mb-3"
value="{{$simulasi->dp}}">



<label>
Tenor
</label>

<input 
name="tenor"
class="form-control mb-3"
value="{{$simulasi->tenor}}">



<label>
Cicilan
</label>

<input 
name="cicilan"
class="form-control mb-3"
value="{{$simulasi->cicilan}}">



<button class="btn btn-dark">

Update

</button>


</form>


</div>


@endsection