<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="santriSTEM - Memberdayakan Santri dan Guru Pesantren melalui Pendidikan STEM">
    <meta name="keywords" content="santri, STEM, matematika, pesantren, pendidikan, DIY">
    <title>@yield('title', 'santriSTEM - Memberdayakan Santri Melalui STEM')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation -->
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
                <a href="{{ route('contact.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-50 rounded-lg">Kontak</a>
                <a href="{{ route('volunteer.index') }}" class="block px-4 py-2 mt-2 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-lg text-center">Daftar Relawan</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <!-- About -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-600 to-green-700 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-lg font-bold">santri<span class="text-blue-400">STEM</span></div>
                            <div class="text-xs text-gray-400">FMIPA UGM</div>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Memberdayakan santri dan guru pesantren melalui pendidikan STEM untuk masa depan yang lebih cerah.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold text-lg mb-4 text-green-400">Tautan Cepat</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('profile.about') }}" class="text-gray-300 hover:text-green-400 transition-colors">Tentang Kami</a></li>
                        <li><a href="{{ route('programs.index') }}" class="text-gray-300 hover:text-green-400 transition-colors">Program</a></li>
                        <li><a href="{{ route('events.index') }}" class="text-gray-300 hover:text-green-400 transition-colors">Kegiatan</a></li>
                        <li><a href="{{ route('gallery.index') }}" class="text-gray-300 hover:text-green-400 transition-colors">Galeri</a></li>
                    </ul>
                </div>

                <!-- Get Involved -->
                <div>
                    <h3 class="font-bold text-lg mb-4 text-blue-400">Bergabung</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('volunteer.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Daftar Relawan</a></li>
                        <li><a href="{{ route('partner.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Mitra Sekolah</a></li>
                        <li><a href="{{ route('contact.index') }}" class="text-gray-300 hover:text-blue-400 transition-colors">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="font-bold text-lg mb-4 text-amber-400">Kontak</h3>
                    <ul class="space-y-3 text-sm text-gray-300">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>FMIPA UGM<br>Yogyakarta, Indonesia</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>santristem@ugm.ac.id</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Partners Section -->
            <div class="border-t border-gray-700 pt-8 mb-8">
                <h3 class="text-center font-bold text-lg mb-6 text-gray-300">Mitra Kami</h3>
                <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                    <div class="text-gray-400 font-semibold">FMIPA UGM</div>
                    <div class="text-gray-400 font-semibold">PERGUNU</div>
                    <div class="text-gray-400 font-semibold">RMI NU</div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-700 pt-6 text-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} santriSTEM - FMIPA UGM. Semua hak dilindungi.</p>
                <p class="mt-2">Dibuat dengan <span class="text-red-500">&hearts;</span> untuk pendidikan pesantren</p>
            </div>
        </div>
    </footer>
</body>
</html>
