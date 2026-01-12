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
                    <li><a href="{{ route('posts.index') }}" class="text-gray-300 hover:text-green-400 transition-colors">Berita</a></li>
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
