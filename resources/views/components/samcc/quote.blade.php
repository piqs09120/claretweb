@props([
    'quote',
    'attribution' => '',
])

<section class="bg-cream py-20 px-6 relative overflow-hidden">
    {{-- Decorative Background Mark --}}
    <div class="absolute -top-10 -left-10 text-primary-100 text-[20rem] font-serif leading-none select-none pointer-events-none opacity-50">
        &ldquo;
    </div>

    <div class="container-narrow relative z-10 text-center">
        <blockquote class="space-y-8">
            <p class="font-heading text-2xl md:text-3xl lg:text-4xl italic text-neutral-800 leading-relaxed font-medium">
                &ldquo;{{ $quote }}&rdquo;
            </p>
            @if($attribution)
                <footer class="flex flex-col items-center">
                    <div class="w-12 h-1 bg-primary-600 rounded-full mb-4"></div>
                    <cite class="not-italic font-bold text-neutral-900 uppercase tracking-widest text-sm">
                        {{ $attribution }}
                    </cite>
                </footer>
            @endif
        </blockquote>
    </div>
</section>
