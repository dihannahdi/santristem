@extends('layouts.app')

@section('title', 'Daftar Sebagai Relawan - santriSTEM')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 text-white py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
                <span class="text-sm font-semibold">🚀 Bergabunglah dengan Kami</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Daftar Sebagai Relawan</h1>
            <p class="text-xl md:text-2xl text-blue-50 max-w-3xl mx-auto">
                Menjadi bagian dari gerakan pemberdayaan pendidikan STEM di pesantren seluruh Indonesia
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

<!-- Success Message -->
@if(session('success'))
<div x-data="{ show: true }" x-show="show" class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8 mx-6">
    <div class="container mx-auto max-w-4xl flex justify-between items-start">
        <div class="flex items-start">
            <svg class="w-6 h-6 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div>
                <h3 class="text-emerald-800 font-semibold mb-1">Pendaftaran Berhasil!</h3>
                <p class="text-emerald-700">{{ session('success') }}</p>
            </div>
        </div>
        <button @click="show = false" class="text-emerald-600 hover:text-emerald-800 ml-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
@endif

<!-- Why Volunteer Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mengapa Menjadi Relawan?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Kontribusi Anda akan membawa perubahan nyata bagi pendidikan STEM di pesantren
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-6 border border-emerald-100">
                    <div class="bg-emerald-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Berbagi Ilmu</h3>
                    <p class="text-gray-700">Bagikan pengetahuan STEM Anda kepada santri dan guru di pesantren</p>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100">
                    <div class="bg-blue-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Bangun Jaringan</h3>
                    <p class="text-gray-700">Bertemu dengan mahasiswa, dosen, dan praktisi pendidikan dari berbagai latar belakang</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-100">
                    <div class="bg-purple-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Kembangkan Diri</h3>
                    <p class="text-gray-700">Asah kemampuan mengajar, komunikasi, dan kepemimpinan Anda</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Form -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">Formulir Pendaftaran</h2>
                    <p class="text-gray-600">Isi data diri Anda dengan lengkap dan benar</p>
                </div>

                <form action="{{ route('volunteer.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror"
                            required
                        >
                        @error('name')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror"
                            required
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nomor WhatsApp <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            value="{{ old('phone') }}"
                            placeholder="08xx-xxxx-xxxx"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('phone') border-red-500 @enderror"
                            required
                        >
                        @error('phone')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- University -->
                    <div>
                        <label for="university" class="block text-sm font-semibold text-gray-700 mb-2">
                            Universitas <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="university" 
                            name="university" 
                            value="{{ old('university') }}"
                            placeholder="Contoh: Universitas Gadjah Mada"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('university') border-red-500 @enderror"
                            required
                        >
                        @error('university')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Major -->
                    <div>
                        <label for="major" class="block text-sm font-semibold text-gray-700 mb-2">
                            Program Studi <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="major" 
                            name="major" 
                            value="{{ old('major') }}"
                            placeholder="Contoh: Matematika, Fisika, Kimia, dll"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('major') border-red-500 @enderror"
                            required
                        >
                        @error('major')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Semester -->
                    <div>
                        <label for="semester" class="block text-sm font-semibold text-gray-700 mb-2">
                            Semester Saat Ini <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="semester" 
                            name="semester" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('semester') border-red-500 @enderror"
                            required
                        >
                            <option value="">Pilih Semester</option>
                            @for($i = 1; $i <= 14; $i++)
                                <option value="{{ $i }}" {{ old('semester') == $i ? 'selected' : '' }}>
                                    Semester {{ $i }}
                                </option>
                            @endfor
                        </select>
                        @error('semester')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Pesantren Background -->
                    <div x-data="{ hasPesantren: '{{ old('pesantren_background', 'no') }}' }">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            Apakah Anda memiliki latar belakang pesantren? <span class="text-red-500">*</span>
                        </label>
                        <div class="flex gap-6">
                            <label class="flex items-center cursor-pointer">
                                <input 
                                    type="radio" 
                                    name="pesantren_background" 
                                    value="yes" 
                                    x-model="hasPesantren"
                                    class="w-4 h-4 text-blue-600 focus:ring-blue-500"
                                    {{ old('pesantren_background') == 'yes' ? 'checked' : '' }}
                                >
                                <span class="ml-2 text-gray-700">Ya</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input 
                                    type="radio" 
                                    name="pesantren_background" 
                                    value="no" 
                                    x-model="hasPesantren"
                                    class="w-4 h-4 text-blue-600 focus:ring-blue-500"
                                    {{ old('pesantren_background', 'no') == 'no' ? 'checked' : '' }}
                                >
                                <span class="ml-2 text-gray-700">Tidak</span>
                            </label>
                        </div>
                        @error('pesantren_background')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                        <!-- Pesantren Name (Conditional) -->
                        <div x-show="hasPesantren === 'yes'" x-cloak class="mt-4">
                            <label for="pesantren_name" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Pesantren
                            </label>
                            <input 
                                type="text" 
                                id="pesantren_name" 
                                name="pesantren_name" 
                                value="{{ old('pesantren_name') }}"
                                placeholder="Nama pesantren tempat Anda menempuh pendidikan"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('pesantren_name') border-red-500 @enderror"
                            >
                            @error('pesantren_name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Skills -->
                    <div>
                        <label for="skills" class="block text-sm font-semibold text-gray-700 mb-2">
                            Keahlian/Keterampilan <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="skills" 
                            name="skills" 
                            rows="4"
                            placeholder="Contoh: Mengajar matematika, public speaking, desain grafis, pemrograman, dll"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('skills') border-red-500 @enderror"
                            required
                        >{{ old('skills') }}</textarea>
                        @error('skills')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Motivation -->
                    <div>
                        <label for="motivation" class="block text-sm font-semibold text-gray-700 mb-2">
                            Motivasi Bergabung <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="motivation" 
                            name="motivation" 
                            rows="4"
                            placeholder="Ceritakan mengapa Anda ingin menjadi relawan santriSTEM"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('motivation') border-red-500 @enderror"
                            required
                        >{{ old('motivation') }}</textarea>
                        @error('motivation')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Availability -->
                    <div>
                        <label for="availability" class="block text-sm font-semibold text-gray-700 mb-2">
                            Ketersediaan Waktu <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="availability" 
                            name="availability" 
                            rows="3"
                            placeholder="Contoh: Setiap hari Sabtu, atau fleksibel sesuai jadwal kegiatan"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('availability') border-red-500 @enderror"
                            required
                        >{{ old('availability') }}</textarea>
                        @error('availability')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button 
                            type="submit" 
                            class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-4 px-6 rounded-xl transition-all shadow-lg hover:shadow-xl"
                        >
                            Kirim Pendaftaran
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg">
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-blue-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <h3 class="text-blue-900 font-semibold mb-2">Informasi Penting</h3>
                        <ul class="text-blue-800 space-y-1 text-sm">
                            <li>• Tim kami akan menghubungi Anda melalui email atau WhatsApp dalam 3-5 hari kerja</li>
                            <li>• Anda akan diundang untuk mengikuti sesi orientasi relawan</li>
                            <li>• Tidak ada biaya apapun untuk menjadi relawan santriSTEM</li>
                            <li>• Anda akan mendapatkan sertifikat setelah menyelesaikan program</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    [x-cloak] { display: none !important; }
</style>
@endpush
