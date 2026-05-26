@props(['items' => []])

<nav class="flex items-center gap-2 mb-6 sm:mb-12 overflow-x-auto whitespace-nowrap hide-scrollbar py-4 border-b border-neutral-100" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full flex items-center">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-accent dark:text-gray-400 dark:hover:text-white transition-colors duration-300">
                    <i data-lucide="home" class="w-3 h-3 me-2.5"></i>
                    Home
                </a>
            </li>
            @foreach($items as $item)
                <li{{ $loop->last && !isset($item['url']) ? ' aria-current="page"' : '' }}>
                    <div class="flex items-center">
                        <i data-lucide="chevron-right" class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180 flex-shrink-0"></i>
                        @if(isset($item['url']) && !$loop->last)
                            <a href="{{ $item['url'] }}" class="ms-1 text-sm font-medium text-gray-700 hover:text-accent md:ms-2 dark:text-gray-400 dark:hover:text-white transition-colors duration-300">{{ $item['label'] }}</a>
                        @else
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{ $item['label'] }}</span>
                        @endif
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</nav>

<style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>
