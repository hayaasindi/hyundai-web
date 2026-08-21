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

<!-- SECTION MOBIL -->
<section class="py-20 bg-white relative">

    <div class="max-w-7xl mx-auto px-6">

        <!-- TITLE -->
        <!-- TITLE -->
        <div class="mb-20 text-center reveal opacity-0 translate-y-10 transition-all duration-700" id="sectionTitle">

            <div class="w-12 h-1 bg-[#0b1f3a] mx-auto mb-5 rounded"></div>

            <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-gray-900">
                Eksplorasi Kendaraan Hyundai
            </h2>

            <p class="text-gray-500 mt-3 max-w-xl mx-auto leading-relaxed">
                Temukan kombinasi sempurna antara desain modern, performa, dan teknologi inovatif dari Hyundai.
            </p>

            <!-- CATEGORY BUTTON -->
            <div class="flex justify-center gap-3 mt-8 flex-wrap">

                <button onclick="filterCategory(event,'all')" 
                    class="category-btn active px-5 py-2 rounded-full border border-[#0b1f3a] text-[#0b1f3a] font-medium transition hover:bg-[#0b1f3a] hover:text-white">
                    Semua
                </button>

                <button onclick="filterCategory(event,'suv')" 
                    class="category-btn px-5 py-2 rounded-full border text-gray-600 hover:border-[#0b1f3a] hover:text-[#0b1f3a] transition">
                    SUV
                </button>

                <button onclick="filterCategory(event,'mpv')" 
                    class="category-btn px-5 py-2 rounded-full border text-gray-600 hover:border-[#0b1f3a] hover:text-[#0b1f3a] transition">
                    MPV
                </button>

                <button onclick="filterCategory(event,'ev')" 
                    class="category-btn px-5 py-2 rounded-full border text-gray-600 hover:border-[#0b1f3a] hover:text-[#0b1f3a] transition">
                    EV
                </button>

                <button onclick="filterCategory(event,'crossover')" 
                    class="category-btn px-5 py-2 rounded-full border text-gray-600 hover:border-[#0b1f3a] hover:text-[#0b1f3a] transition">
                    Crossover
                </button>

            </div>
        </div>
        <div id="cardSlider" 
        class="flex overflow-x-auto gap-8 pb-6 scroll-smooth no-scrollbar">


        @foreach($mobil as $item)

        <div class="card min-w-[360px] bg-[#0b1f3a] rounded-2xl shadow-xl overflow-hidden text-white"
        data-category="{{ strtolower($item->kategori) }}">


            <div class="relative">

                <img src="{{ asset('storage/'.$item->gambar) }}"
                class="w-full h-56 object-cover">


                <div class="absolute left-1/2 -bottom-5 
                -translate-x-1/2 
                bg-white text-[#0b1f3a] 
                px-6 py-2 rounded-full 
                font-semibold text-sm">


                    {{ $item->harga }}

                </div>


            </div>



            <div class="pt-8 pb-6 px-5">


                <div class="flex justify-between">

                    <h3 class="font-semibold text-lg">

                        {{ $item->nama }}

                    </h3>


                    <span class="text-sm text-gray-300">

                        {{ strtoupper($item->kategori) }}

                    </span>


                </div>



                @if($item->badge)

                <div class="mt-3">

                    <span class="bg-green-500 text-xs px-3 py-1 rounded-full">

                        {{ $item->badge }}

                    </span>

                </div>

                @endif



                <div class="border-t border-white/20 my-4"></div>



                <div class="flex justify-between">

                    <p class="text-sm text-gray-300">

                        {{ $item->transmisi }}

                    </p>


                    <a href="{{ route('kendaraan.detail',$item->slug) }}"
                    class="bg-white text-[#0b1f3a] px-4 py-1.5 rounded-full text-sm">

                        Detail

                    </a>


                </div>


            </div>


        </div>


        @endforeach


        </div>

    </div>

</section>

<!-- SECTION SALES -->
<section class="py-28 bg-gray-100 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-20 items-center">


            <!-- LEFT : SALES PROFILE -->
            <div id="salesImage"
                class="relative text-center opacity-0 translate-y-10 transition-all duration-1000">


                <!-- Decorative Frame -->
                <div class="absolute inset-0 flex justify-center items-center">

                    <div class="
                        w-72
                        h-96
                        border
                        border-[#0b1f3a]/20
                        rounded-3xl
                        translate-x-5
                        translate-y-5
                    "></div>

                </div>



                <!-- PHOTO -->
                <div class="relative z-10">

                    <img src="/images/fotodaffa.png"
                        class="
                        w-72
                        h-96
                        mx-auto
                        object-cover
                        rounded-3xl
                        shadow-xl
                        ">

                </div>



                <!-- NAME CARD -->
                <div class="
                    relative
                    z-20
                    -mt-10
                    mx-auto
                    bg-white
                    w-[85%]
                    rounded-2xl
                    shadow-lg
                    py-5
                    px-6
                ">


                    <div class="
                        inline-flex
                        items-center
                        px-4
                        py-1
                        rounded-full
                        bg-[#0b1f3a]/10
                        text-[#0b1f3a]
                        text-xs
                        font-semibold
                        mb-3
                    ">

                        Hyundai Sales Consultant

                    </div>



                    <h3 class="
                        text-xl
                        font-semibold
                        text-gray-900
                    ">
                        Muhammad Daffa Syaddad
                    </h3>



                    <p class="
                        text-sm
                        text-gray-500
                        mt-2
                        leading-relaxed
                    ">
                        Siap membantu Anda menemukan kendaraan Hyundai terbaik sesuai kebutuhan dan budget.
                    </p>


                </div>


            </div>




            <!-- RIGHT : DESCRIPTION -->
            <div id="salesText"
                class="opacity-0 translate-y-10 transition-all duration-1000">


                <span class="
                    text-sm
                    font-semibold
                    tracking-wider
                    text-gray-500
                    uppercase
                ">
                    Official Hyundai Kalimalang
                </span>



                <h2 class="
                    mt-3
                    text-3xl
                    md:text-4xl
                    font-semibold
                    text-[#0b1f3a]
                    leading-tight
                ">

                    Partner Terpercaya
                    Untuk Perjalanan Hyundai Anda

                </h2>




                <div class="
                    mt-7
                    space-y-5
                    text-gray-600
                    leading-relaxed
                ">


                    <p>
                        Saya hadir sebagai Sales Consultant Hyundai Kalimalang Official untuk memberikan pengalaman pembelian kendaraan yang lebih mudah, transparan, dan terpercaya.
                    </p>


                    <p>
                        Setiap pelanggan akan mendapatkan pendampingan mulai dari pemilihan kendaraan, rekomendasi varian terbaik, hingga proses kepemilikan mobil Hyundai.
                    </p>


                    <p>
                        Dengan komitmen terhadap pelayanan dan kepuasan pelanggan, saya siap membantu Anda menemukan kendaraan yang sesuai dengan kebutuhan Anda.
                    </p>


                </div>



                <!-- CTA -->

                <div class="mt-9 flex items-center gap-5">


                    <a href="https://wa.me/6285121546050?text=Halo%20kak%2C%20saya%20tertarik%20dengan%20mobil%20Hyundai.%20Boleh%20minta%20info%20lebih%20lanjut%20mengenai%20unit%2C%20promo%2C%20dan%20test%20drive%3F%20Terima%20kasih%20🙏"
                    target="_blank"
                    class="
                    bg-[#0b1f3a]
                    text-white
                    px-8
                    py-3
                    rounded-full
                    font-medium
                    shadow-md
                    hover:bg-[#16345f]
                    hover:-translate-y-1
                    transition
                    ">

                        Hubungi Sekarang

                    </a>



                    <span class="
                        text-sm
                        text-gray-400
                    ">
                        Fast Response WhatsApp
                    </span>


                </div>


            </div>


        </div>

    </div>

</section>

<!-- SECTION POSTER SLIDER -->
<section class="py-24 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        <!-- TITLE (REVEAL) -->
        <div class="text-center mb-16 reveal">

            <div class="w-12 h-1 bg-[#0b1f3a] mx-auto mb-5 rounded"></div>

            <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-gray-900">
                Inovasi & Keunggulan Hyundai
            </h2>

            <p class="text-gray-500 mt-3 max-w-xl mx-auto leading-relaxed">
                Temukan teknologi, desain, dan pengalaman berkendara terbaik yang dirancang untuk masa depan Anda.
            </p>

        </div>

        <!-- SLIDER -->
        <div class="relative overflow-hidden">

            <div id="posterSlider" class="flex transition-all duration-700 ease-in-out">

                <!-- SLIDE 1 -->
                <div class="min-w-full flex flex-col md:flex-row items-center gap-12">

                    <!-- IMAGE (LEBIH BESAR) -->
                    <div class="md:w-1/2">
                        <img src="/images/GIIAS.avif" 
                            class="w-full h-auto object-contain rounded-2xl shadow-xl">
                    </div>

                    <!-- TEXT -->
                    <div class="md:w-1/2 max-w-xl">
                        <h2 class="text-4xl md:text-5xl font-semibold text-[#0b1f3a] mb-6 leading-tight">
                            Hyundai Perkenalkan Harga yang Semakin Terjangkau
                        </h2>

                        <p class="text-gray-600 text-lg leading-relaxed mb-8">
                            yundai menghadirkan jajaran kendaraan yang semakin lengkap dengan pilihan powertrain yang seimbang di GIIAS 2026
                        </p>

                        <a href="https://www.hyundai.com/id/id/hyundai-story/news/detail?newsid=2767" 
                        class="inline-block bg-[#0b1f3a] text-white px-7 py-3 rounded-full text-sm font-medium hover:bg-[#16345f] transition">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>

                </div>

                <!-- SLIDE 2 -->
                <div class="min-w-full flex flex-col md:flex-row items-center gap-12">

                    <div class="md:w-1/2">
                        <img src="/images/worldcup.avif" 
                            class="w-full h-auto object-contain rounded-2xl shadow-xl">
                    </div>

                    <div class="md:w-1/2 max-w-xl">
                        <h2 class="text-4xl md:text-5xl font-semibold text-[#0b1f3a] mb-6 leading-tight">
                            Perluas Inisiatif FIFA World Cup 2026™ ke Dunia Gaming melalui Kolaborasi dengan Epic Games
                        </h2>

                        <p class="text-gray-600 text-lg leading-relaxed mb-8">
                            Hyundai Motor Company hari ini mengumumkan kolaborasi dengan Epic Games untuk memperluas pengalaman FIFA World Cup 2026TM ke dunia gaming.
                        </p>

                        <a href="https://www.hyundai.com/id/id/hyundai-story/news/detail?newsid=2739" 
                        class="inline-block bg-[#0b1f3a] text-white px-7 py-3 rounded-full text-sm font-medium hover:bg-[#16345f] transition">
                            Lihat Detail
                        </a>
                    </div>

                </div>

                <!-- SLIDE 3 -->
                <div class="min-w-full flex flex-col md:flex-row items-center gap-12">

                    <div class="md:w-1/2">
                        <img src="/images/MV.avif" 
                            class="w-full h-auto object-contain rounded-2xl shadow-xl">
                    </div>

                    <div class="md:w-1/2 max-w-xl">
                        <h2 class="text-4xl md:text-5xl font-semibold text-[#0b1f3a] mb-6 leading-tight">
                            Dari Macet Kota hingga Perjalanan Jarak Jauh, Hyundai Hadirkan MPV untuk Jalanan Indonesia
                        </h2>

                        <p class="text-gray-600 text-lg leading-relaxed mb-8">
                            Temukan MPV Hyundai yang Paling Sesuai dengan Kebutuhan Keluarga.
                        </p>

                        <a href="https://www.hyundai.com/id/id/hyundai-story/news/detail?newsid=2720" 
                        class="inline-block bg-[#0b1f3a] text-white px-7 py-3 rounded-full text-sm font-medium hover:bg-[#16345f] transition">
                            Lihat Detail
                        </a>
                    </div>

                </div>


            </div>

            <!-- BUTTON LEFT -->
            <button onclick="prevPoster()" 
                class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 backdrop-blur-md border border-gray-200 w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-white transition">
                &#10094;
            </button>

            <!-- BUTTON RIGHT -->
            <button onclick="nextPoster()" 
                class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 backdrop-blur-md border border-gray-200 w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-white transition">
                &#10095;
            </button>

        </div>

    </div>

</section>

<br>
<br>

<!-- SECTION BERITA -->
<section class="py-24 bg-gray-200">

    <div class="max-w-7xl mx-auto px-6">

        <!-- TITLE -->
        <div class="text-center mb-16 reveal">
            <div class="w-12 h-1 bg-[#0b1f3a] mx-auto mb-5 rounded"></div>

            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
                Berita & Informasi Hyundai
            </h2>

            <p class="text-gray-500 mt-3 max-w-xl mx-auto">
                Ikuti perkembangan terbaru, inovasi, dan informasi menarik seputar Hyundai.
            </p>
        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <a href="https://www.hyundai.com/id/id/hyundai-story/news/detail?newsid=2688" target="_blank" 
               class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 reveal">

                <div class="overflow-hidden">
                    <img src="/images/belis.avif" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                </div>

                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a] transition">
                        Hyundai dan TVS Berkolaborasi, Siap Garap Pasar Kendaraan Listrik Roda Tiga di India
                    </h3>

                    <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                        Hyundai kembali menghadirkan inovasi kendaraan listrik dengan teknologi terbaru yang ramah lingkungan.
                    </p>
                </div>

            </a>

            <!-- CARD 2 -->
            <a href="https://www.hyundai.com/id/id/hyundai-story/news/detail?newsid=2684" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition reveal">
                <div class="overflow-hidden">
                    <img src="/images/ionic5.avif" class="w-full h-48 object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a]">
                        Hyundai Perkenalkan IONIQ V di Tiongkok pada Auto China 2026
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        IONIQ V memulai debut sebagai model produksi IONIQ pertama yang didedikasikan untuk Tiongkok, disesuaikan dengan kebutuhan dan ekspektasi pelanggan lokal.                    </p>
                </div>
            </a>

            <!-- CARD 3 -->
            <a href="https://www.hyundai.com/id/id/hyundai-story/news/detail?newsid=2678" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition reveal">
                <div class="overflow-hidden">
                    <img src="/images/safety.avif" class="w-full h-48 object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a]">
                        Hyundai Jawab Kebutuhan untuk Kenyamanan dan Keamanan Lewat SmartSense dan Bluelink
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Hyundai menghadirkan Hyundai SmartSense sebagai paket fitur keselamatan aktif yang terintegrasi.
                    </p>
                </div>
            </a>

            <!-- CARD 4 -->
            <a href="https://www.hyundai.com/id/id/hyundai-story/news/detail?newsid=2711" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition reveal">
                <div class="overflow-hidden">
                    <img src="/images/headunit.avif" class="w-full h-48 object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a]">
                        Hyundai Motor Bawa Semarak FIFA World Cup 2026TM ke dalam Mobil
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Hyundai Motor Company hari ini meluncurkan tema layar head unit dan cluster eksklusif.
                    </p>
                </div>
            </a>

            <!-- CARD 5 -->
            <a href="https://www.hyundai.com/id/id/hyundai-story/news/detail?newsid=2721" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition reveal">
                <div class="overflow-hidden">
                    <img src="/images/robot.avif" class="w-full h-48 object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a]">
                        Platform Robot Mobile ‘MobED’ Hyundai Raih Predikat ‘Winner’ di Red Dot Design Award 2026
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Dikembangkan oleh Robotics LAB Hyundai Motor Group.
                    </p>
                </div>
            </a>

            <!-- CARD 6 -->
            <a href="https://www.hyundai.com/id/id/hyundai-story/news/detail?newsid=2714" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition reveal">
                <div class="overflow-hidden">
                    <img src="/images/system.avif" class="w-full h-48 object-cover group-hover:scale-105 transition">
                </div>
                <div class="p-5">
                    <h3 class="font-semibold text-lg text-gray-900 group-hover:text-[#0b1f3a]">
                        Hyundai Mengundang Pelanggan all-new PALISADE Hybrid Untuk Optimalisasi Panel Instrumen
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">
                        Hyundai berkomitmen menghadirkan kendaraan masa depan dengan teknologi canggih.
                    </p>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- SECTION GOOGLE MAPS -->
<section class="py-28 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <!-- TITLE -->
        <div class="text-center mb-14 reveal-item">

            <div class="w-12 h-1 bg-[#0b1f3a] mx-auto mb-5 rounded"></div>

            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
                Kunjungi Dealer Hyundai Kami
            </h2>

            <p class="text-gray-500 mt-3 max-w-xl mx-auto">
                Datang langsung ke showroom Hyundai untuk konsultasi,
                melihat unit terbaru, dan melakukan test drive.
            </p>

        </div>


        <!-- MAP CARD -->
        <div 
        class="
        relative 
        rounded-[32px]
        overflow-hidden
        shadow-2xl
        border
        border-gray-200
        group
        reveal-item
        "
        >

            <!-- DECORATION -->
            <div class="
            absolute 
            -top-20 
            -right-20 
            w-72 
            h-72 
            bg-[#0b1f3a]/10 
            rounded-full 
            blur-3xl
            ">
            </div>


            <!-- GOOGLE MAP -->
            <div class="
            w-full 
            h-[500px]
            md:h-[600px]
            transition
            duration-700
            group-hover:scale-[1.02]
            ">

                <iframe
                src="https://maps.google.com/maps?q=Hyundai%20Kalimalang%20Official&t=&z=15&ie=UTF8&iwloc=&output=embed"
                class="
                w-full 
                h-full
                border-0
                "
                loading="lazy">
                </iframe>

            </div>



            <!-- LOCATION CARD -->
            <div 
            class="
            absolute 
            bottom-6 
            left-1/2 
            -translate-x-1/2
            bg-white/95
            backdrop-blur-md
            rounded-2xl
            shadow-xl
            px-8
            py-5
            w-[90%]
            md:w-auto
            text-center
            "
            >

                <h3 class="
                font-semibold
                text-[#0b1f3a]
                text-lg
                ">
                    Hyundai Kalimalang Official
                </h3>


                <p class="
                text-gray-500
                text-sm
                mt-1
                ">
                    
                Dealer resmi Hyundai Kalimalang Jakarta Timur
                </p>


                <a 
                href="https://maps.app.goo.gl/rgXaN5zQS2yV2C2G6"
                target="_blank"
                class="
                inline-flex
                items-center
                gap-2
                mt-4
                bg-[#0b1f3a]
                text-white
                px-6
                py-2.5
                rounded-full
                text-sm
                font-medium
                hover:bg-[#16345f]
                transition
                "
                >

                    Buka Google Maps

                    <span>
                    →
                    </span>

                </a>

            </div>


        </div>


    </div>

</section>

<!-- SECTION TEST DRIVE -->
<section class="py-24 bg-gray-200">

    <div class="max-w-5xl mx-auto px-6">

        <!-- HEADER -->
        <div class="text-center mb-12 reveal-item">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
                Booking Test Drive
            </h2>
            <p class="text-gray-500 mt-2">
                Jadwalkan test drive kendaraan Hyundai pilihan Anda dengan mudah
            </p>
        </div>

        <!-- CARD -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-8 md:p-10 reveal-item delay-1">

            <form 
                action="{{ route('booking.store') }}"
                method="POST"
                id="testDriveForm" 
                class="grid md:grid-cols-2 gap-6">

                @csrf

                <!-- NAMA -->
                <div class="reveal-item delay-2">
                    <label class="text-sm text-gray-600">Nama Lengkap</label>
                    <input 
                    type="text" 
                    id="nama"
                    name="nama"
                    required
                    class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b1f3a] focus:border-[#0b1f3a] transition">
                </div>

                <!-- HP -->
                <div class="reveal-item delay-2">

                <label class="text-sm text-gray-600">
                Nomor WhatsApp
                </label>

                <input 
                type="text"
                id="hp"
                name="hp"
                required
                class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b1f3a] focus:border-[#0b1f3a] transition">

                </div>

                <!-- MOBIL -->
                <div class="md:col-span-2 reveal-item delay-3">
                    <label class="text-sm text-gray-600">Pilih Kendaraan</label>
                    <select 
                    id="mobil"
                    name="kendaraan"
                    required
                    class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-3">

                    <option value="">
                    -- Pilih Mobil Hyundai --
                    </option>


                    @foreach($mobil as $item)

                    <option value="{{ $item->nama }}">
                        {{ $item->nama }}
                    </option>

                    @endforeach


                    </select>
                </div>

                <!-- TANGGAL -->
                <div class="reveal-item delay-4">
                    <label class="text-sm text-gray-600">Tanggal Test Drive</label>
                    <input 
                    type="date"
                    id="tanggal"
                    name="tanggal"
                    required
                    class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b1f3a]">
                </div>

                <!-- WAKTU -->
                <div class="reveal-item delay-4">
                    <label class="text-sm text-gray-600">Waktu</label>
                    <input 
                    type="time"
                    id="waktu"
                    name="waktu"
                    required
                    class="w-full mt-2 border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#0b1f3a]">
                </div>

                <!-- BUTTON -->
                <div class="md:col-span-2 mt-4 reveal-item delay-5">
                    <button type="submit"
                        class="w-full py-3 rounded-lg bg-[#0b1f3a] text-white font-semibold hover:bg-[#16345f] transition">
                        Booking Test Drive
                    </button>

                    <p class="text-center text-gray-400 text-sm mt-3">
                        Anda akan diarahkan ke WhatsApp setelah submit
                    </p>
                </div>

            </form>

        </div>
    </div>
</section>

@endsection

@push('scripts')

<!-- SCRIPT HERO SLIDER -->
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

<!-- SLIDER CARD + FILTER MOBIL -->
<script>
const slider = document.getElementById('cardSlider');

function scrollRightCard() {
    const max = slider.scrollWidth - slider.clientWidth;
    if (slider.scrollLeft >= max - 5) {
        slider.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
        slider.scrollBy({ left: 380, behavior: 'smooth' });
    }
}

function scrollLeftCard() {
    if (slider.scrollLeft <= 0) {
        slider.scrollTo({ left: slider.scrollWidth, behavior: 'smooth' });
    } else {
        slider.scrollBy({ left: -380, behavior: 'smooth' });
    }
}

// FILTER
function filterCategory(e, category) {
    const cards = document.querySelectorAll('.card');
    const buttons = document.querySelectorAll('.category-btn');

    buttons.forEach(btn => btn.classList.remove('bg-[#0b1f3a]', 'text-white'));
    e.target.classList.add('bg-[#0b1f3a]', 'text-white');

    cards.forEach(card => {
        if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });

    // reset posisi slider
    slider.scrollTo({ left: 0, behavior: 'smooth' });
}

// AUTO SLIDE
setInterval(scrollRightCard, 4000);
</script>

<!-- REVEAL ANIMATION -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const elements = document.querySelectorAll('.reveal');

    function checkScroll() {
        const triggerBottom = window.innerHeight * 0.85;

        elements.forEach(el => {
            const top = el.getBoundingClientRect().top;

            if (top < triggerBottom) {
                el.classList.add('active');
            }
        });
    }

    // jalan pertama kali (IMPORTANT)
    checkScroll();

    // jalan tiap scroll
    window.addEventListener('scroll', checkScroll);

});
</script>

<!-- SLIDER CARD -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const slider = document.getElementById('cardSlider');

    window.scrollRightCard = function () {
        const max = slider.scrollWidth - slider.clientWidth;

        if (slider.scrollLeft >= max - 5) {
            slider.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
            slider.scrollBy({ left: 380, behavior: 'smooth' });
        }
    }

    window.scrollLeftCard = function () {
        if (slider.scrollLeft <= 0) {
            slider.scrollTo({ left: slider.scrollWidth, behavior: 'smooth' });
        } else {
            slider.scrollBy({ left: -380, behavior: 'smooth' });
        }
    }

    window.filterCategory = function (e, category) {
        const cards = document.querySelectorAll('.card');
        const buttons = document.querySelectorAll('.category-btn');

        // active button
        buttons.forEach(btn => btn.classList.remove('bg-[#0b1f3a]', 'text-white'));
        e.target.classList.add('bg-[#0b1f3a]', 'text-white');

        // filter
        cards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });

        slider.scrollTo({ left: 0, behavior: 'smooth' });
    }

    // AUTO SLIDE
    setInterval(() => {
        scrollRightCard();
    }, 5000);

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

<!-- CSS ANIMASI -->
<style>
.reveal-item {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s ease;
}

.reveal-item.active {
    opacity: 1;
    transform: translateY(0);
}

/* Delay biar muncul satu-satu */
.delay-1 { transition-delay: 0.1s; }
.delay-2 { transition-delay: 0.2s; }
.delay-3 { transition-delay: 0.3s; }
.delay-4 { transition-delay: 0.4s; }
.delay-5 { transition-delay: 0.5s; }

/* MAP PREMIUM ANIMATION */

.reveal-item{
    opacity:0;
    transform:translateY(40px);
    transition:all .9s ease;
}


.reveal-item.active{
    opacity:1;
    transform:translateY(0);
}

.reveal{
    opacity:0;
    transform:translateY(40px);
    transition:all .7s ease;
}


.reveal.active{
    opacity:1;
    transform:translateY(0);
}


.map-glow{
    animation: floating 5s infinite ease-in-out;
}


@keyframes floating{

    0%,100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-10px);
    }

}
</style>

<!-- TEST DRIVE SCRIPT-->
<script>
document.addEventListener("DOMContentLoaded", function () {

    // ================= REVEAL ANIMATION =================
    const items = document.querySelectorAll('.reveal-item');

    function revealOnScroll() {
        const trigger = window.innerHeight * 0.85;

        items.forEach(el => {
            const top = el.getBoundingClientRect().top;

            if (top < trigger) {
                el.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();

   

});

</script>
@endpush