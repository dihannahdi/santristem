@extends('layouts.app')

@section('title', 'Tim Kami - santriSTEM')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-600 via-emerald-700 to-teal-800 text-white py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
                <span class="text-sm font-semibold">👥 Tim santriSTEM</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Tim Kami</h1>
            <p class="text-xl md:text-2xl text-emerald-50">
                Bertemu dengan orang-orang di balik program santriSTEM
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

<!-- Team Members -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Tim santriSTEM terdiri dari dosen, mahasiswa, dan relawan yang memiliki dedikasi tinggi untuk meningkatkan pendidikan STEM di pesantren
                </p>
            </div>

            <!-- Leader -->
            <div class="mb-16">
                <div class="max-w-4xl mx-auto bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 md:p-12 shadow-lg border border-emerald-100">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="flex-shrink-0">
                            <div class="w-48 h-48 bg-gradient-to-br from-emerald-600 to-teal-600 rounded-2xl flex items-center justify-center shadow-xl">
                                <span class="text-white text-6xl font-bold">{{ substr($team[0]['name'], 0, 1) }}</span>
                            </div>
                        </div>
                        <div class="flex-1 text-center md:text-left">
                            <div class="inline-block bg-emerald-600 text-white px-4 py-1 rounded-full text-sm font-semibold mb-3">
                                Founder & Project Lead
                            </div>
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">{{ $team[0]['name'] }}</h2>
                            <p class="text-lg text-emerald-700 font-semibold mb-4">{{ $team[0]['institution'] }}</p>
                            <p class="text-gray-700 leading-relaxed text-lg">
                                {{ $team[0]['bio'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Grid -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 text-center">Relawan Mahasiswa</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach(array_slice($team, 1) as $member)
                        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow border border-gray-100 overflow-hidden group">
                            <div class="aspect-square bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center group-hover:scale-105 transition-transform">
                                <span class="text-white text-6xl font-bold">{{ substr($member['name'], 0, 1) }}</span>
                            </div>
                            <div class="p-6">
                                <div class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-semibold mb-3">
                                    {{ $member['role'] }}
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $member['name'] }}</h3>
                                <p class="text-sm text-gray-600 mb-3">{{ $member['institution'] }}</p>
                                <p class="text-gray-700 text-sm leading-relaxed">
                                    {{ $member['bio'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Join Team CTA -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-br from-emerald-600 to-teal-700 rounded-3xl p-8 md:p-12 shadow-2xl text-white text-center">
                <div class="text-5xl mb-6">🚀</div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Bergabung dengan Tim Kami</h2>
                <p class="text-xl text-emerald-50 mb-8 max-w-2xl mx-auto">
                    Kami mencari mahasiswa yang passionate dan memiliki latar belakang pesantren untuk menjadi relawan santriSTEM
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('volunteer.index') }}" class="bg-white text-emerald-600 hover:bg-emerald-50 font-semibold px-8 py-4 rounded-xl transition-colors inline-flex items-center justify-center gap-2 group">
                        <span>Daftar Sebagai Relawan</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="{{ route('contact.index') }}" class="bg-transparent hover:bg-white/10 text-white font-semibold px-8 py-4 rounded-xl transition-colors inline-flex items-center justify-center gap-2 border-2 border-white/50">
                        <span>Hubungi Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values/Culture (Optional) -->
<section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Nilai-Nilai Tim Kami</h2>
                <p class="text-lg text-gray-600">Prinsip yang memandu kerja kami sehari-hari</p>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <div class="text-center p-6">
                    <div class="bg-emerald-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Ikhlas</h3>
                    <p class="text-sm text-gray-600">Bekerja dengan hati untuk kebaikan bersama</p>
                </div>

                <div class="text-center p-6">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Inovatif</h3>
                    <p class="text-sm text-gray-600">Mencari cara baru untuk mengatasi tantangan</p>
                </div>

                <div class="text-center p-6">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Kolaboratif</h3>
                    <p class="text-sm text-gray-600">Bekerja sama untuk hasil terbaik</p>
                </div>

                <div class="text-center p-6">
                    <div class="bg-amber-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Amanah</h3>
                    <p class="text-sm text-gray-600">Bertanggung jawab dan dapat dipercaya</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
