@php
    $variants = [
        'primary' => 'bg-gradient-to-r from-green-600 to-blue-600 hover:from-green-700 hover:to-blue-700 text-white shadow-lg hover:shadow-xl',
        'secondary' => 'bg-white text-green-700 border-2 border-green-600 hover:bg-green-50',
        'outline' => 'border-2 border-white text-white hover:bg-white hover:text-green-700',
    ];
    
    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-6 py-3 text-base',
        'lg' => 'px-8 py-4 text-lg',
    ];
    
    $variant = $variant ?? 'primary';
    $size = $size ?? 'md';
@endphp

<a 
    href="{{ $href }}" 
    class="inline-flex items-center justify-center rounded-lg font-semibold transition-all transform hover:scale-105 {{ $variants[$variant] }} {{ $sizes[$size] }} {{ $class ?? '' }}"
>
    @if(isset($icon))
        <span class="mr-2">{{ $icon }}</span>
    @endif
    {{ $slot }}
    @if(isset($arrow) && $arrow)
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
        </svg>
    @endif
</a>
