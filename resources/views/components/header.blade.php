<header class="bg-white/90 backdrop-blur-md shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-8 py-4">

        <!-- LOGO -->
        <div class="flex items-center">
            <img src="/images/logo.png" 
                 alt="Hyundai" 
                 class="h-10 md:h-12 w-auto">
        </div>


        <!-- MENU -->
        <nav class="hidden md:flex items-center space-x-8 font-medium text-gray-700">


            <a href="/" 
            class="relative group {{ request()->is('/') ? 'text-[#0b1f3a] font-semibold' : '' }}">
                Home
                <span class="absolute left-0 -bottom-2 h-[2px] bg-[#0b1f3a] transition-all duration-300 
                {{ request()->is('/') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>


            <a href="/kendaraan" 
            class="relative group {{ request()->is('kendaraan') ? 'text-[#0b1f3a] font-semibold' : '' }}">
                Kendaraan
                <span class="absolute left-0 -bottom-2 h-[2px] bg-[#0b1f3a] transition-all duration-300 
                {{ request()->is('kendaraan') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>


            <a href="/kredit" 
            class="relative group {{ request()->is('kredit') ? 'text-[#0b1f3a] font-semibold' : '' }}">
                Simulasi Kredit
                <span class="absolute left-0 -bottom-2 h-[2px] bg-[#0b1f3a] transition-all duration-300 
                {{ request()->is('kredit') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>


            <a href="/galeri" 
            class="relative group {{ request()->is('galeri') ? 'text-[#0b1f3a] font-semibold' : '' }}">
                Galeri
                <span class="absolute left-0 -bottom-2 h-[2px] bg-[#0b1f3a] transition-all duration-300 
                {{ request()->is('galeri') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>


            <a href="/kontak" 
            class="relative group {{ request()->is('kontak') ? 'text-[#0b1f3a] font-semibold' : '' }}">
                Kontak
                <span class="absolute left-0 -bottom-2 h-[2px] bg-[#0b1f3a] transition-all duration-300 
                {{ request()->is('kontak') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>


        </nav>



        <!-- PROFILE -->
        <div>
            <img src="/images/profilee.jpeg"
                 alt="Sales"
                 class="h-14 w-14 rounded-full object-cover border-2 border-gray-300 hover:border-[#0b1f3a] transition duration-300 cursor-pointer">
        </div>


    </div>
</header>