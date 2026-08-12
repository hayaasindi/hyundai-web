<header class="bg-white/90 backdrop-blur-md shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-10 py-6">

        <!-- LOGO KIRI -->
        <div class="flex items-center space-x-4">
            <img src="/images/logo.png" alt="logo" class="h-18 w-auto">
        </div>

        <!-- MENU TENGAH -->
        <nav class="hidden md:flex items-center space-x-10 font-medium text-gray-700">

            <a href="/" 
            class="relative {{ request()->is('/') ? 'text-[#0b1f3a] font-semibold' : 'group' }}">
                Home
                <span class="absolute left-0 -bottom-1 h-[2px] bg-[#0b1f3a] transition-all duration-300
                {{ request()->is('/') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>

            <a href="/kendaraan" 
            class="relative {{ request()->is('kendaraan') ? 'text-[#0b1f3a] font-semibold' : 'group' }}">
                Kendaraan
                <span class="absolute left-0 -bottom-1 h-[2px] bg-[#0b1f3a] transition-all duration-300
                {{ request()->is('kendaraan') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>

            <a href="/kredit" 
            class="relative {{ request()->is('galeri') ? 'text-[#0b1f3a] font-semibold' : 'group' }}">
                Simulasi Kredit
                <span class="absolute left-0 -bottom-1 h-[2px] bg-[#0b1f3a] transition-all duration-300
                {{ request()->is('kredit') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>

            <a href="/galeri" 
            class="relative {{ request()->is('galeri') ? 'text-[#0b1f3a] font-semibold' : 'group' }}">
                Galeri
                <span class="absolute left-0 -bottom-1 h-[2px] bg-[#0b1f3a] transition-all duration-300
                {{ request()->is('galeri') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>

            <a href="/kontak" 
            class="relative {{ request()->is('kontak') ? 'text-[#0b1f3a] font-semibold' : 'group' }}">
                Kontak
                <span class="absolute left-0 -bottom-1 h-[2px] bg-[#0b1f3a] transition-all duration-300
                {{ request()->is('kontak') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>

        </nav>

        <!-- FOTO SALES KANAN -->
        <div>
            <img src="/images/profilee.jpeg" alt="sales" 
                 class="h-18 w-15 rounded-full object-cover border-2 border-gray-300 hover:border-blue-900 transition duration-300 cursor-pointer">
        </div>

    </div>
</header>