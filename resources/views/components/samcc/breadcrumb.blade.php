@props([
    'items' => [] // Array of ['label' => '', 'url' => '']
])

<nav class="flex mb-8" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-2 md:space-x-3 text-sm">
        <li class="inline-flex items-center">
            <a href="{{ route('home') }}" class="inline-flex items-center text-neutral-500 hover:text-primary-600 transition-colors">
                <i data-lucide="home" class="w-4 h-4 mr-2"></i>
                Home
            </a>
        </li>
        @foreach($items as $item)
            <li>
                <div class="flex items-center">
                    <i data-lucide="chevron-right" class="w-5 h-5 text-neutral-300"></i>
                    @if(!$loop->last)
                        <a href="{{ $item['url'] }}" class="ml-1 md:ml-2 text-neutral-500 hover:text-primary-600 transition-colors">{{ $item['label'] }}</a>
                    @else
                        <span class="ml-1 md:ml-2 text-neutral-900 font-bold" aria-current="page">{{ $item['label'] }}</span>
                    @endif
                </div>
            </li>
        @endforeach
    </ol>
</nav>
