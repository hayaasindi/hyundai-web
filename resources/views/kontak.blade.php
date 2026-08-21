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

<!-- SECTION SALES CONSULTANT -->
<section class="py-28 bg-gray-100 overflow-hidden">

    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-2 gap-20 items-center">


            <!-- FOTO SALES -->
            <div class="reveal relative flex justify-center">


                <div class="
                    absolute
                    w-72
                    h-96
                    border
                    border-[#0b1f3a]/20
                    rounded-3xl
                    translate-x-6
                    translate-y-6
                "></div>



                <div class="relative">


                    <img src="/images/fotodaffa.png"
                    class="
                    w-[260px]
                    md:w-[300px]
                    h-[380px]
                    object-cover
                    rounded-3xl
                    shadow-xl
                    ">


                    <!-- BADGE -->

                    <div class="
                        absolute
                        -bottom-5
                        left-1/2
                        -translate-x-1/2
                        bg-white
                        shadow-lg
                        rounded-2xl
                        px-6
                        py-4
                        w-[260px]
                        text-center
                    ">


                        <h3 class="
                            font-semibold
                            text-gray-900
                            text-lg
                        ">
                            Daffa Syaddad
                        </h3>


                        <p class="
                            text-sm
                            text-gray-500
                            mt-1
                        ">
                            Hyundai Sales Consultant
                        </p>


                    </div>


                </div>


            </div>




            <!-- CONTENT -->

            <div class="reveal">


                <span class="
                    text-xs
                    tracking-[3px]
                    uppercase
                    text-gray-500
                    font-semibold
                ">
                    Hyundai Kalimalang Official
                </span>



                <h2 class="
                    mt-4
                    text-3xl
                    md:text-4xl
                    font-semibold
                    text-[#0b1f3a]
                    leading-tight
                ">
                    Konsultasi Kendaraan
                    Dengan Lebih Mudah
                </h2>



                <div class="
                    w-16
                    h-1
                    bg-[#0b1f3a]
                    rounded-full
                    mt-6
                    mb-6
                "></div>



                <p class="
                    text-gray-600
                    leading-relaxed
                    max-w-lg
                ">
                    Kami membantu Anda menemukan kendaraan Hyundai yang sesuai kebutuhan dengan proses yang transparan, cepat, dan profesional.
                </p>



                <!-- FEATURE -->

                <div class="mt-8 space-y-5">


                    <div class="feature-item">

                        <div class="feature-icon">
                            <img src="/images/checklist.png">
                        </div>

                        <p>
                            Konsultasi kendaraan gratis
                        </p>

                    </div>



                    <div class="feature-item">

                        <div class="feature-icon">
                            <img src="/images/checklist.png">
                        </div>

                        <p>
                            Pendampingan proses kredit
                        </p>

                    </div>



                    <div class="feature-item">

                        <div class="feature-icon">
                            <img src="/images/checklist.png">
                        </div>

                        <p>
                            Rekomendasi promo dan leasing terbaik
                        </p>

                    </div>



                </div>



                <a href="https://wa.me/6285121546050?text=Halo%20saya%20ingin%20konsultasi%20mobil%20Hyundai"
                target="_blank"
                class="
                inline-flex
                mt-10
                items-center
                gap-3
                bg-[#0b1f3a]
                text-white
                px-8
                py-3.5
                rounded-full
                text-sm
                font-medium
                hover:-translate-y-1
                transition
                shadow-lg
                ">

                    Konsultasi Sekarang

                    <span>
                        →
                    </span>

                </a>



            </div>


        </div>

    </div>

</section>

<section class="py-28 bg-white">


<div class="max-w-6xl mx-auto px-6">


<div class="text-center reveal">


<span class="
text-xs
tracking-[3px]
uppercase
text-gray-400
font-semibold
">
Contact Center
</span>


<h2 class="
mt-4
text-3xl
md:text-4xl
font-semibold
text-[#0b1f3a]
">

Hubungi Kami

</h2>


<p class="
mt-3
text-gray-500
text-sm
">
Siap membantu kebutuhan kendaraan Hyundai Anda
</p>


</div>



<div class="
grid
md:grid-cols-3
gap-6
mt-16
">



<div class="contact-card reveal">


<img src="/images/whatsapp.png">


<h3>
WhatsApp
</h3>


<p>
+62 851-2154-6050
</p>


<a href="https://wa.me/6285121546050"
target="_blank">

Chat Sekarang →

</a>


</div>




<div class="contact-card reveal">


<img src="/images/mapss.png">


<h3>
Lokasi Dealer
</h3>


<p>
Hyundai Bekasi
<br>
Tambun Selatan
</p>


</div>




<div class="contact-card reveal">


<img src="/images/service.png">


<h3>
Jam Operasional
</h3>


<p>
Senin - Sabtu
<br>
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

.feature-item{

display:flex;
align-items:center;
gap:15px;

}


.feature-icon{

width:42px;
height:42px;

border-radius:12px;

border:1px solid #e5e7eb;

display:flex;
align-items:center;
justify-content:center;

background:white;

}


.feature-icon img{

width:20px;

}



.feature-item p{

color:#374151;
font-size:15px;

}

.contact-card{


background:white;

border:1px solid #e5e7eb;

border-radius:24px;

padding:35px 25px;

text-align:center;

transition:.4s;


}


.contact-card:hover{

transform:translateY(-8px);

box-shadow:
0 20px 40px rgba(0,0,0,.08);

}



.contact-card img{

width:45px;

height:45px;

object-fit:contain;

margin:auto;

margin-bottom:20px;

}



.contact-card h3{

font-size:17px;

font-weight:600;

color:#111827;

}



.contact-card p{

margin-top:8px;

font-size:14px;

color:#6b7280;

line-height:1.7;

}



.contact-card a{

display:inline-block;

margin-top:18px;

font-size:14px;

font-weight:600;

color:#0b1f3a;

}



.reveal{

opacity:0;

transform:translateY(40px);

transition:
all .8s ease;

}


.reveal.active{

opacity:1;

transform:translateY(0);

}


</style>

<script>


const reveals =
document.querySelectorAll(".reveal");


const observer =
new IntersectionObserver((entries)=>{


entries.forEach(entry=>{


if(entry.isIntersecting){


entry.target.classList.add("active");


}


});


},{
threshold:.15
});


reveals.forEach(el=>{

observer.observe(el);

});


</script>