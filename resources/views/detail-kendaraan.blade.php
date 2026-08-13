@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="bg-[#0b1f3a] relative overflow-hidden py-24">
    <div class="absolute w-[500px] h-[500px] bg-white/10 rounded-full blur-3xl -top-40 -right-40"></div>

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
        <div class="reveal">
            @if(Str::contains($mobil->gambar, 'kendaraan'))
                <img src="{{ asset('storage/'.$mobil->gambar) }}" class="w-full object-contain drop-shadow-2xl">
            @else
                <img src="{{ asset('images/'.$mobil->gambar) }}" class="w-full object-contain drop-shadow-2xl">
            @endif
        </div>

        <div class="text-white reveal">
            <span class="bg-white/20 px-5 py-2 rounded-full text-sm">
                {{ $mobil->kategori }}
            </span>

            <h1 class="text-5xl font-bold mt-6">
                {{ $mobil->nama }}
            </h1>

            <p class="text-gray-300 text-lg mt-6 leading-relaxed">
                {{ $mobil->deskripsi }}
            </p>

            <div class="mt-8">
                <p class="text-gray-400">Mulai dari</p>
                <h2 class="text-3xl font-bold">
                    {{ $mobil->harga }}
                </h2>
            </div>

            <a href="https://wa.me/6285121546050"
               class="inline-block mt-8 bg-white text-[#0b1f3a] px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                Booking Test Drive
            </a>
        </div>
    </div>
</section>

<!-- GALLERY -->
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center reveal">
            <p class="text-[#0b1f3a] font-semibold tracking-widest uppercase text-sm">
                Vehicle Gallery
            </p>

            <h2 class="text-4xl font-semibold mt-3">
                Tampilan Kendaraan
            </h2>

            <p class="text-gray-500 mt-3">
                Lihat detail kendaraan dari berbagai sudut.
            </p>
        </div>

        <div class="mt-12 relative bg-gray-100 rounded-[40px] shadow-xl h-[550px] flex items-center justify-center overflow-hidden reveal">
            @if($mobil->images->count() > 0)
                <img id="carGallery"
                     src="{{ asset('storage/'.$mobil->images->first()->gambar) }}"
                     class="w-full h-full max-h-[430px] object-contain px-20 transition duration-500">

                @if($mobil->images->count() > 1)
                    <button type="button"
                            onclick="prevImage()"
                            class="gallery-arrow absolute left-8 w-14 h-14 bg-white rounded-full shadow-lg text-xl">
                        ←
                    </button>

                    <button type="button"
                            onclick="nextImage()"
                            class="gallery-arrow absolute right-8 w-14 h-14 bg-white rounded-full shadow-lg text-xl">
                        →
                    </button>
                @endif
            @else
                @if(Str::contains($mobil->gambar, 'kendaraan'))
                    <img src="{{ asset('storage/'.$mobil->gambar) }}" class="w-full h-full max-h-[430px] object-contain px-20">
                @else
                    <img src="{{ asset('images/'.$mobil->gambar) }}" class="w-full h-full max-h-[430px] object-contain px-20">
                @endif
            @endif
        </div>

        @if($mobil->images->count() > 1)
            <div class="flex justify-center gap-3 mt-6 flex-wrap">
                @foreach($mobil->images as $index => $image)
                    <button type="button"
                            onclick="showImage({{ $index }})"
                            class="gallery-thumb {{ $index === 0 ? 'active' : '' }}"
                            data-index="{{ $index }}">
                        <img src="{{ asset('storage/'.$image->gambar) }}"
                             class="w-24 h-16 object-cover rounded-lg">
                    </button>
                @endforeach
            </div>
        @endif
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
                $specGroups = $mobil->specs->groupBy('kategori');
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

@endsection

@push('scripts')

<style>
.reveal {
    opacity: 0;
    transform: translateY(25px);
    transition: opacity .7s ease, transform .7s ease;
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
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

.gallery-thumb {
    padding: 3px;
    border: 2px solid transparent;
    border-radius: 12px;
    opacity: .65;
    transition: .25s ease;
}

.gallery-thumb:hover,
.gallery-thumb.active {
    opacity: 1;
    border-color: #0b1f3a;
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