<div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group" data-aos="fade-up">
    @if(isset($image))
        <div class="relative h-48 overflow-hidden">
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
        </div>
    @endif
    
    <div class="p-6">
        @if(isset($badge))
            <span class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full mb-3">
                {{ $badge }}
            </span>
        @endif
        
        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors">
            {{ $title }}
        </h3>
        
        @if(isset($description))
            <p class="text-gray-600 mb-4 line-clamp-3">
                {{ $description }}
            </p>
        @endif
        
        @if(isset($cta))
            <div class="mt-4">
                {{ $cta }}
            </div>
        @endif
    </div>
</div>
