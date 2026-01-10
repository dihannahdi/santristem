@extends('layouts.app')

@section('title', 'Program Kami - santriSTEM')

@section('content')
<x-hero>
    <x-slot:title>
        Program <span class="text-amber-300">santriSTEM</span>
    </x-slot:title>
    <x-slot:subtitle>
        Berbagai Program Pelatihan dan Pendampingan STEM untuk Pesantren
    </x-slot:subtitle>
    <x-slot:description>
        Kami menawarkan beragam program yang dirancang khusus untuk meningkatkan kemampuan STEM guru dan santri pesantren di DIY.
    </x-slot:description>
</x-hero>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8">
            @foreach($programs as $program)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group" data-aos="fade-up">
                    <div class="p-8">
                        <div class="flex items-start justify-between mb-4">
                            <span class="inline-block px-4 py-2 bg-green-100 text-green-700 text-sm font-semibold rounded-full">
                                {{ $program->target_audience }}
                            </span>
                            @if($program->is_active)
                                <span class="inline-flex items-center px-3 py-1 bg-green-500 text-white text-xs font-bold rounded-full">
                                    <span class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></span>
                                    Aktif
                                </span>
                            @endif
                        </div>
                        
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-600 transition-colors">
                            {{ $program->title }}
                        </h3>
                        
                        <p class="text-gray-600 mb-6 line-clamp-3">
                            {{ $program->description }}
                        </p>

                        @if($program->events->where('status', 'upcoming')->count() > 0)
                            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                                <div class="flex items-center text-blue-700 text-sm font-semibold mb-2">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Kegiatan Mendatang
                                </div>
                                @foreach($program->events->where('status', 'upcoming')->take(2) as $event)
                                    <div class="text-sm text-gray-700">
                                        • {{ $event->title }} - {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        
                        <x-cta-button href="{{ route('programs.show', $program->slug) }}" variant="primary" size="md" :arrow="true">
                            Pelajari Lebih Lanjut
                        </x-cta-button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-green-600 to-blue-600 text-white">
    <div class="container mx-auto px-4 text-center" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Tertarik dengan Program Kami?
        </h2>
        <p class="text-xl text-green-50 mb-10 max-w-2xl mx-auto">
            Hubungi kami untuk mendiskusikan bagaimana program kami dapat membantu pesantren Anda.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <x-cta-button href="{{ route('contact.index') }}" variant="outline" size="lg" :arrow="true">
                Hubungi Kami
            </x-cta-button>
            <x-cta-button href="{{ route('partner.index') }}" variant="outline" size="lg">
                Daftar Sebagai Mitra
            </x-cta-button>
        </div>
    </div>
</section>
@endsection
