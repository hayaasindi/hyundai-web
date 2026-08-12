@extends('layouts.app')

@section('content')

<!-- HERO SLIDER -->
<section class="relative w-full h-[90vh] overflow-hidden group">

    <!-- SLIDES -->
    <div id="slider" class="w-full h-full relative">

        <!-- SLIDE 1 -->
        <div class="slide absolute inset-0 opacity-100 transition-opacity duration-1000">
            <img src="/images/slider1.jpeg" class="w-full h-full object-cover">
        </div>

        <!-- SLIDE 2 -->
        <div class="slide absolute inset-0 opacity-100 transition-opacity duration-1000">
            <img src="/images/slider2.jpeg" class="w-full h-full object-cover">
        </div>

        <!-- SLIDE 3 -->
        <div class="slide absolute inset-0 opacity-100 transition-opacity duration-[1500]">
            <img src="/images/slider3.jpeg" class="w-full h-full object-cover">
        </div>

    </div>

    <!-- OVERLAY -->
    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
        <div class="text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                Galeri dan Aktivitas 
                Sales
            </h1>
            <p class="text-lg md:text-xl mb-6">
                Hyundai Bekasi - Tambun Selatan Official
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

<!-- SECTION SALES -->
<section class="py-28 bg-gray-200">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            <!-- LEFT: FOTO + NAMA -->
            <div id="salesImage"
                class="text-center opacity-0 translate-y-10 transition-all duration-1000">

                <!-- FOTO -->
                <img src="/images/profile.jpeg"
                    class="w-full max-w-sm mx-auto rounded-2xl object-cover">

                <!-- NAMA -->
                <h3 class="mt-6 text-xl font-semibold text-gray-900">
                    Muhammad Daffa Syaddad
                </h3>

                <!-- DESKAT -->
                <p class="text-gray-500 mt-2 max-w-sm mx-auto">
                    Saya siap membantu Anda menemukan jenis kendaraan yang cocok sesuai dengan budget dan keinginan Anda.
                </p>

            </div>

            <!-- RIGHT: DESKRIPSI -->
            <div id="salesText"
                class="opacity-0 translate-y-10 transition-all duration-1000">

                <!-- TITLE -->
                <h2 class="text-3xl md:text-4xl font-semibold text-[#0b1f3a] mb-6">
                    Hyundai Bogor
                </h2>

                <!-- DESC -->
                <div class="space-y-4 text-gray-600 leading-relaxed">

                    <p>
                        Sebagai Sales Consultant Hyundai, saya berkomitmen memberikan pelayanan terbaik dalam membantu Anda menemukan kendaraan yang sesuai dengan kebutuhan dan gaya hidup Anda.
                    </p>

                    <p>
                        Dengan pengalaman dan pemahaman produk yang mendalam, saya siap mendampingi Anda mulai dari konsultasi hingga proses pembelian dengan nyaman dan terpercaya.
                    </p>

                    <p>
                        Layanan konsultasi kami kini sepenuhnya online. Melalui website ini, Anda dapat terhubung langsung dengan sales consultant kami dengan cara yang sederhana, aman, dan nyaman.
                    </p>

                </div>

                <!-- CTA -->
                <div class="mt-8">
                    <a href="https://wa.me/6285121546050?text=Halo%20saya%20tertarik%20dengan%20mobil%20Hyundai%2C%20boleh%20dibantu%20informasinya%3F"
                    target="_blank"
                    class="inline-block bg-[#0b1f3a] text-white px-7 py-3 rounded-full font-medium hover:bg-[#16345f] transition">
                        Hubungi Sekarang
                    </a>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- SECTION BERITA -->
<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <!-- TITLE -->
        <div class="text-center mb-16 reveal">
            <div class="w-12 h-1 bg-[#0b1f3a] mx-auto mb-5 rounded"></div>

            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
                Dokumentasi Kegiatan
            </h2>

            <p class="text-gray-500 mt-3 max-w-xl mx-auto">
                Momen pelayanan terbaik dan kepuasan pelanggan kami
            </p>
        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <a href="https://www.hyundai.com" target="_blank" 
               class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 reveal">

                <div class="overflow-hidden">
                    <img src="/images/dokumentasikegiatan.jpg" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                </div>

                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a] transition">
                        Hyundai Luncurkan Mobil Listrik Terbaru
                    </h3>

                    <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                        Hyundai kembali menghadirkan inovasi kendaraan listrik dengan teknologi terbaru yang ramah lingkungan.
                    </p>
                </div>

            </a>

            <!-- CARD 2 -->
            <a href="#" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition reveal">
                <div class="overflow-hidden">
                    <img src="/images/dokumentasikegiatan2.jpg" class="w-full h-48 object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a]">
                        Hyundai Raih Penghargaan Global
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Hyundai mendapatkan penghargaan internasional atas desain dan teknologi inovatif.
                    </p>
                </div>
            </a>

            <!-- CARD 3 -->
            <a href="#" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition reveal">
                <div class="overflow-hidden">
                    <img src="/images/dokumentasikegiatan3.jpg" class="w-full h-48 object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a]">
                        Teknologi Keamanan Hyundai
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Fitur keamanan terbaru Hyundai memberikan perlindungan maksimal saat berkendara.
                    </p>
                </div>
            </a>

            <!-- CARD 4 -->
            <a href="#" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition reveal">
                <div class="overflow-hidden">
                    <img src="/images/poster1.jpg" class="w-full h-48 object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a]">
                        Hyundai Perluas Jaringan Dealer
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Hyundai terus memperluas jaringan dealer untuk meningkatkan pelayanan pelanggan.
                    </p>
                </div>
            </a>

            <!-- CARD 5 -->
            <a href="#" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition reveal">
                <div class="overflow-hidden">
                    <img src="/images/poster2.jpg" class="w-full h-48 object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a]">
                        Promo Spesial Hyundai 2026
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Nikmati berbagai promo menarik untuk pembelian kendaraan Hyundai tahun ini.
                    </p>
                </div>
            </a>

            <!-- CARD 6 -->
            <a href="#" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition reveal">
                <div class="overflow-hidden">
                    <img src="/images/poster3.jpg" class="w-full h-48 object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a]">
                        Hyundai Fokus Kendaraan Masa Depan
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Hyundai berkomitmen menghadirkan kendaraan masa depan dengan teknologi canggih.
                    </p>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- CTA -->
<section class="py-20 bg-[#0b1f3a] text-white text-center">
    <div class="max-w-3xl mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-semibold mb-4">
            Siap Memiliki Mobil Hyundai Impian Anda?
        </h2>

        <p class="text-white/70 mb-6">
            Hubungi kami sekarang untuk konsultasi, simulasi kredit, atau booking test drive.
        </p>

        <a href="https://wa.me/6285121546050?text=Halo%20saya%20tertarik%20dengan%20mobil%20Hyundai.%20Saya%20ingin%20konsultasi%20lebih%20lanjut%20mengenai%20unit%2C%20promo%2C%20dan%20test%20drive.%20Mohon%20informasinya.%20Terima%20kasih."
        target="_blank"
        class="bg-white text-[#0b1f3a] px-8 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
        Chat Sekarang
        </a>

    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {

        let slides = document.querySelectorAll('.slide');
        let index = 0;

        function showSlide(i) {
            slides.forEach(slide => slide.classList.add('hidden'));
            slides[i].classList.remove('hidden');
        }

        function nextSlide() {
            index = (index + 1) % slides.length;
            showSlide(index);
        }

        function prevSlide() {
            index = (index - 1 + slides.length) % slides.length;
            showSlide(index);
        }

        // BIKIN GLOBAL (biar bisa dipanggil tombol)
        window.nextSlide = nextSlide;
        window.prevSlide = prevSlide;

        // AUTO SLIDE
        setInterval(nextSlide, 5000);

    });
</script>

<!-- SALES ANIMATION  -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const image = document.getElementById('salesImage');
    const text = document.getElementById('salesText');

    function showSales() {
        const trigger = window.innerHeight - 120;

        if (image.getBoundingClientRect().top < trigger) {
            image.classList.remove('opacity-0', 'translate-y-10');
            image.classList.add('opacity-100', 'translate-y-0');
        }

        if (text.getBoundingClientRect().top < trigger) {
            text.classList.remove('opacity-0', 'translate-y-10');
            text.classList.add('opacity-100', 'translate-y-0');
        }
    }

    window.addEventListener('scroll', showSales);

});
</script>

<!-- SCRIPT EVENT -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    // =================
    // REVEAL
    // =================
    const reveals = document.querySelectorAll('.reveal');

    function revealScroll() {
        const trigger = window.innerHeight * 0.85;

        reveals.forEach(el => {
            const top = el.getBoundingClientRect().top;

            if (top < trigger) {
                el.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', revealScroll);
    revealScroll();

    // =================
    // SLIDER
    // =================
    const slider = document.getElementById('posterSlider');
    let index = 0;
    const total = slider.children.length;

    function update() {
        slider.style.transform = `translateX(-${index * 100}%)`;
    }

    window.nextPoster = function () {
        index = (index + 1) % total;
        update();
    }

    window.prevPoster = function () {
        index = (index - 1 + total) % total;
        update();
    }

    setInterval(nextPoster, 5000);

});
</script>
@endpush