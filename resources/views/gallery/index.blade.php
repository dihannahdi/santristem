@extends('layouts.app')

@section('title', 'Galeri - santriSTEM')

@section('content')
<x-hero>
    <x-slot:title>
        Galeri <span class="text-amber-300">Dokumentasi</span>
    </x-slot:title>
    <x-slot:subtitle>
        Dokumentasi Kegiatan santriSTEM
    </x-slot:subtitle>
    <x-slot:description>
        Momen-momen berharga dalam setiap program dan kegiatan kami bersama guru dan santri pesantren.
    </x-slot:description>
</x-hero>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Filter -->
        <div class="flex justify-center mb-12" x-data="{ activeFilter: 'all' }">
            <div class="inline-flex bg-white rounded-lg shadow-md p-2 space-x-2">
                <button 
                    @click="activeFilter = 'all'" 
                    :class="activeFilter === 'all' ? 'bg-green-600 text-white' : 'text-gray-700 hover:bg-gray-100'"
                    class="px-6 py-2 rounded-lg font-semibold transition-all"
                    x-on:click="
                        document.querySelectorAll('[data-category]').forEach(el => el.style.display = 'block');
                    "
                >
                    Semua
                </button>
                <button 
                    @click="activeFilter = 'event'" 
                    :class="activeFilter === 'event' ? 'bg-green-600 text-white' : 'text-gray-700 hover:bg-gray-100'"
                    class="px-6 py-2 rounded-lg font-semibold transition-all"
                    x-on:click="
                        document.querySelectorAll('[data-category]').forEach(el => {
                            el.style.display = el.dataset.category === 'event' ? 'block' : 'none';
                        });
                    "
                >
                    Kegiatan
                </button>
                <button 
                    @click="activeFilter = 'training'" 
                    :class="activeFilter === 'training' ? 'bg-green-600 text-white' : 'text-gray-700 hover:bg-gray-100'"
                    class="px-6 py-2 rounded-lg font-semibold transition-all"
                    x-on:click="
                        document.querySelectorAll('[data-category]').forEach(el => {
                            el.style.display = el.dataset.category === 'training' ? 'block' : 'none';
                        });
                    "
                >
                    Pelatihan
                </button>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6" x-data="{ 
            lightboxOpen: false, 
            lightboxImage: '', 
            lightboxTitle: '',
            openLightbox(image, title) {
                this.lightboxImage = image;
                this.lightboxTitle = title;
                this.lightboxOpen = true;
                document.body.style.overflow = 'hidden';
            },
            closeLightbox() {
                this.lightboxOpen = false;
                document.body.style.overflow = 'auto';
            }
        }">
            @foreach($photos as $photo)
                <div 
                    class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-2xl transition-all duration-300 cursor-pointer"
                    data-category="{{ $photo->category }}"
                    data-aos="fade-up"
                    data-aos-delay="{{ ($loop->index % 12) * 50 }}"
                    @click="openLightbox('{{ asset($photo->image_path) }}', '{{ $photo->title }}')"
                >
                    <x-optimized-image 
                        :src="$photo->image_path" 
                        :alt="$photo->title"
                        class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                            <h3 class="font-bold text-sm mb-1">{{ $photo->title }}</h3>
                            @if($photo->description)
                                <p class="text-xs opacity-90">{{ Str::limit($photo->description, 50) }}</p>
                            @endif
                        </div>
                        <div class="absolute top-4 right-4">
                            <div class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    @if($photo->is_featured)
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-3 py-1 bg-amber-500 text-white text-xs font-bold rounded-full">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                Unggulan
                            </span>
                        </div>
                    @endif
                </div>
            @endforeach

            <!-- Lightbox -->
            <div 
                x-show="lightboxOpen"
                x-transition
                @click="closeLightbox()"
                class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 p-4"
                style="display: none;"
            >
                <div class="relative max-w-6xl max-h-full" @click.stop>
                    <button 
                        @click="closeLightbox()"
                        class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors"
                    >
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <img 
                        :src="lightboxImage" 
                        :alt="lightboxTitle"
                        class="max-w-full max-h-[80vh] object-contain rounded-lg"
                    >
                    <div class="text-center mt-4 text-white">
                        <p class="text-lg font-semibold" x-text="lightboxTitle"></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        @if($photos->hasPages())
            <div class="mt-12 flex justify-center">
                {{ $photos->links() }}
            </div>
        @endif
    </div>
</section>
@endsection
