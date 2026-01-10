<div class="relative bg-gradient-to-br from-green-700 via-green-600 to-blue-600 text-white overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="container mx-auto px-4 py-20 md:py-32 relative">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            @if(isset($badge))
                <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold mb-6">
                    {{ $badge }}
                </div>
            @endif
            
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                {{ $title }}
            </h1>
            
            @if(isset($subtitle))
                <p class="text-xl md:text-2xl mb-8 text-green-50">
                    {{ $subtitle }}
                </p>
            @endif
            
            @if(isset($description))
                <p class="text-lg mb-10 text-white/90 max-w-2xl mx-auto">
                    {{ $description }}
                </p>
            @endif
            
            @if(isset($cta))
                <div class="flex flex-wrap gap-4 justify-center relative z-10">
                    {{ $cta }}
                </div>
            @endif
        </div>
    </div>

    <!-- Wave Bottom -->
    <div class="absolute bottom-0 left-0 right-0 pointer-events-none">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#F9FAFB"/>
        </svg>
    </div>
</div>
