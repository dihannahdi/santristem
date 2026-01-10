@extends('layouts.app')

@section('title', 'Daftar Sekolah Mitra - santriSTEM')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-700 text-white py-20 md:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
                <span class="text-sm font-semibold">🤝 Kemitraan Strategis</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Daftar Sekolah Mitra</h1>
            <p class="text-xl md:text-2xl text-emerald-50 max-w-3xl mx-auto">
                Bergabunglah dengan jaringan pesantren mitra untuk meningkatkan kualitas pendidikan STEM
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

<!-- Benefits Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Manfaat Menjadi Sekolah Mitra</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Program kemitraan yang memberikan nilai tambah bagi pesantren Anda
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-6 border border-emerald-100">
                    <div class="bg-emerald-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Pelatihan Guru</h3>
                    <p class="text-sm text-gray-700">Workshop rutin untuk meningkatkan kompetensi guru dalam mengajar STEM</p>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100">
                    <div class="bg-blue-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Modul Pembelajaran</h3>
                    <p class="text-sm text-gray-700">Akses gratis ke modul dan bahan ajar STEM yang disesuaikan dengan konteks pesantren</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-100">
                    <div class="bg-purple-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Pendampingan</h3>
                    <p class="text-sm text-gray-700">Relawan mahasiswa yang siap membantu implementasi program di sekolah</p>
                </div>

                <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-6 border border-amber-100">
                    <div class="bg-amber-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Jaringan Nasional</h3>
                    <p class="text-sm text-gray-700">Bergabung dengan komunitas pesantren mitra se-Indonesia</p>
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
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">Formulir Pendaftaran Mitra</h2>
                    <p class="text-gray-600">Isi data sekolah/pesantren Anda dengan lengkap dan benar</p>
                </div>

                <form action="{{ route('partner.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- School Name -->
                    <div>
                        <label for="school_name" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama Sekolah/Pesantren <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="school_name" 
                            name="school_name" 
                            value="{{ old('school_name') }}"
                            placeholder="Contoh: MA Al-Hikmah Yogyakarta"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent @error('school_name') border-red-500 @enderror"
                            required
                        >
                        @error('school_name')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Address -->
                    <div>
                        <label for="address" class="block text-sm font-semibold text-gray-700 mb-2">
                            Alamat Lengkap <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="address" 
                            name="address" 
                            rows="3"
                            placeholder="Jalan, desa/kelurahan, kecamatan, kabupaten/kota, provinsi"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent @error('address') border-red-500 @enderror"
                            required
                        >{{ old('address') }}</textarea>
                        @error('address')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Contact Person -->
                    <div>
                        <label for="contact_person" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama Penanggung Jawab <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="contact_person" 
                            name="contact_person" 
                            value="{{ old('contact_person') }}"
                            placeholder="Kepala Sekolah atau koordinator"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent @error('contact_person') border-red-500 @enderror"
                            required
                        >
                        @error('contact_person')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nomor Telepon/WhatsApp <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            value="{{ old('phone') }}"
                            placeholder="08xx-xxxx-xxxx"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent @error('phone') border-red-500 @enderror"
                            required
                        >
                        @error('phone')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                            Email Sekolah <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            placeholder="email@sekolah.sch.id"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent @error('email') border-red-500 @enderror"
                            required
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- School Type -->
                    <div>
                        <label for="school_type" class="block text-sm font-semibold text-gray-700 mb-2">
                            Jenis Sekolah <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="school_type" 
                            name="school_type" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent @error('school_type') border-red-500 @enderror"
                            required
                        >
                            <option value="">Pilih Jenis Sekolah</option>
                            <option value="MA" {{ old('school_type') == 'MA' ? 'selected' : '' }}>Madrasah Aliyah (MA)</option>
                            <option value="MTs" {{ old('school_type') == 'MTs' ? 'selected' : '' }}>Madrasah Tsanawiyah (MTs)</option>
                            <option value="Pondok Pesantren" {{ old('school_type') == 'Pondok Pesantren' ? 'selected' : '' }}>Pondok Pesantren</option>
                            <option value="Other" {{ old('school_type') == 'Other' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        @error('school_type')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Student Count -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="student_count" class="block text-sm font-semibold text-gray-700 mb-2">
                                Jumlah Santri/Siswa <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="number" 
                                id="student_count" 
                                name="student_count" 
                                value="{{ old('student_count') }}"
                                min="1"
                                placeholder="Contoh: 300"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent @error('student_count') border-red-500 @enderror"
                                required
                            >
                            @error('student_count')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Teacher Count -->
                        <div>
                            <label for="teacher_count" class="block text-sm font-semibold text-gray-700 mb-2">
                                Jumlah Guru <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="number" 
                                id="teacher_count" 
                                name="teacher_count" 
                                value="{{ old('teacher_count') }}"
                                min="1"
                                placeholder="Contoh: 25"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent @error('teacher_count') border-red-500 @enderror"
                                required
                            >
                            @error('teacher_count')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Programs Interest -->
                    <div>
                        <label for="programs_interest" class="block text-sm font-semibold text-gray-700 mb-2">
                            Program yang Diminati <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="programs_interest" 
                            name="programs_interest" 
                            rows="4"
                            placeholder="Sebutkan program yang ingin Anda ikuti (contoh: Workshop Numerasi, Pelatihan Guru STEM, Pendampingan Pembelajaran)"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent @error('programs_interest') border-red-500 @enderror"
                            required
                        >{{ old('programs_interest') }}</textarea>
                        @error('programs_interest')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Message (Optional) -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                            Pesan Tambahan <span class="text-gray-400">(Opsional)</span>
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="4"
                            placeholder="Sampaikan harapan, tantangan, atau informasi tambahan tentang sekolah Anda"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent @error('message') border-red-500 @enderror"
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button 
                            type="submit" 
                            class="w-full bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold py-4 px-6 rounded-xl transition-all shadow-lg hover:shadow-xl"
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
            <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 rounded-r-lg mb-8">
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-emerald-500 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div>
                        <h3 class="text-emerald-900 font-semibold mb-2">Proses Selanjutnya</h3>
                        <ul class="text-emerald-800 space-y-1 text-sm">
                            <li>• Tim kami akan meninjau pendaftaran Anda dalam 3-5 hari kerja</li>
                            <li>• Kami akan menghubungi Anda untuk jadwal kunjungan atau meeting online</li>
                            <li>• Diskusi tentang program dan kebutuhan spesifik sekolah</li>
                            <li>• Penandatanganan MoU kemitraan</li>
                            <li>• Mulai implementasi program di sekolah Anda</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="flex items-start">
                        <div class="bg-blue-100 rounded-full p-2 mr-3">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                            <p class="text-sm text-gray-600">santristem@ugm.ac.id</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl p-6">
                    <div class="flex items-start">
                        <div class="bg-emerald-100 rounded-full p-2 mr-3">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">WhatsApp</h4>
                            <p class="text-sm text-gray-600">+62 812-3456-7890</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-br from-emerald-600 to-teal-700 rounded-3xl p-8 md:p-12 shadow-2xl text-white text-center">
                <div class="text-5xl mb-6">📚</div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Punya Pertanyaan?</h2>
                <p class="text-xl text-emerald-50 mb-8 max-w-2xl mx-auto">
                    Tim kami siap menjawab pertanyaan Anda tentang program kemitraan
                </p>
                <a href="{{ route('contact.index') }}" class="bg-white text-emerald-600 hover:bg-emerald-50 font-semibold px-8 py-4 rounded-xl transition-colors inline-flex items-center justify-center gap-2 group">
                    <span>Hubungi Kami</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
