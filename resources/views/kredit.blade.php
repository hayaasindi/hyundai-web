@extends('layouts.app')

@section('content')

<!-- HERO SECTION (SLIDER) -->
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

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
        <div class="text-center text-white px-6 reveal">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                Simulasi Kredit Hyundai
            </h1>
            <p class="text-lg md:text-xl">
                Hitung estimasi cicilan kendaraan impian Anda
            </p>
        </div>
    </div>

</section>

<!-- SECTION KEUNGGULAN -->
<section class="py-24 bg-[#0b1f3a]">

    <div class="max-w-6xl mx-auto px-6 text-center">

        <div class="mb-16 reveal">
            <div class="w-12 h-1 bg-white mx-auto mb-5 rounded"></div>
            <h2 class="text-3xl md:text-4xl font-semibold text-white">
                Kenapa Pilih Kami?
            </h2>
            <p class="text-white/70 mt-3 max-w-2xl mx-auto">
                Kami memberikan solusi terbaik dengan proses yang profesional, cepat, dan terpercaya
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="bg-white rounded-2xl p-7 shadow-lg hover:shadow-xl transition reveal">
                <div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center bg-gray-100 rounded-xl">
                    <img src="/images/rush.png" class="w-8 h-8">
                </div>
                <h3 class="text-gray-900 font-semibold text-lg mb-2">Proses Cepat</h3>
                <p class="text-gray-600 text-sm">Pengajuan kredit diproses cepat tanpa ribet</p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow-lg hover:shadow-xl transition reveal">
                <div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center bg-gray-100 rounded-xl">
                    <img src="/images/deal.png" class="w-8 h-8">
                </div>
                <h3 class="text-gray-900 font-semibold text-lg mb-2">Banyak Leasing</h3>
                <p class="text-gray-600 text-sm">Didukung berbagai leasing terpercaya</p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow-lg hover:shadow-xl transition reveal">
                <div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center bg-gray-100 rounded-xl">
                    <img src="/images/downpayment.png" class="w-8 h-8">
                </div>
                <h3 class="text-gray-900 font-semibold text-lg mb-2">DP Fleksibel</h3>
                <p class="text-gray-600 text-sm">Uang muka bisa disesuaikan</p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow-lg hover:shadow-xl transition reveal">
                <div class="w-16 h-16 mx-auto mb-5 flex items-center justify-center bg-gray-100 rounded-xl">
                    <img src="/images/deal2.png" class="w-8 h-8">
                </div>
                <h3 class="text-gray-900 font-semibold text-lg mb-2">Sampai ACC</h3>
                <p class="text-gray-600 text-sm">Didampingi sampai pengajuan disetujui</p>
            </div>

        </div>
    </div>
</section>

<!-- SECTION SIMULASI -->
<section class="py-24 bg-gray-100">

    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-14 reveal">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
                Kalkulator Kredit
            </h2>
            <p class="text-gray-500 mt-2">
                Simulasikan pembiayaan kendaraan Anda
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-10">

            <!-- FORM -->
            <div class="bg-white border rounded-2xl shadow-md p-8 reveal">

                <div class="space-y-6">

                    <div>
                        <label class="text-sm text-gray-600">Pilih Kendaraan</label>
                        <select id="mobilHarga" class="w-full mt-2 border rounded-lg px-4 py-3">
                            <option value="350000000">Hyundai Creta - 350jt</option>
                            <option value="420000000">Hyundai Stargazer - 420jt</option>
                            <option value="750000000">Hyundai Ioniq 5 - 750jt</option>
                            <option value="900000000">Hyundai Palisade - 900jt</option>
                        </select>
                    </div>

                    <div>
                        <label class="text-sm text-gray-600">DP (%)</label>
                        <input type="range" id="dpRange" min="10" max="100" value="20" class="w-full">
                        <p class="text-sm text-gray-500 mt-1">DP: <span id="dpValue">20%</span></p>
                    </div>

                    <div>
                        <label class="text-sm text-gray-600">Tenor</label>
                        <select id="tenor" class="w-full mt-2 border rounded-lg px-4 py-3">
                            <option value="1">1 Tahun</option>
                            <option value="2">2 Tahun</option>
                            <option value="3">3 Tahun</option>
                            <option value="4">4 Tahun</option>
                            <option value="5">5 Tahun</option>
                        </select>
                    </div>

                </div>
            </div>

            <!-- HASIL -->
            <div class="bg-white border rounded-2xl shadow-md p-8 reveal">

                <div class="space-y-4 text-gray-600">

                    <div class="flex justify-between">
                        <span>Harga</span>
                        <span id="hargaText"></span>
                    </div>

                    <div class="flex justify-between">
                        <span>DP</span>
                        <span id="dpText"></span>
                    </div>

                    <div class="flex justify-between">
                        <span>Pinjaman</span>
                        <span id="pinjamanText"></span>
                    </div>

                    <div class="border-t my-4"></div>

                    <div class="flex justify-between font-semibold text-[#0b1f3a]">
                        <span>Cicilan</span>
                        <span id="cicilanText"></span>
                    </div>

                </div>

                <a id="waBtn" target="_blank"
                   class="mt-6 block text-center bg-[#0b1f3a] text-white py-3 rounded-lg">
                   Konsultasi Sekarang
                </a>

            </div>

        </div>
    </div>
</section>

<!-- SECTION TESTIMONI -->
<section class="py-24 bg-white overflow-hidden">

    <div class="max-w-6xl mx-auto px-6 text-center">

        <!-- TITLE -->
        <div class="mb-16 reveal">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900 tracking-tight">
                Apa Kata Customer
            </h2>
            <p class="text-gray-500 mt-3">
                Pengalaman nyata dari pelanggan yang telah mempercayakan kepada kami
            </p>
        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-8">

            <!-- TESTI 1 -->
            <div class="group bg-white border border-gray-100 p-7 rounded-2xl shadow-sm hover:shadow-xl transition duration-500 reveal relative overflow-hidden">

                <!-- HOVER EFFECT -->
                <div class="absolute inset-0 bg-gradient-to-br from-[#0b1f3a]/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10">

                    <img src="/images/Hayaa.jpg" 
                        class="w-16 h-16 rounded-full mx-auto object-cover mb-4 border-2 border-white shadow">

                    <p class="text-gray-600 text-sm leading-relaxed italic">
                        "Prosesnya cepat banget, dibantu dari awal sampai ACC. Recommended!"
                    </p>

                    <h4 class="mt-5 font-semibold text-gray-900">
                        Budi Santoso
                    </h4>
                    <span class="text-xs text-gray-400">
                        Bekasi • Karyawan Swasta
                    </span>

                </div>

            </div>

            <!-- TESTI 2 -->
            <div class="group bg-white border border-gray-100 p-7 rounded-2xl shadow-sm hover:shadow-xl transition duration-500 reveal relative overflow-hidden">

                <div class="absolute inset-0 bg-gradient-to-br from-[#0b1f3a]/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10">

                    <img src="/images/Hayaa.jpg" 
                        class="w-16 h-16 rounded-full mx-auto object-cover mb-4 border-2 border-white shadow">

                    <p class="text-gray-600 text-sm leading-relaxed italic">
                        "DP bisa disesuaikan, cicilan ringan. Salesnya responsif!"
                    </p>

                    <h4 class="mt-5 font-semibold text-gray-900">
                        Andi Pratama
                    </h4>
                    <span class="text-xs text-gray-400">
                        Jakarta • Wirausaha
                    </span>

                </div>

            </div>

            <!-- TESTI 3 -->
            <div class="group bg-white border border-gray-100 p-7 rounded-2xl shadow-sm hover:shadow-xl transition duration-500 reveal relative overflow-hidden">

                <div class="absolute inset-0 bg-gradient-to-br from-[#0b1f3a]/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="relative z-10">

                    <img src="/images/Hayaa.jpg" 
                        class="w-16 h-16 rounded-full mx-auto object-cover mb-4 border-2 border-white shadow">

                    <p class="text-gray-600 text-sm leading-relaxed italic">
                        "Pelayanan ramah dan profesional, unit cepat sampai!"
                    </p>

                    <h4 class="mt-5 font-semibold text-gray-900">
                        Siti Rahma
                    </h4>
                    <span class="text-xs text-gray-400">
                        Bandung • Freelancer
                    </span>

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


<!-- ===================== -->
<!-- SCRIPT GLOBAL -->
<!-- ===================== -->
<script>
document.addEventListener("DOMContentLoaded", function() {

    /* SLIDER */
    const slides = document.querySelectorAll(".slide");
    let index = 0;

    if (slides.length > 0) {
        setInterval(() => {
            slides[index].classList.replace("opacity-100","opacity-0");
            index = (index + 1) % slides.length;
            slides[index].classList.replace("opacity-0","opacity-100");
        }, 4000);
    }

    /* FORMAT */
    function formatRupiah(angka) {
        return "Rp " + angka.toLocaleString("id-ID");
    }

    /* SIMULASI */
    function hitung() {
        let harga = +mobilHarga.value;
        let dpP = +dpRange.value;
        let tenor = +document.getElementById("tenor").value;

        let dp = harga * dpP/100;
        let pinjaman = harga - dp;
        let cicilan = (pinjaman + (pinjaman*0.05*tenor))/(tenor*12);

        hargaText.innerText = formatRupiah(harga);
        dpText.innerText = formatRupiah(dp);
        pinjamanText.innerText = formatRupiah(pinjaman);
        cicilanText.innerText = formatRupiah(Math.round(cicilan));
        dpValue.innerText = dpP + "%";

        let msg = `Halo, saya tertarik simulasi kredit:

Mobil: ${mobilHarga.selectedOptions[0].text}
DP: ${dpP}%
Tenor: ${tenor} Tahun
Estimasi Cicilan: ${formatRupiah(Math.round(cicilan))}`;

        waBtn.href = `https://wa.me/6285121546050?text=${encodeURIComponent(msg)}`;
    }

    mobilHarga.onchange = hitung;
    dpRange.oninput = hitung;
    tenor.onchange = hitung;
    hitung();

    /* REVEAL */
    const reveal = document.querySelectorAll(".reveal");

    function show() {
        reveal.forEach((el,i)=>{
            if(el.getBoundingClientRect().top < window.innerHeight-100){
                setTimeout(()=>el.classList.add("active"), i*100);
            }
        });
    }

    window.addEventListener("scroll", show);
    show();

});
</script>

<!-- STYLE REVEAL -->
<style>
.reveal {
    opacity: 0;
    transform: translateY(50px);
    transition: all .7s ease;
}
.reveal.active {
    opacity: 1;
    transform: translateY(0);
}
</style>