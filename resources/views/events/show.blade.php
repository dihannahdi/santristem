@extends('layouts.app')

@section('title', $event->title . ' - santriSTEM')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-emerald-600 via-emerald-700 to-teal-800 text-white py-16 md:py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto">
            <!-- Breadcrumb -->
            <div class="mb-6">
                <nav class="flex items-center gap-2 text-sm text-emerald-100">
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
                    <span>/</span>
                    <a href="{{ route('events.index') }}" class="hover:text-white transition-colors">Kegiatan</a>
                    <span>/</span>
                    <span class="text-white">{{ $event->title }}</span>
                </nav>
            </div>

            <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
                <span class="text-sm font-semibold flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ \Carbon\Carbon::parse($event->event_date)->format('d F Y') }}
                </span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $event->title }}</h1>
            <p class="text-xl text-emerald-50">{{ Str::limit($event->description, 150) }}</p>
        </div>
    </div>
</section>

<!-- Event Details & Registration -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Flash Messages -->
            @if(session('success'))
                <div class="mb-8 bg-emerald-50 border-l-4 border-emerald-500 rounded-lg p-6" x-data="{ show: true }" x-show="show" x-transition>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex-1">
                            <h3 class="font-semibold text-emerald-900 mb-1">Berhasil!</h3>
                            <p class="text-emerald-700">{{ session('success') }}</p>
                        </div>
                        <button @click="show = false" class="text-emerald-400 hover:text-emerald-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-8 bg-red-50 border-l-4 border-red-500 rounded-lg p-6" x-data="{ show: true }" x-show="show" x-transition>
                    <div class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-red-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex-1">
                            <h3 class="font-semibold text-red-900 mb-1">Gagal!</h3>
                            <p class="text-red-700">{{ session('error') }}</p>
                        </div>
                        <button @click="show = false" class="text-red-400 hover:text-red-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endif

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    @if($event->image)
                        <div class="rounded-2xl overflow-hidden mb-8">
                            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-auto">
                        </div>
                    @endif

                    <div class="prose prose-lg max-w-none">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Tentang Kegiatan</h2>
                        <div class="text-gray-700 leading-relaxed whitespace-pre-line">{{ $event->description }}</div>
                    </div>

                    <!-- Event Meta -->
                    <div class="mt-8 grid sm:grid-cols-2 gap-4">
                        <div class="bg-emerald-50 rounded-xl p-6 border border-emerald-100">
                            <div class="flex items-start gap-4">
                                <div class="bg-emerald-100 rounded-lg p-3">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Tanggal</h3>
                                    <p class="text-gray-600">{{ \Carbon\Carbon::parse($event->event_date)->format('d F Y') }}</p>
                                </div>
                            </div>
                        </div>

                        @if($event->location)
                            <div class="bg-blue-50 rounded-xl p-6 border border-blue-100">
                                <div class="flex items-start gap-4">
                                    <div class="bg-blue-100 rounded-lg p-3">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-1">Lokasi</h3>
                                        <p class="text-gray-600">{{ $event->location }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($event->max_participants)
                            <div class="bg-purple-50 rounded-xl p-6 border border-purple-100">
                                <div class="flex items-start gap-4">
                                    <div class="bg-purple-100 rounded-lg p-3">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-1">Kuota Peserta</h3>
                                        <p class="text-gray-600">
                                            @if($spotsLeft !== null)
                                                {{ $spotsLeft }} tempat tersisa dari {{ $event->max_participants }}
                                            @else
                                                Tidak terbatas
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($event->registration_deadline)
                            <div class="bg-amber-50 rounded-xl p-6 border border-amber-100">
                                <div class="flex items-start gap-4">
                                    <div class="bg-amber-100 rounded-lg p-3">
                                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-1">Batas Pendaftaran</h3>
                                        <p class="text-gray-600">{{ \Carbon\Carbon::parse($event->registration_deadline)->format('d F Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Registration Sidebar -->
                <div class="lg:col-span-1">
                    <div class="sticky top-24">
                        @if($canRegister)
                            <!-- Registration Form -->
                            <div class="bg-white rounded-2xl shadow-xl border border-gray-200 p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-6">Daftar Sekarang</h3>
                                
                                <form action="{{ route('events.register', $event->slug) }}" method="POST" class="space-y-4">
                                    @csrf
                                    
                                    <div>
                                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap *</label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors @error('name') border-red-500 @enderror">
                                        @error('name')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors @error('email') border-red-500 @enderror">
                                        @error('email')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Nomor Telepon *</label>
                                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors @error('phone') border-red-500 @enderror">
                                        @error('phone')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="institution" class="block text-sm font-semibold text-gray-700 mb-2">Institusi/Sekolah *</label>
                                        <input type="text" id="institution" name="institution" value="{{ old('institution') }}" required placeholder="Nama pesantren, sekolah, atau universitas" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors @error('institution') border-red-500 @enderror">
                                        @error('institution')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="role" class="block text-sm font-semibold text-gray-700 mb-2">Peran *</label>
                                        <select id="role" name="role" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors @error('role') border-red-500 @enderror">
                                            <option value="">Pilih peran Anda</option>
                                            <option value="teacher" {{ old('role') == 'teacher' ? 'selected' : '' }}>Guru/Ustadz</option>
                                            <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>Santri/Siswa</option>
                                            <option value="volunteer" {{ old('role') == 'volunteer' ? 'selected' : '' }}>Relawan/Umum</option>
                                        </select>
                                        @error('role')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label for="notes" class="block text-sm font-semibold text-gray-700 mb-2">Catatan (Opsional)</label>
                                        <textarea id="notes" name="notes" rows="3" placeholder="Pertanyaan atau keterangan tambahan" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors @error('notes') border-red-500 @enderror">{{ old('notes') }}</textarea>
                                        @error('notes')
                                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-4 rounded-xl transition-colors flex items-center justify-center gap-2 group">
                                        <span>Daftar Sekarang</span>
                                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </button>

                                    <p class="text-xs text-gray-500 text-center">
                                        * Dengan mendaftar, Anda menyetujui untuk menerima informasi terkait kegiatan ini
                                    </p>
                                </form>
                            </div>
                        @else
                            <!-- Registration Closed -->
                            <div class="bg-gray-50 rounded-2xl shadow-lg border border-gray-200 p-8 text-center">
                                <div class="text-6xl mb-4">🔒</div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">Pendaftaran Ditutup</h3>
                                <p class="text-gray-600 mb-6">
                                    @if($event->status === 'completed')
                                        Kegiatan ini telah selesai dilaksanakan.
                                    @elseif($event->event_date <= now())
                                        Kegiatan ini sudah berlangsung.
                                    @elseif($event->registration_deadline && $event->registration_deadline <= now())
                                        Batas waktu pendaftaran telah berakhir.
                                    @else
                                        Pendaftaran untuk kegiatan ini sudah ditutup.
                                    @endif
                                </p>
                                <a href="{{ route('events.index') }}" class="inline-flex items-center gap-2 text-emerald-600 hover:text-emerald-700 font-semibold">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                    </svg>
                                    <span>Lihat Kegiatan Lainnya</span>
                                </a>
                            </div>
                        @endif

                        <!-- Contact Info -->
                        <div class="mt-6 bg-emerald-50 rounded-xl p-6 border border-emerald-100">
                            <h4 class="font-semibold text-gray-900 mb-3">Butuh Bantuan?</h4>
                            <p class="text-sm text-gray-600 mb-4">Hubungi kami jika Anda memiliki pertanyaan</p>
                            <a href="{{ route('contact.index') }}" class="text-emerald-600 hover:text-emerald-700 font-semibold text-sm inline-flex items-center gap-1">
                                <span>Hubungi Tim santriSTEM</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Events (Optional) -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 text-center">Kegiatan Lainnya</h2>
            <div class="text-center">
                <a href="{{ route('events.index') }}" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-xl transition-colors">
                    <span>Lihat Semua Kegiatan</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
