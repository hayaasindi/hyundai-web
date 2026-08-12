@extends('layouts.app')

@section('content')

<!-- HERO SLIDER -->
<section class="relative w-full h-[90vh] overflow-hidden group">

    <div id="slider" class="w-full h-full relative">

        <div class="slide absolute inset-0 opacity-100 transition-opacity duration-1000">
            <img src="/images/slider1.jpeg" class="w-full h-full object-cover">
        </div>

        <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000">
            <img src="/images/slider2.jpeg" class="w-full h-full object-cover">
        </div>

        <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000">
            <img src="/images/slider3.jpeg" class="w-full h-full object-cover">
        </div>

    </div>

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
        <div class="text-center text-white px-6 reveal">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                Hubungi Kami
            </h1>
            <p class="text-lg md:text-xl text-white/80">
                Konsultasi pembelian Hyundai dengan mudah dan cepat
            </p>
        </div>
    </div>

    <!-- NAV BUTTON -->
    <button onclick="prevSlide()" 
        class="absolute left-6 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/70 text-white w-12 h-12 rounded-full opacity-0 group-hover:opacity-100 transition">
        &#10094;
    </button>

    <button onclick="nextSlide()" 
        class="absolute right-6 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/70 text-white w-12 h-12 rounded-full opacity-0 group-hover:opacity-100 transition">
        &#10095;
    </button>

</section>

<!-- SECTION INFO SALES -->
<section class="py-24 bg-gray-50">

    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            <!-- FOTO (LEAN & PREMIUM) -->
            <div class="reveal flex justify-center">
                <div class="w-[260px]">

                    <img src="/images/profilee.jpeg" 
                        class="w-full h-[340px] object-cover rounded-xl shadow-sm">

                    <!-- NAME CARD -->
                    <div class="mt-4 text-center">
                        <h3 class="text-gray-900 font-semibold text-lg">
                            Daffa Syaddad
                        </h3>
                        <p class="text-gray-500 text-sm">
                        Sales Hyundai
                        <br>    
                        Professional Consultant
                        </p>
                    </div>

                </div>
            </div>

            <!-- INFO -->
            <div class="reveal">

                <div class="w-12 h-1 bg-[#0b1f3a] mx-auto mb-5 rounded"></div>
                <h2 class="text-3xl md:text-4xl font-semibold text-gray-900 leading-snug mb-4">
                    Konsultasi Kendaraan Hyundai
                </h2>

                <div class="w-12 h-[2px] bg-[#0b1f3a] mb-6"></div>

                <p class="text-gray-600 leading-relaxed mb-8 max-w-lg">
                    Kami membantu Anda mendapatkan kendaraan Hyundai terbaik dengan proses yang cepat, transparan, dan profesional.
                    Mulai dari pemilihan unit hingga pengajuan kredit, semua kami dampingi hingga selesai.
                </p>

                <!-- LIST -->
                <div class="space-y-4 mb-10">

                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-lg border border-gray-200 flex items-center justify-center">
                            <img src="/images/checklist.png" class="w-5 h-5 object-contain">
                        </div>
                        <span class="text-gray-700 text-sm">
                            Konsultasi cepat & tanpa biaya
                        </span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-lg border border-gray-200 flex items-center justify-center">
                            <img src="/images/checklist.png" class="w-5 h-5 object-contain">
                        </div>
                        <span class="text-gray-700 text-sm">
                            Dibantu hingga proses disetujui
                        </span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-lg border border-gray-200 flex items-center justify-center">
                            <img src="/images/checklist.png" class="w-5 h-5 object-contain">
                        </div>
                        <span class="text-gray-700 text-sm">
                            Pilihan leasing terbaik
                        </span>
                    </div>

                </div>

                <!-- BUTTON -->
                <a href="https://wa.me/6285121546050?text=Halo%20saya%20ingin%20konsultasi%20mobil%20Hyundai"
                   target="_blank"
                   class="inline-flex items-center gap-3 bg-[#0b1f3a] text-white px-7 py-3 rounded-lg text-sm font-medium hover:bg-[#16345f] transition">
                   Hubungi via WhatsApp →
                </a>

            </div>

        </div>

    </div>

</section>

<!-- SECTION KONTAK DETAIL -->
<section class="py-24 bg-white">

    <div class="max-w-6xl mx-auto px-6">

        <!-- TITLE -->
        <div class="text-center mb-16 reveal">
            <div class="w-12 h-1 bg-[#0b1f3a] mx-auto mb-5 rounded"></div>
            
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900 tracking-tight">
                Hubungi Kami
            </h2>
            <p class="text-gray-500 mt-3 text-sm">
                Informasi kontak untuk konsultasi dan pemesanan kendaraan
            </p>
        </div>

        <!-- GRID CARD -->
        <div class="grid md:grid-cols-3 gap-6">

            <!-- CARD 1 -->
            <div class="group bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition reveal">

                <!-- ICON (NO BG) -->
                <img src="/images/whatsapp.png" 
                     class="w-10 h-10 mx-auto mb-4 object-contain">

                <!-- TEXT -->
                <h3 class="text-gray-900 font-semibold text-base mb-1">
                    WhatsApp
                </h3>

                <p class="text-gray-500 text-sm mb-4">
                    +62 851-2154-6050
                </p>

                <!-- ACTION -->
                <a href="https://wa.me/6285121546050"
                   target="_blank"
                   class="inline-block text-[#0b1f3a] text-sm font-medium group-hover:underline">
                   Chat Sekarang →
                </a>

            </div>

            <!-- CARD 2 -->
            <div class="group bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition reveal">

                <img src="/images/mapss.png" 
                     class="w-10 h-10 mx-auto mb-4 object-contain">

                <h3 class="text-gray-900 font-semibold text-base mb-1">
                    Lokasi
                </h3>

                <p class="text-gray-500 text-sm leading-relaxed">
                    Hyundai Bekasi<br>
                    Tambun Selatan
                </p>

            </div>

            <!-- CARD 3 -->
            <div class="group bg-white border border-gray-200 rounded-xl p-6 text-center hover:shadow-lg transition reveal">

                <img src="/images/service.png" 
                     class="w-10 h-10 mx-auto mb-4 object-contain">

                <h3 class="text-gray-900 font-semibold text-base mb-1">
                    Jam Operasional
                </h3>

                <p class="text-gray-500 text-sm leading-relaxed">
                    Senin - Sabtu<br>
                    09.00 - 17.00
                </p>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->
<section class="py-20 bg-[#0b1f3a] text-white text-center">

    <div class="max-w-3xl mx-auto px-6 reveal">

        <h2 class="text-3xl md:text-4xl font-semibold mb-4">
            Siap Konsultasi Sekarang?
        </h2>

        <p class="text-white/70 mb-6">
            Klik tombol di bawah untuk langsung terhubung dengan sales kami
        </p>

        <a href="https://wa.me/6285121546050?text=Halo%20saya%20ingin%20konsultasi%20mobil%20Hyundai"
           target="_blank"
           class="bg-white text-[#0b1f3a] px-8 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
           Chat Sekarang
        </a>

    </div>

</section>

@endsection

<!-- SCRIPT GLOBAL -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    /* SLIDER */
    let slides = document.querySelectorAll(".slide");
    let index = 0;

    function showSlide(i) {
        slides.forEach(s => s.style.opacity = 0);
        slides[i].style.opacity = 1;
    }

    window.nextSlide = function () {
        index = (index + 1) % slides.length;
        showSlide(index);
    }

    window.prevSlide = function () {
        index = (index - 1 + slides.length) % slides.length;
        showSlide(index);
    }

    setInterval(() => {
        index = (index + 1) % slides.length;
        showSlide(index);
    }, 5000);


    /* REVEAL ANIMATION */
    const reveals = document.querySelectorAll(".reveal");

    function revealOnScroll() {
        reveals.forEach((el, i) => {
            let top = el.getBoundingClientRect().top;
            let height = window.innerHeight;

            if (top < height - 100) {
                setTimeout(() => {
                    el.classList.add("active");
                }, i * 100);
            }
        });
    }

    window.addEventListener("scroll", revealOnScroll);
    revealOnScroll();

});
</script>

<!-- STYLE REVEAL -->
<style>
.reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.7s ease;
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
}
</style>