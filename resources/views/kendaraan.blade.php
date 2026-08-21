@extends('layouts.app')

@section('content')

<!-- HERO SLIDER -->
<section class="relative w-full h-[90vh] overflow-hidden group">

    <!-- SLIDES -->
    <div id="slider" class="w-full h-full relative">

        <!-- SLIDE 1 -->
        <div class="slide absolute inset-0 opacity-100 transition-opacity duration-1000">
            <img src="/images/palisade.jpg" class="w-full h-full object-cover">
        </div>

        <!-- SLIDE 2 -->
        <div class="slide absolute inset-0 opacity-100 transition-opacity duration-1000">
            <img src="/images/santa.avif" class="w-full h-full object-cover">
        </div>

        <!-- SLIDE 3 -->
        <div class="slide absolute inset-0 opacity-100 transition-opacity duration-[1500]">
            <img src="/images/ionic3.jpg" class="w-full h-full object-cover">
        </div>

    </div>

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
        <div class="text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                Temukan Mobil Impian Anda
            </h1>
            <p class="text-lg md:text-xl mb-6">
                Hyundai Kalimalang Official
            </p>
        </div>
    </div>

    <!-- BUTTON LEFT -->
    <button onclick="prevSlide()" 
        class="absolute left-6 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/70 backdrop-blur-md text-white w-12 h-12 flex items-center justify-center rounded-full transition duration-300 shadow-lg opacity-0 group-hover:opacity-100">
        &#10094;
    </button>

    <!-- BUTTON RIGHT -->
    <button onclick="nextSlide()" 
        class="absolute right-6 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/70 backdrop-blur-md text-white w-12 h-12 flex items-center justify-center rounded-full transition duration-300 shadow-lg opacity-0 group-hover:opacity-100">
        &#10095;
    </button>

</section>



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



        <div class="flex justify-center flex-wrap gap-4 mb-16 reveal">

            <button class="filter active" data-filter="all">
                Semua
            </button>

            <button class="filter" data-filter="SUV">
                SUV
            </button>

            <button class="filter" data-filter="MPV">
                MPV
            </button>

            <button class="filter" data-filter="EV">
                EV
            </button>

            <button class="filter" data-filter="Crossover">
                Crossover
            </button>

        </div>




        <div id="vehicleGrid" class="grid md:grid-cols-3 gap-10">


            @foreach($mobil as $item)


            <div class="vehicle-card group bg-[#0b1f3a] rounded-3xl overflow-hidden shadow-xl hover:-translate-y-3 transition-all duration-500 reveal"
                 data-category="{{ $item->kategori }}">


                <div class="relative overflow-hidden">


                    @if(Str::contains($item->gambar,'kendaraan'))

                        <img
                            src="{{ asset('storage/'.$item->gambar) }}"
                            class="w-full h-64 object-cover group-hover:scale-110 transition duration-700"
                        >

                    @else

                        <img
                            src="{{ asset('images/'.$item->gambar) }}"
                            class="w-full h-64 object-cover group-hover:scale-110 transition duration-700"
                        >

                    @endif



                    @if($item->badge)

                    <span class="absolute top-5 left-5 bg-white text-[#0b1f3a] px-4 py-2 rounded-full text-xs font-semibold shadow">

                        {{ $item->badge }}

                    </span>

                    @endif


                </div>




                <div class="p-7 text-white">


                    <div class="flex justify-between">


                        <h3 class="text-xl font-semibold">

                            {{ $item->nama }}

                        </h3>


                        <span class="text-gray-300 text-sm">

                            {{ $item->kategori }}

                        </span>


                    </div>



                    <p class="text-gray-300 text-sm mt-4 leading-relaxed">

                        {{ $item->deskripsi }}

                    </p>



                    <div class="flex gap-3 mt-5">


                        <span class="bg-white/10 px-3 py-2 rounded-lg text-xs">

                            {{ $item->transmisi }}

                        </span>


                        <span class="bg-white/10 px-3 py-2 rounded-lg text-xs">

                            {{ $item->seat }}

                        </span>


                    </div>



                    <div class="border-t border-white/20 my-6"></div>




                    <div class="flex justify-between items-center">


                        <div>

                            <p class="text-xs text-gray-400">
                                Harga
                            </p>


                            <p class="font-semibold">

                                {{ $item->harga }}

                            </p>

                        </div>



                        <a href="/kendaraan/{{ $item->slug }}"
                           class="bg-white text-[#0b1f3a] px-5 py-2 rounded-full text-sm font-semibold hover:bg-gray-200 transition">

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

.reveal {
    opacity:0;
    transform:translateY(50px);
    transition:.8s ease;
}


.reveal.show {
    opacity:1;
    transform:translateY(0);
}


.filter {
    padding:12px 25px;
    border-radius:999px;
    border:1px solid #0b1f3a;
    transition:.3s;
}


.filter.active,
.filter:hover {
    background:#0b1f3a;
    color:white;
}


.vehicle-card.hide {
    display:none;
}

</style>


<script>

document.addEventListener("DOMContentLoaded",()=>{


    const items=document.querySelectorAll(".reveal");


    function reveal(){

        items.forEach(item=>{

            if(item.getBoundingClientRect().top < window.innerHeight - 100){

                item.classList.add("show");

            }

        });

    }


    window.addEventListener("scroll",reveal);

    reveal();




    const buttons=document.querySelectorAll(".filter");

    const cards=document.querySelectorAll(".vehicle-card");



    buttons.forEach(btn=>{


        btn.addEventListener("click",()=>{


            buttons.forEach(b=>{

                b.classList.remove("active");

            });



            btn.classList.add("active");



            let kategori=btn.dataset.filter;



            cards.forEach(card=>{


                if(
                    kategori==="all" ||
                    card.dataset.category===kategori
                ){

                    card.classList.remove("hide");

                }

                else {

                    card.classList.add("hide");

                }


            });


        });


    });


});

</script>

@endpush