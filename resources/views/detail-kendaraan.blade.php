@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-[#0b1f3a] relative overflow-hidden py-24">
    <div class="absolute w-[500px] h-[500px] bg-white/10 rounded-full blur-3xl -top-40 -right-40"></div>

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
        <div class="reveal">
            <img
                src="/images/{{$mobil['gambar']}}"
                class="w-full object-contain drop-shadow-2xl floating-car"
            >
        </div>

        <div class="text-white reveal">
            <span class="bg-white/20 px-5 py-2 rounded-full text-sm">
                {{$mobil['kategori']}}
            </span>

            <h1 class="text-5xl font-bold mt-6">
                {{$mobil['nama']}}
            </h1>

            <p class="text-gray-300 text-lg mt-6 leading-relaxed">
                {{$mobil['deskripsi']}}
            </p>

            <div class="mt-8">
                <p class="text-gray-400">
                    Mulai dari
                </p>

                <h2 class="text-3xl font-bold">
                    {{$mobil['harga']}}
                </h2>
            </div>

            <a
                href="[https://wa.me/6285121546050](https://wa.me/6285121546050)"
                class="inline-block mt-8 bg-white text-[#0b1f3a] px-8 py-3 rounded-full font-semibold"
            >
                Booking Test Drive
            </a>
        </div>
    </div>
</section>

<!-- 360 VIEW -->
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center reveal">
            <h2 class="text-4xl font-semibold">
                360° Vehicle Experience
            </h2>

            <p class="text-gray-500 mt-3">
                Putar kendaraan dan pilih warna favorit Anda
            </p>
        </div>

        <div class="mt-12 relative bg-gray-100 rounded-[40px] shadow-xl h-[550px] flex items-center justify-center overflow-hidden reveal">
            <img
                id="carViewer"
                src="/images/360/{{$mobil['folder360']}}/black/1.webp"
                class="max-h-[430px] transition duration-500"
            >

            <button
                id="prev"
                class="absolute left-8 w-14 h-14 bg-white rounded-full shadow text-xl"
            >
                ←
            </button>

            <button
                id="next"
                class="absolute right-8 w-14 h-14 bg-white rounded-full shadow text-xl"
            >
                →
            </button>
        </div>
    </div>
</section>

<!-- WARNA -->
<section class="py-16 bg-gray-100">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-semibold">
            Pilihan Warna
        </h2>

        <div class="flex justify-center gap-10 mt-10">
            <button
                class="color-btn"
                data-color="black"
            >
                <div class="w-16 h-16 rounded-full bg-black shadow-lg border-4 border-white"></div>

                <p class="mt-3">
                    Black
                </p>
            </button>

            <button
                class="color-btn"
                data-color="white"
            >
                <div class="w-16 h-16 rounded-full bg-white shadow-lg border"></div>

                <p class="mt-3">
                    White
                </p>
            </button>

            <button
                class="color-btn"
                data-color="red"
            >
                <div class="w-16 h-16 rounded-full bg-red-600 shadow-lg border-4 border-white"></div>

                <p class="mt-3">
                    Red
                </p>
            </button>
        </div>
    </div>
</section>

<!-- FEATURE -->
<section class="py-28 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center reveal">
            <p class="text-[#0b1f3a] font-semibold tracking-widest uppercase text-sm">
                Performance Highlight
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mt-4 text-[#0b1f3a]">
                Designed For Every Journey
            </h2>

            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Performa, teknologi, dan kenyamanan yang dirancang untuk memberikan pengalaman berkendara terbaik.
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-6 mt-16">

            @foreach([
                [
                    'image'=>'engineering.png',
                    'title'=>'Mesin',
                    'value'=>'1.5L',
                    'desc'=>'Smartstream Engine'
                ],
                [
                    'image'=>'server.png',
                    'title'=>'Performa',
                    'value'=>'115 PS',
                    'desc'=>'Maximum Power'
                ],
                [
                    'image'=>'security.png',
                    'title'=>'Safety',
                    'value'=>'SmartSense',
                    'desc'=>'Advanced Safety System'
                ],
                [
                    'image'=>'seat.png',
                    'title'=>'Kapasitas',
                    'value'=>'5 Seat',
                    'desc'=>'Comfort Passenger'
                ]
            ] as $index=>$item)

            <div class="feature-card reveal" style="transition-delay: {{$index * 120}}ms">

                <div class="feature-image">
                    <img 
                        src="/images/{{$item['image']}}" 
                        alt="{{$item['title']}}"
                    >
                </div>

                <div class="mt-8">
                    <p class="feature-title">
                        {{$item['title']}}
                    </p>

                    <h3 class="feature-value">
                        {{$item['value']}}
                    </h3>

                    <span class="feature-desc">
                        {{$item['desc']}}
                    </span>
                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>

<!-- SPESIFIKASI -->
<section class="py-28 bg-[#f5f7fb] overflow-hidden">
    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center reveal">
            <p class="text-[#0b1f3a] font-semibold tracking-widest uppercase text-sm">
                Vehicle Information
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mt-4 text-[#0b1f3a]">
                Spesifikasi Kendaraan
            </h2>

            <p class="text-gray-500 mt-4 max-w-2xl mx-auto">
                Detail performa, teknologi, dan fitur kendaraan untuk memberikan pengalaman berkendara terbaik.
            </p>
        </div>


        <div class="grid md:grid-cols-2 gap-6 mt-16">

            @foreach([
                [
                    'title'=>'Mesin',
                    'value'=>'1.5L Smartstream',
                    'desc'=>'Engine Technology'
                ],
                [
                    'title'=>'Tenaga Maksimum',
                    'value'=>'115 PS',
                    'desc'=>'Maximum Power Output'
                ],
                [
                    'title'=>'Transmisi',
                    'value'=>'Automatic IVT',
                    'desc'=>'Smooth Gear Transmission'
                ],
                [
                    'title'=>'Drive Mode',
                    'value'=>'Eco • Normal • Sport',
                    'desc'=>'Adjustable Driving Mode'
                ],
                [
                    'title'=>'Kapasitas Penumpang',
                    'value'=>'5 Passenger',
                    'desc'=>'Comfortable Cabin Space'
                ],
                [
                    'title'=>'Sistem Keamanan',
                    'value'=>'Hyundai SmartSense',
                    'desc'=>'Advanced Safety Technology'
                ],
                [
                    'title'=>'Konsumsi BBM',
                    'value'=>'Efficient Fuel System',
                    'desc'=>'Optimized Performance'
                ],
                [
                    'title'=>'Teknologi',
                    'value'=>'Smart Connectivity',
                    'desc'=>'Modern Digital Experience'
                ]
            ] as $index=>$item)

            <div 
                class="spec-premium reveal"
                style="transition-delay: {{$index * 100}}ms"
            >

                <div class="spec-number">
                    {{str_pad($index + 1,2,'0',STR_PAD_LEFT)}}
                </div>

                <div>
                    <p>
                        {{$item['title']}}
                    </p>

                    <h3>
                        {{$item['value']}}
                    </h3>

                    <span>
                        {{$item['desc']}}
                    </span>
                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>

@endsection

@push('scripts')

<style>
/* FEATURE CARD */

.feature-card {
    background:#ffffff;
    border:1px solid #e8ebf0;
    border-radius:24px;
    padding:30px;
    transition:all .4s ease;
    position:relative;
    overflow:hidden;
}

.feature-card::before {
    content:"";
    position:absolute;
    width:120px;
    height:120px;
    background:#0b1f3a;
    opacity:.03;
    border-radius:50%;
    top:-50px;
    right:-50px;
}

.feature-card:hover {
    transform:translateY(-8px);
    border-color:#0b1f3a;
    box-shadow:0 20px 45px rgba(11,31,58,.08);
}

.feature-image {
    width:90px;
    height:90px;
    border-radius:20px;
    overflow:hidden;
    background:#f4f6f9;
    display:flex;
    align-items:center;
    justify-content:center;
}

.feature-image img {
    width:100%;
    height:100%;
    object-fit:cover;
}

.feature-title {
    font-size:13px;
    text-transform:uppercase;
    letter-spacing:.12em;
    color:#9ca3af;
    font-weight:600;
}

.feature-value {
    margin-top:12px;
    font-size:34px;
    line-height:1;
    font-weight:700;
    color:#0b1f3a;
}

.feature-desc {
    display:block;
    margin-top:12px;
    font-size:14px;
    color:#6b7280;
}


/* REVEAL ANIMATION */

.reveal {
    opacity:0;
    transform:translateY(30px);
    transition:
        opacity .7s ease,
        transform .7s ease;
}

.reveal.active {
    opacity:1;
    transform:none;
}

/* SPECIFICATION CARD */

.spec-card {
    background: white;
    border-radius: 18px;
    padding: 32px;
    display: flex;
    align-items: center;
    gap: 25px;
    border: 1px solid #e8ebf0;
    transition: .4s;
}

.spec-card:hover {
    border-color: #0b1f3a;
    box-shadow: 0 15px 35px rgba(0,0,0,.07);
}

.spec-line {
    width: 3px;
    height: 65px;
    background: #0b1f3a;
    border-radius: 10px;
}

.spec-card h3 {
    margin-top: 8px;
    font-size: 24px;
    font-weight: 700;
    color: #0b1f3a;
}

/* SCROLL ANIMATION */

.reveal {
    opacity: 0;
    transform: translateY(25px);
    transition: opacity .7s ease, transform .7s ease;
}

.reveal.active {
    opacity: 1;
    transform: none;
}

/* DELAY ANIMATION */

.feature-card:nth-child(1),
.spec-card:nth-child(1) {
    transition-delay: .1s;
}

.feature-card:nth-child(2),
.spec-card:nth-child(2) {
    transition-delay: .2s;
}

.feature-card:nth-child(3),
.spec-card:nth-child(3) {
    transition-delay: .3s;
}

.feature-card:nth-child(4),
.spec-card:nth-child(4) {
    transition-delay: .4s;
}

/* PREMIUM SPECIFICATION */

.spec-premium {
    background:white;
    border:1px solid #e5e7eb;
    border-radius:22px;
    padding:28px;
    display:flex;
    align-items:flex-start;
    gap:25px;
    transition:.35s ease;
}

.spec-premium:hover {
    transform:translateY(-5px);
    border-color:#0b1f3a;
    box-shadow:0 20px 40px rgba(11,31,58,.08);
}

.spec-number {
    width:42px;
    height:42px;
    border-radius:12px;
    background:#0b1f3a;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:13px;
    font-weight:600;
}

.spec-premium p {
    font-size:13px;
    text-transform:uppercase;
    letter-spacing:.08em;
    color:#9ca3af;
    font-weight:600;
}

.spec-premium h3 {
    margin-top:8px;
    font-size:24px;
    font-weight:700;
    color:#0b1f3a;
}

.spec-premium span {
    display:block;
    margin-top:8px;
    font-size:14px;
    color:#6b7280;
}

</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const revealItems = document.querySelectorAll('.reveal');

    function reveal() {
        revealItems.forEach(item => {
            const top = item.getBoundingClientRect().top;

            if (top < window.innerHeight - 80) {
                item.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', reveal);

    reveal();
});
</script>

@endpush