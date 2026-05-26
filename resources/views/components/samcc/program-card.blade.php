@props([
    'name',
    'degreeType',
    'duration',
    'description',
    'slug'
])

<div class="card p-8 group hover:border-primary-600 border-2 border-transparent transition-all">
    <div class="flex items-start justify-between mb-6">
        <span class="inline-flex items-center px-3 py-1 bg-primary-50 text-primary-700 rounded-full text-xs font-bold uppercase tracking-wider">
            {{ $degreeType }}
        </span>
        <span class="flex items-center text-xs text-neutral-400 font-medium">
            <i data-lucide="clock" class="w-4 h-4 mr-1.5"></i>
            {{ $duration }}
        </span>
    </div>

    <h3 class="text-2xl font-bold text-neutral-800 mb-4 group-hover:text-primary-600 transition-colors">
        {{ $name }}
    </h3>
    
    <p class="text-neutral-500 mb-8 line-clamp-3">
        {{ $description }}
    </p>

    <a href="{{ route('academics.show', $slug) }}" class="inline-flex items-center text-primary-600 font-bold group-hover:underline">
        View Curriculum
        <i data-lucide="chevron-right" class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1"></i>
    </a>
</div>
