@extends('layouts.app')

@section('title', 'Tentang Kami - santriSTEM')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-600 via-emerald-700 to-teal-800 text-white py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
                <span class="text-sm font-semibold">🎓 Tentang santriSTEM</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Memberdayakan Pendidikan STEM di Pesantren</h1>
            <p class="text-xl md:text-2xl text-emerald-50">
                Inisiatif FMIPA UGM untuk Meningkatkan Literasi Matematika dan Sains di Pondok Pesantren DIY
            </p>
        </div>
    </div>

    <!-- Decorative bottom wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
        </svg>
    </div>
</section>

<!-- Origin Story -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="prose prose-lg max-w-none">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tentang santriSTEM</h2>
                
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    <strong>santriSTEM</strong> adalah program inovatif yang digagas oleh <strong>Departemen Matematika FMIPA Universitas Gadjah Mada</strong> untuk meningkatkan kualitas pendidikan STEM (Science, Technology, Engineering, Mathematics) di lingkungan pondok pesantren, khususnya di Daerah Istimewa Yogyakarta.
                </p>

                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Program ini lahir dari keprihatinan terhadap rendahnya literasi matematika dan sains di kalangan santri, yang diperparah oleh dichotomy antara pendidikan agama dan pendidikan umum. Melalui santriSTEM, kami percaya bahwa <strong>pendidikan STEM dapat memperkuat pondasi akademik santri tanpa mengurangi nilai-nilai keislaman</strong> yang menjadi identitas pesantren.
                </p>

                <div class="bg-emerald-50 border-l-4 border-emerald-500 rounded-lg p-6 my-8">
                    <p class="text-emerald-900 italic text-lg">
                        "Pendidikan adalah hak setiap anak bangsa, termasuk santri. Dengan STEM, kita membuka pintu peluang yang lebih luas bagi mereka untuk berkontribusi pada pembangunan Indonesia."
                    </p>
                    <p class="text-emerald-700 font-semibold mt-3">— Dr. Danang Mursita, Founder santriSTEM</p>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mt-12 mb-4">Latar Belakang</h3>
                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                    Berangkat dari hasil Focus Group Discussion (FGD) dengan guru-guru matematika pesantren pada tahun 2024, kami menemukan beberapa tantangan kritis:
                </p>
                <ul class="list-disc pl-6 space-y-2 text-gray-700 mb-6">
                    <li><strong>80%+ siswa</strong> mengalami kesulitan dalam keterampilan aritmatika dasar</li>
                    <li>Kurangnya <strong>motivasi belajar</strong> pasca penghapusan Ujian Nasional</li>
                    <li><strong>Kapasitas guru</strong> yang terbatas dalam mengajar matematika secara engaging</li>
                    <li>Keterbatasan <strong>integrasi teknologi</strong> dalam pembelajaran di lingkungan pesantren</li>
                    <li><strong>Dikotomi</strong> antara pendidikan agama dan pendidikan umum yang masih kuat</li>
                </ul>

                <h3 class="text-2xl font-bold text-gray-900 mt-12 mb-4">Mengapa santriSTEM?</h3>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Nama <strong>santriSTEM</strong> menggabungkan identitas pesantren dengan fokus pendidikan STEM. Program ini lahir dengan tiga pilar utama:
                </p>
                
                <div class="grid md:grid-cols-3 gap-6 my-8">
                    <div class="bg-blue-50 rounded-xl p-6 border border-blue-100">
                        <div class="text-4xl mb-4">🎯</div>
                        <h4 class="font-bold text-gray-900 mb-2">Pemberdayaan Guru</h4>
                        <p class="text-gray-600 text-sm">Meningkatkan kapasitas guru matematika pesantren melalui pelatihan dan pendampingan berkelanjutan</p>
                    </div>
                    <div class="bg-purple-50 rounded-xl p-6 border border-purple-100">
                        <div class="text-4xl mb-4">💡</div>
                        <h4 class="font-bold text-gray-900 mb-2">Motivasi Santri</h4>
                        <p class="text-gray-600 text-sm">Menumbuhkan minat dan motivasi santri terhadap STEM melalui kegiatan interaktif dan inspiratif</p>
                    </div>
                    <div class="bg-emerald-50 rounded-xl p-6 border border-emerald-100">
                        <div class="text-4xl mb-4">🤝</div>
                        <h4 class="font-bold text-gray-900 mb-2">Komunitas Alumni</h4>
                        <p class="text-gray-600 text-sm">Membangun jejaring santri alumni pesantren yang menempuh pendidikan STEM di perguruan tinggi</p>
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mt-12 mb-4">Koneksi dengan Hari Santri Nasional</h3>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    Program santriSTEM sejalan dengan semangat <strong>Hari Santri Nasional (22 Oktober)</strong> yang merayakan kontribusi santri dalam sejarah Indonesia. Kami percaya bahwa santri masa kini dapat menjadi agen perubahan dalam dunia STEM, mengintegrasikan nilai-nilai Islam dengan ilmu pengetahuan modern untuk kemajuan bangsa.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Vision -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-blue-100 rounded-full p-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Visi</h2>
                    </div>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Menjadi <strong>jembatan</strong> antara dunia akademik perguruan tinggi dan pendidikan pesantren untuk <strong>mengintegrasikan STEM dalam pembelajaran</strong>, menciptakan generasi santri yang unggul dalam ilmu agama dan sains modern.
                    </p>
                </div>

                <!-- Mission -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-emerald-100 rounded-full p-4">
                            <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Misi</h2>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Meningkatkan <strong>kemampuan numerasi</strong> santri dan guru pesantren</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Memberikan <strong>pelatihan berkualitas</strong> dan pendampingan berkelanjutan</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Membangun <strong>komunitas santri STEM</strong> untuk saling mendukung</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Melibatkan <strong>mahasiswa relawan</strong> dari latar belakang pesantren</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Approach -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Pendekatan Kami</h2>
                <p class="text-lg text-gray-600">Program yang kolaboratif, berkelanjutan, dan berbasis kebutuhan</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl p-8 mb-6 shadow-lg">
                        <svg class="w-16 h-16 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Kolaboratif</h3>
                    <p class="text-gray-600">Melibatkan guru, santri, lembaga pesantren, dan universitas dalam setiap tahapan program</p>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl p-8 mb-6 shadow-lg">
                        <svg class="w-16 h-16 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Berkelanjutan</h3>
                    <p class="text-gray-600">Bukan program sekali jalan, tetapi pendampingan jangka panjang dengan follow-up rutin</p>
                </div>

                <div class="text-center">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl p-8 mb-6 shadow-lg">
                        <svg class="w-16 h-16 text-white mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Berbasis Kebutuhan</h3>
                    <p class="text-gray-600">Program dirancang berdasarkan hasil riset dan FGD dengan stakeholder pesantren</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-24 bg-gradient-to-br from-emerald-600 to-teal-700 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Mari Bergabung Bersama Kami</h2>
            <p class="text-xl text-emerald-50 mb-8">
                Jadilah bagian dari perubahan pendidikan STEM di pesantren Indonesia
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('volunteer.index') }}" class="bg-white text-emerald-600 hover:bg-emerald-50 font-semibold px-8 py-4 rounded-xl transition-colors inline-flex items-center justify-center gap-2">
                    <span>Daftar Sebagai Relawan</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="{{ route('partner.index') }}" class="bg-emerald-500 hover:bg-emerald-400 text-white font-semibold px-8 py-4 rounded-xl transition-colors inline-flex items-center justify-center gap-2 border-2 border-white/20">
                    <span>Daftar Sekolah Mitra</span>
                </a>
                <a href="{{ route('contact.index') }}" class="bg-transparent hover:bg-white/10 text-white font-semibold px-8 py-4 rounded-xl transition-colors inline-flex items-center justify-center gap-2 border-2 border-white/50">
                    <span>Hubungi Kami</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
