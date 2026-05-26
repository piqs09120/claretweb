@props([
    'variant' => 'home', 
    'title' => '', 
    'subtitle' => '', 
    'ctaText' => '', 
    'ctaLink' => '', 
    'backgroundImage' => '',
])

@if($variant === 'home')
<section class="relative h-[80vh] min-h-[600px] flex items-center overflow-hidden">
    {{-- Background Image --}}
    @if($backgroundImage)
        <div class="absolute inset-0 z-0">
            <img src="{{ $backgroundImage }}" alt="{{ $title }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-neutral-900/40"></div>
        </div>
    @else
        <div class="absolute inset-0 bg-primary-900 z-0">
            <div class="absolute inset-0 bg-hero-gradient opacity-80"></div>
        </div>
    @endif

    <div class="container-xl relative z-10">
        <div class="max-w-3xl animate-fade-in">
            <span class="inline-block text-secondary-400 font-bold uppercase tracking-[0.2em] text-xs mb-4">Welcome to SAMCC</span>
            <h1 class="text-white text-5xl md:text-7xl font-bold mb-6 leading-tight">
                {{ $title }}
            </h1>
            <p class="text-white/90 text-lg md:text-xl mb-10 font-normal leading-relaxed max-w-2xl">
                {{ $subtitle }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                @if($ctaText)
                    <a href="{{ $ctaLink }}" class="btn-primary btn-lg shadow-lg shadow-primary-900/20">
                        {{ $ctaText }}
                    </a>
                @endif
                <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-md text-white border border-white/20 rounded font-semibold transition-all hover:bg-white/20">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>
@else
<section class="bg-primary-600 text-white pt-32 pb-16 md:pt-40 md:pb-24">
    <div class="container-xl">
        <div class="max-w-3xl">
            <h1 class="text-white text-4xl md:text-5xl font-bold mb-4">{{ $title }}</h1>
            @if($subtitle)
                <p class="text-primary-100 text-lg font-normal max-w-2xl">{{ $subtitle }}</p>
            @endif
        </div>
    </div>
</section>
@endif
