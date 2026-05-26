@props([
    'image' => '',
    'title' => '',
    'body' => '',
    'link' => '',
    'linkText' => 'Learn More',
    'variant' => 'default', // default, elevated, bordered, horizontal
])

<div @class([
    'card group flex flex-col',
    'hover:-translate-y-1' => $variant === 'elevated',
    'border border-neutral-200 shadow-none' => $variant === 'bordered',
    'md:flex-row' => $variant === 'horizontal',
])>
    @if($image)
        <div @class([
            'relative overflow-hidden shrink-0',
            'aspect-video' => $variant !== 'horizontal',
            'md:w-1/2 aspect-video md:aspect-auto' => $variant === 'horizontal',
        ])>
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-neutral-900/10 group-hover:bg-transparent transition-colors"></div>
        </div>
    @endif

    <div class="p-6 flex flex-col flex-1">
        <h3 class="text-xl font-bold text-neutral-800 mb-3 group-hover:text-primary-600 transition-colors">{{ $title }}</h3>
        <p class="text-neutral-600 leading-relaxed mb-6 flex-1">{{ $body }}</p>
        
        @if($link)
                <a href="{{ $link }}" class="inline-flex items-center text-primary-600 font-bold text-sm tracking-wide uppercase group/link">
                {{ $linkText }}
                <i data-lucide="arrow-right" class="w-4 h-4 ml-2 transition-transform group-hover/link:translate-x-1"></i>
            </a>
        @endif
    </div>
</div>
