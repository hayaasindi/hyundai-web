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


<!-- TITLE -->

<div class="text-center mb-14 reveal">

<h2 class="text-3xl md:text-4xl font-semibold text-gray-900">
Kalkulator Kredit Hyundai
</h2>

<p class="text-gray-500 mt-3">
Hitung estimasi cicilan kendaraan impian Anda dengan mudah
</p>

</div>



<div class="grid lg:grid-cols-2 gap-10 items-start">



<!-- =====================
     KALKULATOR
===================== -->


<div class="bg-white rounded-3xl shadow-xl p-8 reveal">


<div class="flex items-center gap-3 mb-8">

<div class="w-12 h-12 rounded-xl bg-[#0b1f3a] flex items-center justify-center">

<span class="text-white text-xl">
</span>

</div>


<div>

<h3 class="font-bold text-xl text-gray-900">
Simulasi Pembiayaan
</h3>

<p class="text-sm text-gray-500">
Sesuaikan DP dan tenor
</p>


</div>


</div>



<div class="space-y-7">



<!-- MOBIL -->

<div>

<label class="text-sm font-medium text-gray-700">
Pilih Kendaraan
</label>


<select 
id="mobilHarga"
class="w-full mt-2 border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-[#0b1f3a] outline-none">

@foreach($simulasi as $item)

<option

value="{{$item->id}}"

data-nama="{{$item->nama_mobil}}"

data-harga="{{$item->harga}}"

data-dp="{{$item->dp}}"

data-tenor="{{$item->tenor}}"

data-cicilan="{{$item->cicilan}}"

>

{{$item->nama_mobil}}

</option>


@endforeach


</select>


</div>





<!-- DP -->

<div>


<div class="flex justify-between">

<label class="text-sm font-medium text-gray-700">
Uang Muka
</label>


<span 
id="dpValue"
class="font-bold text-[#0b1f3a]">
20%
</span>


</div>


<input

type="range"

id="dpRange"

min="10"

max="100"

step="10"

value="20"

class="w-full mt-4 accent-[#0b1f3a]"


>


<div class="flex justify-between text-xs text-gray-400 mt-2">

<span>10%</span>
<span>30%</span>
<span>50%</span>
<span>70%</span>
<span>100%</span>

</div>


</div>





<!-- TENOR -->


<div>

<label class="text-sm font-medium text-gray-700">
Tenor Kredit
</label>


<select 

id="tenor"

class="w-full mt-2 border border-gray-200 rounded-xl px-4 py-3">


<option value="1">
1 Tahun
</option>


<option value="2">
2 Tahun
</option>


<option value="3">
3 Tahun
</option>


<option value="4">
4 Tahun
</option>


<option value="5">
5 Tahun
</option>


</select>


</div>






<!-- HASIL -->


<div class="bg-gray-50 rounded-2xl p-6">


<h4 class="font-bold text-gray-900 mb-5">
Estimasi Kredit
</h4>



<div class="space-y-4">


<div>

<p class="text-sm text-gray-500">
Harga Kendaraan
</p>

<h3 
id="hargaText"
class="font-bold text-lg">

Rp 0

</h3>


</div>




<div>

<p class="text-sm text-gray-500">
Uang Muka
</p>

<h3 
id="dpText"
class="font-bold text-lg">

Rp 0

</h3>


</div>




<div class="border-t pt-4">


<p class="text-sm text-gray-500">
Estimasi Cicilan / Bulan
</p>


<h3

id="cicilanText"

class="text-2xl font-bold text-[#0b1f3a]">

Rp 0

</h3>


</div>



</div>


</div>



</div>


</div>





<!-- =====================
     FORM KONSULTASI
===================== -->


<!-- FORM KONSULTASI -->

<div class="bg-[#0b1f3a] rounded-3xl shadow-xl p-8 text-white reveal">


<div class="flex items-center gap-3 mb-8">

<div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center">

<i class="bi bi-chat-dots-fill text-[#0b1f3a] text-xl"></i>

</div>


<div>

<h3 class="text-2xl font-bold">
Konsultasi Kredit Hyundai
</h3>


<p class="text-white/70 text-sm mt-1">
Dapatkan penawaran terbaik dari sales kami
</p>


</div>


</div>





<form 
action="{{route('kredit.store')}}"
method="POST"
class="space-y-5">


@csrf



<!-- NAMA -->

<div>

<label class="text-sm font-medium text-white">

Nama Lengkap

</label>


<input

type="text"

name="nama"

required

placeholder="Masukkan nama lengkap"

class="w-full mt-2 px-4 py-3 rounded-xl bg-white text-gray-900 border border-gray-300 focus:ring-2 focus:ring-white outline-none"

>


</div>





<!-- WHATSAPP -->


<div>

<label class="text-sm font-medium text-white">

Nomor WhatsApp

</label>


<input

type="text"

name="hp"

required

placeholder="Contoh: 08123456789"

class="w-full mt-2 px-4 py-3 rounded-xl bg-white text-gray-900 border border-gray-300 focus:ring-2 focus:ring-white outline-none"

>


</div>






<input
type="hidden"
id="mobilInput"
name="mobil">


<input
type="hidden"
id="dpInput"
name="dp">


<input
type="hidden"
id="tenorInput"
name="tenor">


<input
type="hidden"
id="cicilanInput"
name="cicilan">






<div class="bg-white/10 rounded-xl p-5">


<div class="flex items-center gap-2 text-sm">

<i class="bi bi-check-circle-fill"></i>

<span>
Gratis konsultasi kredit
</span>

</div>



<div class="flex items-center gap-2 text-sm mt-3">

<i class="bi bi-check-circle-fill"></i>

<span>
Dibantu proses sampai approval
</span>

</div>




<div class="flex items-center gap-2 text-sm mt-3">

<i class="bi bi-check-circle-fill"></i>

<span>
Respon cepat melalui WhatsApp
</span>

</div>


</div>






<button

type="submit"

class="w-full bg-white text-[#0b1f3a] font-bold py-4 rounded-xl hover:bg-gray-100 transition duration-300"


>

<i class="bi bi-whatsapp"></i>

Konsultasi Sekarang


</button>



</form>


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

<!-- ===================== -->
<!-- SCRIPT GLOBAL -->
<!-- ===================== -->
<script>

document.addEventListener("DOMContentLoaded", function(){


    /* =====================
       ELEMENT SIMULASI
    ====================== */

    const mobilHarga = document.getElementById("mobilHarga");
    const dpRange = document.getElementById("dpRange");
    const tenor = document.getElementById("tenor");


    const dpValue = document.getElementById("dpValue");

    const hargaText = document.getElementById("hargaText");
    const dpText = document.getElementById("dpText");
    const cicilanText = document.getElementById("cicilanText");


    const mobilInput = document.getElementById("mobilInput");
    const dpInput = document.getElementById("dpInput");
    const tenorInput = document.getElementById("tenorInput");
    const cicilanInput = document.getElementById("cicilanInput");



    // jika section kredit tidak ada
    if(!mobilHarga){
        return;
    }



    /* =====================
       FORMAT RUPIAH
    ====================== */

    function formatRupiah(angka){

        return "Rp " + 
        Number(angka).toLocaleString("id-ID");

    }





    /* =====================
       HITUNG KREDIT
    ====================== */

    function hitungKredit(){


        let option = mobilHarga.options[mobilHarga.selectedIndex];


        if(!option){
            return;
        }



        let harga = Number(
            option.dataset.harga
        );



        let dpPersen = Number(
            dpRange.value
        );



        let tenorTahun = Number(
            tenor.value
        );



        // hitung DP

        let dp = harga * dpPersen / 100;



        // sisa pinjaman

        let pinjaman = harga - dp;



        // simulasi bunga 5%

        let bunga = 
        pinjaman * 0.05 * tenorTahun;



        let total = 
        pinjaman + bunga;



        let cicilan =
        total / (tenorTahun * 12);




        /* =====================
           UPDATE TAMPILAN
        ====================== */


        dpValue.innerHTML =
        dpPersen + "%";



        hargaText.innerHTML =
        formatRupiah(harga);



        dpText.innerHTML =
        formatRupiah(dp);



        cicilanText.innerHTML =
        formatRupiah(
            Math.round(cicilan)
        );





        /* =====================
           UPDATE FORM KONSULTASI
        ====================== */


        mobilInput.value =
        option.dataset.nama;



        dpInput.value =
        Math.round(dp);



        tenorInput.value =
        tenorTahun;



        cicilanInput.value =
        Math.round(cicilan);



    }







    /* =====================
       EVENT
    ====================== */


    mobilHarga.addEventListener(
        "change",
        hitungKredit
    );



    dpRange.addEventListener(
        "input",
        hitungKredit
    );



    tenor.addEventListener(
        "change",
        hitungKredit
    );




    // pertama kali load

    hitungKredit();





    });

    // ==========================
    // SCROLL REVEAL ANIMATION
    // ==========================


    const revealElements = document.querySelectorAll(".reveal");


    const observer = new IntersectionObserver(
    (entries)=>{

        entries.forEach(entry=>{

            if(entry.isIntersecting){

                entry.target.classList.add("active");

                observer.unobserve(entry.target);

            }

        });


    },
    {
        threshold:0.15
    });



    revealElements.forEach((el,index)=>{


        // delay otomatis untuk card
        el.style.transitionDelay = `${index * 80}ms`;


        observer.observe(el);


    });
</script>

<!-- STYLE REVEAL -->
<style>

/* =========================
   PREMIUM SCROLL ANIMATION
========================= */


.reveal{

    opacity:0;

    transform:translateY(60px);

    filter:blur(5px);

    transition:
    opacity .8s ease,
    transform .8s cubic-bezier(.2,.8,.2,1),
    filter .8s ease;

}



.reveal.active{

    opacity:1;

    transform:translateY(0);

    filter:blur(0);

}




/* CARD HOVER */

.group:hover{

    transform:translateY(-8px);

}



.transition{

    transition:
    transform .4s ease,
    box-shadow .4s ease;

}



</style>


@endsection