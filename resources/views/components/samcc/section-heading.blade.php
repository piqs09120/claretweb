@props([
    'title' => '',
    'subtitle' => '',
    'alignment' => 'left', // left, center
    'hasAccent' => true,
])

<div @class([
    'mb-12',
    'text-center mx-auto' => $alignment === 'center',
    'max-w-2xl' => $alignment === 'center',
])>
    <h2 class="text-3xl md:text-4xl font-bold font-heading text-neutral-800 mb-4">{{ $title }}</h2>
    
    @if($hasAccent)
        <div @class([
            'w-16 h-1.5 bg-primary-600 rounded-full mb-6',
            'mx-auto' => $alignment === 'center',
        ])></div>
    @endif

    @if($subtitle)
        <p class="text-lg text-neutral-500 leading-relaxed">{{ $subtitle }}</p>
    @endif
</div>
