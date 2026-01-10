<div class="bg-white p-6 rounded-xl shadow-md" data-aos="fade-up">
    <div class="flex items-start space-x-4">
        @if(isset($photo))
            <img src="{{ $photo }}" alt="{{ $name }}" class="w-16 h-16 rounded-full object-cover flex-shrink-0">
        @else
            <div class="w-16 h-16 rounded-full bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center flex-shrink-0">
                <span class="text-2xl font-bold text-white">{{ substr($name, 0, 1) }}</span>
            </div>
        @endif
        
        <div class="flex-1">
            <div class="flex items-start justify-between mb-2">
                <div>
                    <h4 class="font-bold text-gray-900">{{ $name }}</h4>
                    <p class="text-sm text-gray-600">{{ $role }}</p>
                    @if(isset($school))
                        <p class="text-xs text-gray-500">{{ $school }}</p>
                    @endif
                </div>
                <div class="text-amber-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
            </div>
            <p class="text-gray-700 italic">"{{ $content }}"</p>
        </div>
    </div>
</div>
