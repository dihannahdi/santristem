<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Press Releases - santriSTEM</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <x-navbar />

    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">News & Press Releases</h1>
            <p class="text-gray-600 mb-12">Latest updates and announcements from santriSTEM</p>

            @if($posts->count() > 0)
                <div class="space-y-8">
                    @foreach($posts as $post)
                        <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-medium">
                                        {{ $post->category }}
                                    </span>
                                    <span>•</span>
                                    <time datetime="{{ $post->published_at }}">
                                        {{ $post->published_at->format('F j, Y') }}
                                    </time>
                                </div>
                                
                                <h2 class="text-2xl font-bold text-gray-900 mb-3">
                                    <a href="{{ route('posts.show', $post->slug) }}" class="hover:text-blue-600 transition-colors">
                                        {{ $post->title }}
                                    </a>
                                </h2>
                                
                                <p class="text-gray-600 mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                                
                                <a href="{{ route('posts.show', $post->slug) }}" 
                                   class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                                    Read more
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="bg-white rounded-lg shadow-md p-12 text-center">
                    <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">No posts yet</h3>
                    <p class="text-gray-600">Check back soon for news and updates!</p>
                </div>
            @endif
        </div>
    </div>

    <x-footer />
</body>
</html>
