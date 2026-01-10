@props(['src', 'alt', 'class' => '', 'loading' => 'lazy'])

@php
    // All images are now WebP only
    $webpPath = preg_replace('/\.(jpe?g|png|gif)$/i', '.webp', $src);
@endphp

<img 
    src="{{ asset($webpPath) }}" 
    alt="{{ $alt }}"
    class="{{ $class }}"
    loading="{{ $loading }}"
    decoding="async"
>
