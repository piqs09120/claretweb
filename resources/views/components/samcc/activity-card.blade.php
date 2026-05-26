@props([
    'title',
    'description',
    'image'
])

<div class="card group cursor-pointer border-l-4 border-transparent hover:border-primary-600 transition-all duration-300">
    @if($image)
        <div class="relative h-48 overflow-hidden">
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-primary-900/10 group-hover:bg-transparent transition-colors"></div>
        </div>
    @endif
    <div class="p-6">
        <h4 class="text-xl font-bold text-neutral-800 mb-2 group-hover:text-primary-600 transition-colors">{{ $title }}</h4>
        <p class="text-neutral-500 text-sm leading-relaxed line-clamp-2">{{ $description }}</p>
    </div>
</div>
