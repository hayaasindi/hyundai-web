@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="relative overflow-hidden bg-[#07182f] py-28">

    <!-- Background Accent -->
    <div class="absolute -top-40 -right-40 w-[600px] h-[600px] 
                bg-white/10 rounded-full blur-3xl">
    </div>


    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">


            <!-- IMAGE VEHICLE -->
            <div class="reveal relative">


                <!-- Glow -->
                <div class="absolute inset-0 bg-white/10 blur-3xl rounded-full scale-75"></div>



                <!-- Image Container -->
                <div class="relative bg-white/5 backdrop-blur-sm 
                            rounded-[40px] p-10
                            border border-white/10
                            shadow-2xl">


                    @if(Str::contains($mobil->gambar, 'kendaraan'))

                        <img src="{{ asset('storage/'.$mobil->gambar) }}"
                             class="relative w-full 
                                    h-[420px]
                                    object-contain
                                    drop-shadow-[0_30px_40px_rgba(0,0,0,.45)]
                                    hover:scale-105
                                    transition duration-700">

                    @else

                        <img src="{{ asset('images/'.$mobil->gambar) }}"
                             class="relative w-full 
                                    h-[420px]
                                    object-contain
                                    drop-shadow-[0_30px_40px_rgba(0,0,0,.45)]
                                    hover:scale-105
                                    transition duration-700">

                    @endif


                </div>


                <!-- Floating Info -->
                <div class="absolute -bottom-6 left-10 
                            bg-white rounded-2xl shadow-xl
                            px-8 py-5">


                    <p class="text-gray-400 text-sm">
                        Vehicle Category
                    </p>


                    <p class="text-[#0b1f3a] font-bold text-lg">
                        {{ $mobil->kategori }}
                    </p>


                </div>


            </div>






            <!-- CONTENT -->
            <div class="text-white reveal">


                <div class="inline-flex items-center
                            bg-white/10
                            border border-white/20
                            px-5 py-2
                            rounded-full">

                    <span class="text-sm tracking-widest uppercase">
                        Hyundai Kalimalang Official
                    </span>

                </div>



                <h1 class="mt-8 
                           text-5xl md:text-6xl
                           font-bold
                           leading-tight">

                    {{ $mobil->nama }}

                </h1>



                <div class="w-20 h-1 bg-white mt-8 mb-8 rounded-full"></div>




                <p class="text-gray-300
                          text-lg
                          leading-relaxed
                          max-w-xl">

                    {{ $mobil->deskripsi }}

                </p>






                <!-- PRICE BOX -->

                <div class="mt-10 
                            bg-white/10
                            border border-white/10
                            rounded-3xl
                            p-6
                            max-w-md">


                    <p class="text-gray-400 text-sm">
                        Harga mulai dari
                    </p>


                    <h2 class="text-3xl font-bold mt-2">

                        {{ $mobil->harga }}

                    </h2>


                </div>





                <!-- CTA -->

                <div class="mt-10 flex flex-wrap gap-4">


                    <a href="https://wa.me/6285121546050"

                       class="bg-white
                              text-[#0b1f3a]
                              px-10
                              py-4
                              rounded-full
                              font-semibold
                              hover:bg-gray-100
                              transition
                              shadow-xl">


                        Booking Test Drive


                    </a>


                </div>



            </div>


        </div>


    </div>


</section>

<!-- GALLERY -->
<section class="py-28 bg-white">

<div class="max-w-7xl mx-auto px-6">


    <!-- HEADER -->

    <div class="text-center reveal">

        <p class="text-[#0b1f3a] font-semibold tracking-[0.35em] uppercase text-sm">
            Vehicle Gallery
        </p>


        <h2 class="text-4xl md:text-5xl font-bold mt-4 text-[#0b1f3a]">
            Tampilan Kendaraan
        </h2>


        <p class="text-gray-500 mt-4 max-w-xl mx-auto">
            Eksplorasi detail kendaraan dari berbagai sudut dengan tampilan premium.
        </p>


    </div>





    <!-- MAIN GALLERY -->

    <div class="mt-14 relative 
                bg-gradient-to-br from-[#f8fafc] to-[#e9eef5]
                rounded-[45px]
                shadow-2xl
                overflow-hidden
                h-[620px]
                flex items-center justify-center
                reveal">


        <!-- LIGHT EFFECT -->

        <div class="absolute 
                    w-[500px] 
                    h-[500px]
                    bg-white
                    rounded-full
                    blur-3xl
                    opacity-70">
        </div>




        @if($mobil->images->count() > 0)


            <img id="carGallery"

                 src="{{ asset('storage/'.$mobil->images->first()->gambar) }}"

                 class="relative z-10
                        w-full
                        h-full
                        object-contain
                        scale-110
                        px-8
                        transition duration-700
                        hover:scale-115">





            @if($mobil->images->count() > 1)


                <!-- LEFT BUTTON -->

                <button type="button"

                        onclick="prevImage()"

                        class="gallery-arrow absolute left-8 z-20

                               w-16 h-16

                               rounded-full

                               bg-white/90

                               backdrop-blur

                               shadow-xl

                               text-[#0b1f3a]

                               text-2xl

                               hover:bg-[#0b1f3a]

                               hover:text-white

                               transition">


                    ←


                </button>





                <!-- RIGHT BUTTON -->

                <button type="button"

                        onclick="nextImage()"

                        class="gallery-arrow absolute right-8 z-20

                               w-16 h-16

                               rounded-full

                               bg-white/90

                               backdrop-blur

                               shadow-xl

                               text-[#0b1f3a]

                               text-2xl

                               hover:bg-[#0b1f3a]

                               hover:text-white

                               transition">


                    →


                </button>



            @endif



        @else



            @if(Str::contains($mobil->gambar, 'kendaraan'))


                <img src="{{ asset('storage/'.$mobil->gambar) }}"

                     class="w-full h-full object-contain px-10">


            @else


                <img src="{{ asset('images/'.$mobil->gambar) }}"

                     class="w-full h-full object-contain px-10">


            @endif



        @endif



    </div>






    <!-- THUMBNAIL -->

    @if($mobil->images->count() > 1)


    <div class="flex justify-center gap-5 mt-8 flex-wrap reveal">


        @foreach($mobil->images as $index => $image)


        <button type="button"

                onclick="showImage({{ $index }})"

                class="gallery-thumb

                       {{ $index === 0 ? 'active' : '' }}

                       p-1

                       rounded-2xl

                       bg-white

                       shadow-md

                       transition

                       hover:-translate-y-1"

                data-index="{{ $index }}">



            <img src="{{ asset('storage/'.$image->gambar) }}"

                 class="w-28 h-20 
                        object-cover 
                        rounded-xl">



        </button>


        @endforeach


    </div>


    @endif



</div>

</section>

<!-- Variant -->
<section class="py-24 bg-[#0b1f3a]">

<div class="max-w-6xl mx-auto px-6">


    <!-- HEADER -->
    <div class="text-center reveal">

        <p class="text-white/70 uppercase tracking-[0.3em] text-sm">
            Vehicle Variant
        </p>


        <h2 class="text-4xl md:text-5xl font-bold text-white mt-4">
            Pilihan Tipe Kendaraan
        </h2>


        <p class="text-gray-300 mt-4">
            Bandingkan pilihan varian dan pilih kendaraan yang sesuai kebutuhan Anda.
        </p>

    </div>



<!-- TABLE CARD -->

<div class="mt-12 bg-white rounded-[36px] overflow-hidden shadow-2xl reveal">


    <!-- HEADER -->

    <div class="grid md:grid-cols-4 bg-gray-300 px-8 py-6 text-center">


        <div>
            <p class="text-xs uppercase tracking-wider text-gray-400">
                Variant
            </p>

            <h4 class="text-[#0b1f3a] font-bold mt-1">
                Tipe Kendaraan
            </h4>
        </div>



        <div>

            <p class="text-xs uppercase tracking-wider text-gray-400">
                Starting Price
            </p>

            <h4 class="text-[#0b1f3a] font-bold mt-1">
                Harga
            </h4>

        </div>



        <div>

            <p class="text-xs uppercase tracking-wider text-gray-400">
                Availability
            </p>

            <h4 class="text-[#0b1f3a] font-bold mt-1">
                Status
            </h4>

        </div>



        <div>

            <p class="text-xs uppercase tracking-wider text-gray-400">
                Contact
            </p>

            <h4 class="text-[#0b1f3a] font-bold mt-1">
                Konsultasi
            </h4>

        </div>


    </div>





@foreach($mobil->variants as $variant)


<div class="variant-row grid md:grid-cols-4 gap-6 items-center px-8 py-8 text-center border-t border-gray-100 hover:bg-[#f8fafc] transition duration-300">



    <!-- NAMA -->

    <div>


        <h3 class="text-xl font-bold text-black-200">

            {{$variant->nama}}

        </h3>


        <p class="text-sm text-gray-400 mt-2">

            Hyundai {{$mobil->nama}}

        </p>


    </div>





    <!-- HARGA -->


    <div>


        <p class="text-lg font-bold text-[#0b1f3a]">

            {{$variant->harga}}

        </p>


        <span class="text-xs text-gray-400">

            On The Road

        </span>


    </div>





    <!-- STATUS -->


    <div>


        <span class="inline-flex items-center justify-center gap-2 px-5 py-2 rounded-full bg-green-50 text-green-600 text-sm font-semibold">


            <span class="w-2 h-2 bg-green-500 rounded-full"></span>


            Available


        </span>


    </div>





    <!-- BUTTON -->


    <div>


        <a href="https://wa.me/{{$variant->whatsapp}}?text={{urlencode(
            'Halo Kak, saya tertarik dengan Hyundai '.$mobil->nama.
            ' tipe '.$variant->nama.
            ' dengan harga '.$variant->harga.
            '. Mohon informasi lebih lanjut.'
        )}}"


        class="inline-flex items-center justify-center gap-2 bg-[#0b1f3a] hover:bg-[#142f55] text-white px-8 py-3 rounded-full font-semibold shadow-md hover:shadow-lg transition duration-300">


            <i class="bi bi-whatsapp text-lg"></i>


            Chat Sales


        </a>


    </div>




</div>


@endforeach



</div>


</div>

</section>

<!-- SPESIFIKASI -->
<section class="py-24 bg-[#f5f7fb]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center reveal">
            <p class="text-[#0b1f3a] font-semibold tracking-widest uppercase text-sm">
                Vehicle Specification
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mt-4 text-[#0b1f3a]">
                Spesifikasi Kendaraan
            </h2>

            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Detail performa, mesin, transmisi, dimensi, dan komponen kendaraan.
            </p>
        </div>

        @if($mobil->specs->count() > 0)
            @php
                $specGroups = $mobil->specs
                ->where('kategori','!=','Fitur Unggulan')
                ->groupBy('kategori');

                $fiturGroups = $mobil->specs
                ->where('kategori','Fitur Unggulan');
            @endphp

            <div class="mt-14 space-y-6">
                @foreach($specGroups as $kategori => $specs)
                    <div class="spec-section reveal">
                        <div class="spec-header">
                            <span class="spec-header-line"></span>
                            <h3>{{ $kategori }}</h3>
                        </div>

                        <div class="spec-content">
                            @foreach($specs as $spec)
                                @if($kategori === 'Performa' && $spec->nama === 'Package')
                                    <div class="spec-package">
                                        <span>Package</span>
                                        <strong>{{ $spec->nilai }}</strong>
                                    </div>
                                @else
                                    <div class="spec-row">
                                        <span class="spec-name">{{ $spec->nama }}</span>
                                        <span class="spec-value">{{ $spec->nilai }}</span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="mt-12 bg-white border border-gray-200 rounded-2xl p-8 text-center text-gray-500 reveal">
                Spesifikasi kendaraan belum tersedia.
            </div>
        @endif
    </div>
</section>

<!-- FEATURES -->
<section class="py-28 bg-[#f8fafc]">

<div class="max-w-7xl mx-auto px-6">


    <!-- HEADER -->

    <div class="text-center reveal">


        <p class="text-[#0b1f3a] font-semibold tracking-[0.35em] uppercase text-sm">
            Vehicle Features
        </p>



        <h2 class="text-4xl md:text-5xl font-bold text-[#0b1f3a] mt-5">
            Fitur Unggulan
        </h2>



        <p class="text-gray-500 mt-5 max-w-2xl mx-auto leading-relaxed">
            Teknologi modern yang dirancang untuk menghadirkan kenyamanan,
            keamanan, dan pengalaman berkendara terbaik.
        </p>


    </div>






    <!-- FEATURE CARDS -->

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">


        @foreach($fiturGroups->values() as $index => $fitur)



        <div class="feature-card reveal group">


            <!-- TOP NUMBER -->


            <div class="flex justify-between items-start">


                <div class="feature-number">

                    {{ str_pad($index+1,2,'0',STR_PAD_LEFT) }}

                </div>



                <div class="feature-icon">


                    ✓


                </div>


            </div>





            <!-- CONTENT -->


            <div class="mt-10">


                <h3 class="text-xl font-bold text-[#0b1f3a]
                           group-hover:text-[#142f55]
                           transition duration-300">

                    {{ $fitur->nama }}

                </h3>



                <p class="text-gray-500 mt-4 leading-relaxed">

                    {{ $fitur->nilai }}

                </p>


            </div>





            <!-- BOTTOM LINE -->

            <div class="feature-line"></div>


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

    transform:
    translateY(50px)
    scale(.98);

    filter:blur(6px);

    transition:
    opacity .8s ease,
    transform .8s cubic-bezier(.22,1,.36,1),
    filter .8s ease;

}

.reveal.active {

    opacity:1;

    transform:
    translateY(0)
    scale(1);

    filter:blur(0);

}

.gallery-arrow {
    color: #0b1f3a;
    transition: .25s ease;
    z-index: 10;
}

.gallery-arrow:hover {
    transform: scale(1.08);
    background: #0b1f3a;
    color: #fff;
}

.gallery-thumb.active{
    border:3px solid #0b1f3a;
}


.gallery-thumb{
    opacity:.65;
}


.gallery-thumb.active,
.gallery-thumb:hover{
    opacity:1;
}


.gallery-arrow{
    transition:.3s ease;
}


.gallery-arrow:hover{
    transform:scale(1.1);
}

.spec-section {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(11,31,58,.04);
}

.spec-header {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 22px 28px;
    background: #0b1f3a;
    color: #fff;
}

.spec-header-line {
    width: 4px;
    height: 24px;
    background: #fff;
    border-radius: 999px;
}

.spec-header h3 {
    margin: 0;
    font-size: 18px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .08em;
}

.spec-content {
    padding: 10px 28px 18px;
}

.spec-row {
    display: grid;
    grid-template-columns: minmax(220px, 1fr) 1.3fr;
    gap: 30px;
    padding: 18px 0;
    border-bottom: 1px solid #edf0f4;
}

.spec-row:last-child {
    border-bottom: none;
}

.spec-name {
    color: #6b7280;
    font-size: 14px;
}

.spec-value {
    color: #0b1f3a;
    font-size: 15px;
    font-weight: 600;
}

.spec-package {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 22px 0 14px;
}

.spec-package span {
    color: #6b7280;
    font-size: 14px;
}

.spec-package strong {
    color: #0b1f3a;
    font-size: 21px;
}

@media (max-width: 768px) {
    .spec-row {
        grid-template-columns: 1fr;
        gap: 6px;
    }

    .spec-package {
        flex-direction: column;
        align-items: flex-start;
    }
}

.delay-1{
    transition-delay:.15s;
}


.delay-2{
    transition-delay:.3s;
}


.variant-row:nth-child(2){
    transition-delay:.1s;
}


.variant-row:nth-child(3){
    transition-delay:.2s;
}


.variant-row:nth-child(4){
    transition-delay:.3s;
}


.variant-row:nth-child(5){
    transition-delay:.4s;
}

.variant-row{
    opacity:1;
    transform:none;
}


.variant-row.active{
    opacity:1;
    transform:translateY(0);
}

.feature-item:hover{
    transform:translateX(8px);
}

.feature-card{

    background:white;

    border:1px solid #e5e7eb;

    border-radius:32px;

    padding:32px;

    min-height:260px;

    position:relative;

    overflow:hidden;

    transition:.5s ease;

    box-shadow:0 10px 30px rgba(11,31,58,.04);

}



.feature-card:hover{

    transform:translateY(-10px);

    box-shadow:0 25px 50px rgba(11,31,58,.12);

}




.feature-number{

    width:55px;

    height:55px;

    border-radius:18px;

    background:#0b1f3a;

    color:white;

    display:flex;

    align-items:center;

    justify-content:center;

    font-weight:700;

    font-size:18px;

}



.feature-icon{


    width:45px;

    height:45px;

    border-radius:50%;

    border:1px solid rgba(11,31,58,.15);

    color:#0b1f3a;

    display:flex;

    align-items:center;

    justify-content:center;

    font-weight:bold;

    transition:.4s;


}



.feature-card:hover .feature-icon{


    background:#0b1f3a;

    color:white;

    transform:rotate(360deg);


}



.feature-line{


    position:absolute;

    bottom:0;

    left:0;

    width:0%;

    height:5px;

    background:#0b1f3a;

    transition:.5s ease;


}



.feature-card:hover .feature-line{

    width:100%;

}

.feature-card.reveal{

    opacity:0;

    transform:translateY(40px);

    transition:
    opacity .8s ease,
    transform .8s ease;

}


.feature-card.reveal.active{

    opacity:1;

    transform:translateY(0);

}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const revealItems = document.querySelectorAll('.reveal');

    function reveal() {
        revealItems.forEach(item => {
            if (item.getBoundingClientRect().top < window.innerHeight - 80) {
                item.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', reveal);
    reveal();
});

const galleryImages = [
    @foreach($mobil->images as $image)
        "{{ asset('storage/'.$image->gambar) }}",
    @endforeach
];

let galleryIndex = 0;

function updateGallery() {
    const gallery = document.getElementById('carGallery');

    if (!gallery || galleryImages.length === 0) {
        return;
    }

    gallery.src = galleryImages[galleryIndex];

    document.querySelectorAll('.gallery-thumb').forEach(thumb => {
        thumb.classList.remove('active');
    });

    const activeThumb = document.querySelector(`.gallery-thumb[data-index="${galleryIndex}"]`);

    if (activeThumb) {
        activeThumb.classList.add('active');
    }
}

function nextImage() {
    if (galleryImages.length === 0) {
        return;
    }

    galleryIndex = (galleryIndex + 1) % galleryImages.length;
    updateGallery();
}

function prevImage() {
    if (galleryImages.length === 0) {
        return;
    }

    galleryIndex = (galleryIndex - 1 + galleryImages.length) % galleryImages.length;
    updateGallery();
}

function showImage(index) {
    if (!galleryImages[index]) {
        return;
    }

    galleryIndex = index;
    updateGallery();
}
</script>

@endpush