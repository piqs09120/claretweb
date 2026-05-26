<div x-data="{ showGrid: false }" class="relative">
    {{-- Floating Toggle Button --}}
    <button @click="showGrid = !showGrid"
        class="fixed bottom-6 left-6 z-[9999] p-3 bg-neutral-900/80 text-white rounded-full shadow-2xl hover:bg-neutral-900 transition-all border border-white/10 group"
        title="Toggle Design Grid (12-Column)">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:rotate-90 transition-transform duration-300"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
        </svg>
    </button>

    {{-- 12-Column Grid Overlay --}}
    <div x-show="showGrid" x-transition:enter="transition opacity-0 duration-300" x-transition:enter-end="opacity-100"
        x-transition:leave="transition opacity-100 duration-200" x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[9998] pointer-events-none" style="display: none;">

        <div class="max-w-7xl mx-auto h-full px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4 h-full">
                @for ($i = 0; $i < 12; $i++)
                    <div
                        class="h-full bg-red-500/10 border-x border-red-500/20 {{ $i >= 4 ? 'hidden md:block' : '' }} {{ $i >= 8 ? 'md:hidden lg:block' : '' }}">
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>