@extends('layouts.app')

@section('title', 'Kegiatan - santriSTEM')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-600 via-emerald-700 to-teal-800 text-white py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
                <span class="text-sm font-semibold">📅 Kegiatan santriSTEM</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Kegiatan & Acara</h1>
            <p class="text-xl md:text-2xl text-emerald-50 mb-4">Bergabunglah dalam Program STEM untuk Pesantren</p>
            <p class="text-lg text-emerald-100 max-w-2xl mx-auto">
                Ikuti berbagai kegiatan pelatihan, workshop, dan acara yang dirancang khusus untuk meningkatkan literasi STEM di pesantren.
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

<!-- Upcoming Events Section -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kegiatan Mendatang</h2>
                <p class="text-lg text-gray-600">Daftarkan diri Anda untuk mengikuti kegiatan kami</p>
            </div>

            @if($upcomingEvents->isEmpty())
                <div class="bg-gray-50 rounded-2xl p-12 text-center border-2 border-dashed border-gray-300">
                    <div class="text-6xl mb-4">📅</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada Kegiatan Mendatang</h3>
                    <p class="text-gray-600">Pantau terus halaman ini untuk informasi kegiatan selanjutnya.</p>
                </div>
            @else
                <div class="grid md:grid-cols-2 gap-8">
                    @foreach($upcomingEvents as $event)
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 group">
                            @if($event->image)
                                <div class="aspect-video bg-gradient-to-br from-emerald-100 to-teal-100 overflow-hidden">
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                            @else
                                <div class="aspect-video bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center">
                                    <span class="text-white text-6xl">📚</span>
                                </div>
                            @endif
                            
                            <div class="p-6">
                                <div class="flex items-center gap-2 text-sm text-emerald-600 font-semibold mb-3">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>{{ \Carbon\Carbon::parse($event->event_date)->format('d F Y') }}</span>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-emerald-600 transition-colors">
                                    {{ $event->title }}
                                </h3>

                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    {{ $event->description }}
                                </p>

                                @if($event->location)
                                    <div class="flex items-start gap-2 text-sm text-gray-500 mb-4">
                                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span>{{ $event->location }}</span>
                                    </div>
                                @endif

                                @if($event->registration_deadline)
                                    <div class="bg-amber-50 border border-amber-200 rounded-lg px-3 py-2 mb-4">
                                        <p class="text-sm text-amber-800">
                                            <span class="font-semibold">Batas Pendaftaran:</span> 
                                            {{ \Carbon\Carbon::parse($event->registration_deadline)->format('d F Y') }}
                                        </p>
                                    </div>
                                @endif

                                <a href="{{ route('events.show', $event->slug) }}" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-xl transition-colors group">
                                    <span>Lihat Detail & Daftar</span>
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>

<!-- Past Events Section -->
@if($pastEvents->isNotEmpty())
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kegiatan yang Telah Dilaksanakan</h2>
                <p class="text-lg text-gray-600">Lihat dokumentasi kegiatan kami yang telah terlaksana</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach($pastEvents as $event)
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow overflow-hidden border border-gray-100">
                        @if($event->image)
                            <div class="aspect-video bg-gray-100 overflow-hidden">
                                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                            </div>
                        @else
                            <div class="aspect-video bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                                <span class="text-gray-400 text-5xl">📸</span>
                            </div>
                        @endif
                        
                        <div class="p-5">
                            <div class="text-sm text-gray-500 mb-2">
                                {{ \Carbon\Carbon::parse($event->event_date)->format('d F Y') }}
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">
                                {{ $event->title }}
                            </h3>
                            <p class="text-sm text-gray-600 line-clamp-2 mb-4">
                                {{ $event->description }}
                            </p>
                            <a href="{{ route('events.show', $event->slug) }}" class="text-emerald-600 hover:text-emerald-700 font-semibold text-sm inline-flex items-center gap-1">
                                <span>Lihat Dokumentasi</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-16 md:py-24 bg-gradient-to-br from-emerald-600 to-teal-700 text-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ingin Berpartisipasi?</h2>
            <p class="text-xl text-emerald-50 mb-8">
                Bergabunglah dengan kami untuk memajukan pendidikan STEM di pesantren Indonesia
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('volunteer.index') }}" class="bg-white text-emerald-600 hover:bg-emerald-50 font-semibold px-8 py-4 rounded-xl transition-colors inline-flex items-center justify-center gap-2">
                    <span>Daftar Sebagai Relawan</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="{{ route('contact.index') }}" class="bg-emerald-500 hover:bg-emerald-400 text-white font-semibold px-8 py-4 rounded-xl transition-colors inline-flex items-center justify-center gap-2 border-2 border-white/20">
                    <span>Hubungi Kami</span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
