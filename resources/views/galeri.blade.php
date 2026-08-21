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
                    Hyundai Kalimalang Official
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

<!-- SECTION DOCUMENTATION -->

<section class="py-24 bg-white">

<div class="max-w-7xl mx-auto px-6">


<!-- TITLE -->

<div class="text-center mb-16 reveal">

<div class="w-12 h-1 bg-[#0b1f3a] mx-auto mb-5 rounded"></div>


<h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
Dokumentasi Pelayanan Customer
</h2>


<p class="text-gray-500 mt-3 max-w-xl mx-auto">
Momen pelayanan terbaik, test drive, hingga penyerahan kendaraan Hyundai kepada pelanggan kami.
</p>


</div>



<!-- GALLERY -->


<div class="grid md:grid-cols-3 gap-6">



<!-- FOTO BESAR -->

<div class="md:col-span-2 group relative overflow-hidden rounded-[32px] reveal">


<img src="/images/dokumentasikegiatan.jpg"
class="w-full h-[520px] object-cover group-hover:scale-105 transition duration-700">


<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>


<div class="absolute bottom-8 left-8 text-white">

<span class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-sm">
Customer Delivery
</span>


<h3 class="text-2xl font-semibold mt-4">
Penyerahan Unit Hyundai Creta
</h3>


<p class="text-white/80 mt-2">
Terima kasih telah mempercayakan perjalanan bersama Hyundai.
</p>


</div>


</div>





<!-- ACHIEVEMENT CARD -->

<div class="group relative overflow-hidden rounded-[32px] reveal">


<img src="/images/month.jpeg"
class="w-full h-[520px] object-cover group-hover:scale-105 transition duration-700">


<!-- OVERLAY -->

<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>



<!-- CONTENT -->

<div class="absolute bottom-8 left-8 text-white">


<span class="bg-yellow-400 text-[#0b1f3a] px-4 py-2 rounded-full text-sm font-semibold">
Achievement
</span>



<h3 class="text-3xl font-semibold mt-5">
Rookie of The Month
</h3>



<p class="text-white/80 mt-3 leading-relaxed">
Penghargaan atas pencapaian dan dedikasi dalam memberikan pelayanan terbaik kepada pelanggan Hyundai.
</p>


</div>


</div>



<!-- FOTO 3 -->

<div class="md:col-span-3 group relative overflow-hidden rounded-[32px] reveal">


<img src="/images/dokumentasikegiatan3.jpg"
class="w-full h-[400px] object-cover group-hover:scale-105 transition duration-700">


<div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>



<div class="absolute bottom-8 left-8 text-white">


<span class="bg-white/20 backdrop-blur-md px-4 py-2 rounded-full text-sm">
Customer Experience
</span>


<h3 class="text-3xl font-semibold mt-4">
Mendampingi Setiap Proses Pembelian Customer
</h3>


<p class="mt-2 text-white/80 max-w-2xl">
Memberikan konsultasi terbaik mulai dari pemilihan kendaraan, penjelasan fitur, hingga membantu customer menemukan mobil Hyundai yang sesuai dengan kebutuhannya.
</p>


</div>


</div>


<!-- FOTO 4 -->

<div class="md:col-span-3 group relative overflow-hidden rounded-[32px] reveal">


<img src="/images/dokumentasikegiatan2.jpg"
class="w-full h-[400px] object-cover group-hover:scale-105 transition duration-700">


<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>


<div class="absolute bottom-8 left-8 text-white">


<h3 class="text-3xl font-semibold">
Membangun Kepercayaan Bersama Customer
</h3>


<p class="mt-2 text-white/80">
Pelayanan profesional dari konsultasi hingga kendaraan diterima pelanggan.
</p>


</div>


</div>


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