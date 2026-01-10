@extends('layouts.app')

@section('title', 'santriSTEM - Memberdayakan Santri Melalui STEM')

@section('content')
<!-- Hero Section -->
<x-hero>
    <x-slot:badge>🎓 Program Pendidikan STEM untuk Pesantren</x-slot:badge>
    <x-slot:title>
        Memberdayakan Santri<br>Melalui <span class="text-amber-300">STEM</span>
    </x-slot:title>
    <x-slot:subtitle>
        Meningkatkan Literasi Matematika dan Sains di Pesantren DIY
    </x-slot:subtitle>
    <x-slot:description>
        Program kolaboratif FMIPA UGM untuk guru dan santri pesantren. Kami percaya pendidikan STEM dapat memperkuat pondasi akademik tanpa mengurangi nilai-nilai keislaman.
    </x-slot:description>
    <x-slot:cta>
        <x-cta-button href="{{ route('programs.index') }}" variant="primary" size="lg" :arrow="true">
            Lihat Program Kami
        </x-cta-button>
        <x-cta-button href="{{ route('volunteer.index') }}" variant="outline" size="lg">
            Daftar Relawan
        </x-cta-button>
    </x-slot:cta>
</x-hero>

<!-- Stats Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8">
            <x-stat-counter 
                :target="150" 
                suffix="+"
                label="Guru Terlatih"
                description="Guru matematika pesantren"
            />
            <x-stat-counter 
                :target="500" 
                suffix="+"
                label="Santri Terlibat"
                description="Santri aktif mengikuti program"
            />
            <x-stat-counter 
                :target="12" 
                suffix="+"
                label="Sekolah Mitra"
                description="Pesantren di DIY"
            />
            <x-stat-counter 
                :target="8" 
                label="Program Selesai"
                description="Kegiatan terlaksana"
            />
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-green-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Tentang <span class="text-green-600">santriSTEM</span>
            </h2>
            <p class="text-lg text-gray-600">
                santriSTEM adalah inisiatif Departemen Matematika FMIPA UGM untuk meningkatkan kualitas pendidikan STEM di pesantren-pesantren DIY.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Misi Kami</h3>
                <p class="text-gray-600">
                    Meningkatkan kemampuan numerasi santri dan guru pesantren melalui pelatihan berkualitas dan pendampingan berkelanjutan.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Visi Kami</h3>
                <p class="text-gray-600">
                    Menjadi jembatan antara dunia akademik perguruan tinggi dan pendidikan pesantren untuk mengintegrasikan STEM dalam pembelajaran.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Pendekatan Kami</h3>
                <p class="text-gray-600">
                    Kolaboratif dan berkelanjutan dengan melibatkan guru, santri, dan lembaga pesantren dalam setiap tahapan program.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Program <span class="text-green-600">Unggulan</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Berbagai program pelatihan dan pendampingan untuk meningkatkan kemampuan STEM di pesantren
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($programs as $program)
                <x-program-card 
                    :title="$program->title"
                    :description="$program->description"
                    :badge="$program->target_audience"
                >
                    <x-slot:cta>
                        <x-cta-button href="{{ route('programs.show', $program->slug) }}" variant="secondary" size="sm" :arrow="true">
                            Pelajari Lebih Lanjut
                        </x-cta-button>
                    </x-slot:cta>
                </x-program-card>
            @endforeach
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <x-cta-button href="{{ route('programs.index') }}" variant="primary" size="lg" :arrow="true">
                Lihat Semua Program
            </x-cta-button>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section class="py-20 bg-gradient-to-br from-green-600 to-blue-600 text-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Kegiatan <span class="text-amber-300">Mendatang</span>
            </h2>
            <p class="text-lg text-green-50">
                Jangan lewatkan kesempatan untuk bergabung dalam kegiatan kami
            </p>
        </div>

        @if($upcomingEvent)
            <div class="max-w-4xl mx-auto bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20" data-aos="zoom-in">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="inline-block px-4 py-2 bg-amber-500 text-white rounded-full text-sm font-bold mb-4">
                            📅 {{ \Carbon\Carbon::parse($upcomingEvent->event_date)->format('d F Y') }}
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold mb-4">{{ $upcomingEvent->title }}</h3>
                        <p class="text-green-50 mb-6">{{ $upcomingEvent->description }}</p>
                        <div class="flex items-center text-sm space-x-4 mb-6">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>
                                {{ $upcomingEvent->location }}
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Kuota: {{ $upcomingEvent->max_participants }} peserta
                            </div>
                        </div>
                        <x-cta-button href="{{ route('events.show', $upcomingEvent->slug) }}" variant="outline" size="lg" :arrow="true">
                            Daftar Sekarang
                        </x-cta-button>
                    </div>
                    <div class="hidden md:block">
                        <div class="bg-white/20 backdrop-blur rounded-xl p-8 text-center">
                            <div class="text-6xl font-bold mb-2">{{ \Carbon\Carbon::parse($upcomingEvent->event_date)->format('d') }}</div>
                            <div class="text-xl font-semibold">{{ \Carbon\Carbon::parse($upcomingEvent->event_date)->format('F Y') }}</div>
                            <div class="mt-6 pt-6 border-t border-white/30">
                                <div class="text-sm font-semibold mb-2">Deadline Pendaftaran</div>
                                <div class="text-lg font-bold">{{ \Carbon\Carbon::parse($upcomingEvent->registration_deadline)->format('d F Y') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="text-center mt-8" data-aos="fade-up">
            <x-cta-button href="{{ route('events.index') }}" variant="outline" size="md">
                Lihat Semua Kegiatan
            </x-cta-button>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Apa Kata <span class="text-green-600">Mereka</span>
            </h2>
            <p class="text-lg text-gray-600">
                Testimoni dari guru, santri, dan relawan yang telah bergabung
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-12">
            @foreach($testimonials as $testimonial)
                <x-testimonial 
                    :name="$testimonial->name"
                    :role="$testimonial->role"
                    :school="$testimonial->school"
                    :content="$testimonial->content"
                    :photo="$testimonial->photo"
                />
            @endforeach
        </div>
    </div>
</section>

<!-- Gallery Preview -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Galeri <span class="text-green-600">Kegiatan</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Dokumentasi kegiatan dan program santriSTEM dalam mengembangkan pendidikan STEM di pesantren
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($featuredPhotos as $photo)
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 aspect-[4/3]" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <x-optimized-image 
                        :src="$photo->image_path" 
                        :alt="$photo->title"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-lg font-bold mb-2">{{ $photo->title }}</h3>
                            <p class="text-sm text-gray-200">{{ Str::limit($photo->description, 80) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <x-cta-button href="{{ route('gallery.index') }}" variant="primary" size="lg" :arrow="true">
                Lihat Semua Foto
            </x-cta-button>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-green-600 to-blue-600 text-white">
    <div class="container mx-auto px-4 text-center" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Bergabunglah Bersama Kami!
        </h2>
        <p class="text-xl text-green-50 mb-10 max-w-2xl mx-auto">
            Jadilah bagian dari perubahan pendidikan STEM di pesantren. Mari bersama membangun masa depan yang lebih cerah untuk santri Indonesia.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <x-cta-button href="{{ route('volunteer.index') }}" variant="outline" size="lg" :arrow="true">
                Daftar Sebagai Relawan
            </x-cta-button>
            <x-cta-button href="{{ route('partner.index') }}" variant="outline" size="lg" :arrow="true">
                Daftar Sebagai Mitra Sekolah
            </x-cta-button>
            <x-cta-button href="{{ route('contact.index') }}" variant="outline" size="lg">
                Hubungi Kami
            </x-cta-button>
        </div>
    </div>
</section>

<!-- Partner Schools -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h3 class="text-2xl font-bold text-center text-gray-900 mb-12" data-aos="fade-up">
            Sekolah <span class="text-green-600">Mitra</span>
        </h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center opacity-60">
            @foreach($partnerSchools as $school)
                <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="font-semibold text-gray-700">{{ $school->name }}</div>
                    <div class="text-sm text-gray-500">{{ explode(',', $school->address)[0] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
