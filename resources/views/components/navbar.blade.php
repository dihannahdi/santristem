<nav x-data="{ mobileMenuOpen: false }" class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <div class="w-12 h-12 bg-gradient-to-br from-green-600 to-green-700 rounded-lg flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div class="hidden md:block">
                    <div class="text-xl font-bold text-green-700">santri<span class="text-blue-600">STEM</span></div>
                    <div class="text-xs text-gray-600">FMIPA UGM</div>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="px-4 py-2 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors {{ request()->routeIs('home') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">
                    Beranda
                </a>
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                    <button class="px-4 py-2 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors flex items-center {{ request()->routeIs('profile.*') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">
                        Profil
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2">
                        <a href="{{ route('profile.about') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-700">Tentang Kami</a>
                        <a href="{{ route('profile.team') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-700">Tim Kami</a>
                    </div>
                </div>
                <a href="{{ route('programs.index') }}" class="px-4 py-2 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors {{ request()->routeIs('programs.*') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">
                    Program
                </a>
                <a href="{{ route('events.index') }}" class="px-4 py-2 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors {{ request()->routeIs('events.*') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">
                    Kegiatan
                </a>
                <a href="{{ route('gallery.index') }}" class="px-4 py-2 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors {{ request()->routeIs('gallery.*') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">
                    Galeri
                </a>
                <a href="{{ route('posts.index') }}" class="px-4 py-2 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors {{ request()->routeIs('posts.*') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">
                    Berita
                </a>
                <a href="{{ route('contact.index') }}" class="px-4 py-2 rounded-lg text-gray-700 hover:bg-green-50 hover:text-green-700 transition-colors {{ request()->routeIs('contact.*') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">
                    Kontak
                </a>
                <a href="{{ route('volunteer.index') }}" class="ml-4 px-6 py-2 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-lg hover:from-green-700 hover:to-blue-700 transition-all transform hover:scale-105 shadow-md">
                    Daftar Relawan
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden pb-4">
            <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 rounded-lg {{ request()->routeIs('home') ? 'bg-green-50 text-green-700 font-semibold' : '' }}">Beranda</a>
            <a href="{{ route('profile.about') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 rounded-lg">Tentang Kami</a>
            <a href="{{ route('profile.team') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 rounded-lg">Tim Kami</a>
            <a href="{{ route('programs.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 rounded-lg">Program</a>
            <a href="{{ route('events.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 rounded-lg">Kegiatan</a>
            <a href="{{ route('gallery.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 rounded-lg">Galeri</a>
            <a href="{{ route('posts.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 rounded-lg">Berita</a>
            <a href="{{ route('contact.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 rounded-lg">Kontak</a>
            <a href="{{ route('volunteer.index') }}" class="block px-4 py-2 mt-2 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-lg text-center">Daftar Relawan</a>
        </div>
    </div>
</nav>
