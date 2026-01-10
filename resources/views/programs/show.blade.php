@extends('layouts.app')

@section('title', $program->title . ' - santriSTEM')

@section('content')
<x-hero>
    <x-slot:badge>{{ $program->target_audience }}</x-slot:badge>
    <x-slot:title>
        {{ $program->title }}
    </x-slot:title>
    <x-slot:subtitle>
        {{ $program->description }}
    </x-slot:subtitle>
</x-hero>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Program Details -->
            <div class="bg-white rounded-2xl shadow-lg p-8 mb-8" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Detail Program</h2>
                <div class="prose prose-lg max-w-none text-gray-700">
                    {!! nl2br(e($program->long_description)) !!}
                </div>
            </div>

            <!-- Upcoming Events -->
            @if($program->events->where('status', 'upcoming')->count() > 0)
                <div class="bg-white rounded-2xl shadow-lg p-8 mb-8" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Kegiatan Mendatang</h2>
                    <div class="space-y-4">
                        @foreach($program->events->where('status', 'upcoming') as $event)
                            <div class="border border-gray-200 rounded-xl p-6 hover:border-green-500 hover:shadow-md transition-all">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $event->title }}</h3>
                                        <p class="text-gray-600 mb-4">{{ $event->description }}</p>
                                        <div class="flex flex-wrap gap-4 text-sm text-gray-600">
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                {{ \Carbon\Carbon::parse($event->event_date)->format('d F Y, H:i') }}
                                            </div>
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                </svg>
                                                {{ $event->location }}
                                            </div>
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                                Kuota: {{ $event->max_participants }} peserta
                                            </div>
                                        </div>
                                    </div>
                                    <x-cta-button href="{{ route('events.show', $event->slug) }}" variant="primary" size="sm" :arrow="true">
                                        Daftar
                                    </x-cta-button>
                                </div>
                                @if($event->registration_deadline)
                                    <div class="bg-amber-50 border border-amber-200 rounded-lg px-4 py-2 text-sm text-amber-800">
                                        <strong>Deadline Pendaftaran:</strong> {{ \Carbon\Carbon::parse($event->registration_deadline)->format('d F Y') }}
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Past Events -->
            @if($program->events->where('status', 'completed')->count() > 0)
                <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Kegiatan Terdahulu</h2>
                    <div class="space-y-3">
                        @foreach($program->events->where('status', 'completed')->take(5) as $event)
                            <div class="flex items-center justify-between py-3 border-b border-gray-100 last:border-0">
                                <div>
                                    <h4 class="font-semibold text-gray-900">{{ $event->title }}</h4>
                                    <p class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($event->event_date)->format('d F Y') }}</p>
                                </div>
                                <a href="{{ route('events.show', $event->slug) }}" class="text-green-600 hover:text-green-700 text-sm font-semibold">
                                    Lihat Detail →
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-green-600 to-blue-600 text-white">
    <div class="container mx-auto px-4 text-center" data-aos="zoom-in">
        <h2 class="text-3xl font-bold mb-6">
            Ingin Berpartisipasi?
        </h2>
        <p class="text-xl text-green-50 mb-10 max-w-2xl mx-auto">
            Bergabunglah dengan program kami dan jadilah bagian dari perubahan pendidikan STEM di pesantren.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <x-cta-button href="{{ route('events.index') }}" variant="outline" size="lg" :arrow="true">
                Lihat Semua Kegiatan
            </x-cta-button>
            <x-cta-button href="{{ route('contact.index') }}" variant="outline" size="lg">
                Hubungi Kami
            </x-cta-button>
        </div>
    </div>
</section>
@endsection
