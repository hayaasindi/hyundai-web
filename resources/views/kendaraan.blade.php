@extends('layouts.app')

@section('content')


<!-- HERO -->

<section class="relative h-[65vh] overflow-hidden">

    <img 
        src="/images/slider1.jpeg"
        class="absolute inset-0 w-full h-full object-cover scale-105"
    >

    <div class="absolute inset-0 bg-black/60"></div>


    <div class="relative z-10 h-full flex items-center justify-center text-center px-6">

        <div class="text-white reveal">

            <div class="w-14 h-1 bg-white mx-auto mb-6 rounded"></div>


            <h1 class="text-4xl md:text-6xl font-bold">
                Pilihan Kendaraan Hyundai
            </h1>


            <p class="mt-5 text-gray-200 text-lg max-w-2xl mx-auto">
                Jelajahi berbagai pilihan kendaraan Hyundai
                dengan teknologi terbaru dan desain futuristik.
            </p>


        </div>

    </div>


</section>






<!-- KATALOG -->

<section class="py-24 bg-white">


<div class="max-w-7xl mx-auto px-6">



<div class="text-center mb-14 reveal">


<div class="w-12 h-1 bg-[#0b1f3a] mx-auto mb-5 rounded"></div>


<h2 class="text-4xl font-semibold text-gray-900">
Katalog Hyundai
</h2>


<p class="text-gray-500 mt-3">
Temukan kendaraan yang sesuai dengan kebutuhan Anda.
</p>


</div>





<!-- DATA SEMENTARA -->
<!-- NANTI BISA DIGANTI DATABASE -->


@php

$mobil = [


[
'nama'=>'Hyundai Creta',
'slug'=>'hyundai-creta',
'kategori'=>'SUV',
'harga'=>'Mulai Rp 350 Juta',
'gambar'=>'creta.jpg',
'badge'=>'Best Seller',
'desc'=>'SUV compact dengan desain sporty dan teknologi keamanan Hyundai SmartSense.',
'transmisi'=>'Automatic',
'seat'=>'5 Seat'
],



[
'nama'=>'Hyundai Palisade',
'kategori'=>'SUV',
'slug'=>'hyundai-palisade',
'harga'=>'Mulai Rp 900 Juta',
'gambar'=>'palisade.jpg',
'badge'=>'Premium SUV',
'desc'=>'SUV premium dengan kabin luas dan kenyamanan kelas dunia.',
'transmisi'=>'Automatic',
'seat'=>'7 Seat'
],



[
'nama'=>'Hyundai Stargazer',
'kategori'=>'MPV',
'harga'=>'Mulai Rp 270 Juta',
'slug'=>'hyundai-stargazer',
'gambar'=>'stargazer.jpg',
'badge'=>'Family Choice',
'desc'=>'MPV modern dengan ruang kabin fleksibel untuk keluarga.',
'transmisi'=>'Automatic',
'seat'=>'7 Seat'
],



[
'nama'=>'Hyundai Staria',
'kategori'=>'MPV',
'harga'=>'Mulai Rp 900 Juta',
'slug'=>'hyundai-staria',
'gambar'=>'staria.jpg',
'badge'=>'Luxury MPV',
'desc'=>'MPV premium dengan desain futuristik dan kenyamanan maksimal.',
'transmisi'=>'Automatic',
'seat'=>'9 Seat'
],



[
'nama'=>'Hyundai Ioniq 5',
'kategori'=>'EV',
'harga'=>'Mulai Rp 700 Juta',
'slug'=>'hyundai-ioniq-5 ',
'gambar'=>'ioniq5.jpg',
'badge'=>'Electric',
'desc'=>'Mobil listrik masa depan dengan teknologi baterai Hyundai.',
'transmisi'=>'Electric',
'seat'=>'5 Seat'
],



[
'nama'=>'Hyundai Kona Electric',
'kategori'=>'EV',
'harga'=>'Mulai Rp 500 Juta',
'slug'=>'hyundai-kona-electric',
'gambar'=>'kona.jpg',
'badge'=>'New EV',
'desc'=>'SUV listrik modern dengan performa responsif.',
'transmisi'=>'Electric',
'seat'=>'5 Seat'
],



[
'nama'=>'Hyundai Creta N Line',
'kategori'=>'Crossover',
'harga'=>'Mulai Rp 450 Juta',
'slug'=>'hyundai-creta-n-line',
'gambar'=>'cretanline.jpg',
'badge'=>'Sport Edition',
'desc'=>'Crossover sporty dengan karakter berkendara agresif.',
'transmisi'=>'Automatic',
'seat'=>'5 Seat'
],



[
'nama'=>'Hyundai Venue',
'kategori'=>'Crossover',
'harga'=>'Mulai Rp 300 Juta',
'slug'=>'hyundai-venue',
'gambar'=>'venue.jpg',
'badge'=>'Urban SUV',
'desc'=>'Crossover compact untuk mobilitas perkotaan.',
'transmisi'=>'Automatic',
'seat'=>'5 Seat'
]


];


@endphp







<!-- FILTER -->

<div class="flex justify-center flex-wrap gap-4 mb-16 reveal">


<button class="filter active"
data-filter="all">
Semua
</button>


<button class="filter"
data-filter="SUV">
SUV
</button>


<button class="filter"
data-filter="MPV">
MPV
</button>


<button class="filter"
data-filter="EV">
EV
</button>


<button class="filter"
data-filter="Crossover">
Crossover
</button>


</div>







<!-- GRID -->

<div 
id="vehicleGrid"
class="grid md:grid-cols-3 gap-10">





@foreach($mobil as $item)


<div 
class="
vehicle-card
group
bg-[#0b1f3a]
rounded-3xl
overflow-hidden
shadow-xl
hover:-translate-y-3
transition-all
duration-500
reveal
"
data-category="{{$item['kategori']}}">



<div class="relative overflow-hidden">


<img

src="/images/{{$item['gambar']}}"

class="
w-full
h-64
object-cover
group-hover:scale-110
transition
duration-700
"

>


<span

class="
absolute
top-5
left-5
bg-white
text-[#0b1f3a]
px-4
py-2
rounded-full
text-xs
font-semibold
shadow
"

>

{{$item['badge']}}

</span>


</div>






<div class="p-7 text-white">


<div class="flex justify-between">


<h3 class="text-xl font-semibold">
{{$item['nama']}}
</h3>


<span class="text-gray-300 text-sm">
{{$item['kategori']}}
</span>


</div>





<p class="text-gray-300 text-sm mt-4 leading-relaxed">
{{$item['desc']}}
</p>





<div class="flex gap-3 mt-5">


<span class="bg-white/10 px-3 py-2 rounded-lg text-xs">
{{$item['transmisi']}}
</span>


<span class="bg-white/10 px-3 py-2 rounded-lg text-xs">
{{$item['seat']}}
</span>


</div>





<div class="border-t border-white/20 my-6"></div>





<div class="flex justify-between items-center">


<div>

<p class="text-xs text-gray-400">
Harga
</p>


<p class="font-semibold">
{{$item['harga']}}
</p>


</div>



<a
href="/kendaraan/{{$item['slug']}}"

class="
bg-white
text-[#0b1f3a]
px-5
py-2
rounded-full
text-sm
font-semibold
hover:bg-gray-200
transition
">

Detail

</a>



</div>


</div>



</div>


@endforeach



</div>


</div>

</section>







@endsection





@push('scripts')


<style>


.reveal{

opacity:0;

transform:translateY(50px);

transition:.8s ease;

}



.reveal.show{

opacity:1;

transform:translateY(0);

}



.filter{

padding:12px 25px;

border-radius:999px;

border:1px solid #0b1f3a;

transition:.3s;

}



.filter.active,
.filter:hover{

background:#0b1f3a;

color:white;

}



.vehicle-card.hide{

display:none;

}



</style>





<script>


document.addEventListener("DOMContentLoaded",()=>{


// ANIMATION


const items=document.querySelectorAll(".reveal");


function reveal(){

items.forEach(item=>{

if(item.getBoundingClientRect().top < window.innerHeight-100){

item.classList.add("show");

}

});

}


window.addEventListener("scroll",reveal);

reveal();






// FILTER


const buttons=document.querySelectorAll(".filter");

const cards=document.querySelectorAll(".vehicle-card");



buttons.forEach(btn=>{


btn.addEventListener("click",()=>{


buttons.forEach(b=>b.classList.remove("active"));

btn.classList.add("active");



let kategori=btn.dataset.filter;



cards.forEach(card=>{


if(
kategori=="all" ||
card.dataset.category==kategori
){

card.classList.remove("hide");

}

else{

card.classList.add("hide");

}



});



});


});



});


</script>


@endpush