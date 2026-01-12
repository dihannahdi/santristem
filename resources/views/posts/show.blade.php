<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - santriSTEM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <x-navbar />

    <article class="container mx-auto px-4 py-16">
        <div class="max-w-3xl mx-auto">
            <!-- Breadcrumb -->
            <nav class="mb-8">
                <ol class="flex items-center space-x-2 text-sm text-gray-600">
                    <li><a href="/" class="hover:text-blue-600">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li><a href="{{ route('posts.index') }}" class="hover:text-blue-600">News</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-gray-900 font-medium">{{ Str::limit($post->title, 50) }}</li>
                </ol>
            </nav>

            <!-- Article Header -->
            <header class="mb-8">
                <div class="flex items-center gap-2 text-sm text-gray-600 mb-4">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-semibold uppercase">
                        {{ $post->category }}
                    </span>
                    <span>•</span>
                    <time datetime="{{ $post->published_at }}">
                        {{ $post->published_at->format('F j, Y') }}
                    </time>
                </div>
                
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 leading-tight">
                    {{ $post->title }}
                </h1>
                
                @if($post->excerpt)
                    <p class="text-xl text-gray-600 leading-relaxed">{{ $post->excerpt }}</p>
                @endif
            </header>

            <!-- Article Content -->
            <div class="bg-white rounded-lg shadow-md p-8 md:p-12">
                <div class="prose prose-lg max-w-none">
                    {!! nl2br(e($post->content)) !!}
                </div>
            </div>

            <!-- Back Link -->
            <div class="mt-12">
                <a href="{{ route('posts.index') }}" 
                   class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                    Back to News
                </a>
            </div>
        </div>
    </article>

    <x-footer />
</body>
</html>
