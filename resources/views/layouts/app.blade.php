<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data :class="{ 'dark': $store.darkMode.on }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="@yield('meta_description', 'St. Anthony Mary Claret College — Excellence in Catholic Education in Quezon City, Philippines.')">
    <meta property="og:title" content="@yield('title', 'SAMCC') | St. Anthony Mary Claret College">
    <meta property="og:description"
        content="@yield('meta_description', 'Official website of St. Anthony Mary Claret College, Quezon City.')">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:type" content="website">
    <title>@yield('title', 'SAMCC') | St. Anthony Mary Claret College</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logoweb2.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-primary text-textmain transition-colors duration-300 antialiased">

    {{-- Page Preloader --}}
    <div id="samcc-preloader"
        class="fixed inset-0 z-[9999] bg-primary flex flex-col items-center justify-center transition-opacity duration-700 ease-in-out">
        <div class="relative flex items-center justify-center">
            {{-- Pulsing background ring --}}
            <div class="absolute inline-flex h-20 w-20 rounded-full bg-accent/20 opacity-60 animate-ping"></div>
            {{-- Spinning border --}}
            <div class="absolute h-24 w-24 rounded-full border-[3px] border-transparent border-t-accent border-r-accent opacity-80 animate-spin"
                style="animation-duration: 1.5s;"></div>
        </div>
        <p class="mt-8 text-[11px] font-medium text-accent tracking-[0.3em] uppercase animate-pulse">Loading</p>
    </div>

    {{-- Navbar --}}
    <x-samcc.navbar />


    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <x-samcc.footer />

    {{-- Flash Messages --}}
    @if(session('success'))
        <div id="toast-simple" class="fixed bottom-6 right-6 z-50 flex items-center w-full max-w-sm p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 border border-gray-100 dark:border-gray-700 animate-slide-up" role="alert">
            <svg class="w-5 h-5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 18-7 3 7-18 7 18-7-3Zm0 0v-5"/>
            </svg>
            <div class="ms-2.5 text-sm font-medium border-s border-gray-200 dark:border-gray-700 ps-3.5">{{ session('success') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-simple" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                </svg>
            </button>
        </div>
        <script>setTimeout(() => { document.getElementById('toast-simple')?.remove(); }, 6000);</script>
    @endif

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // 1. Initial AOS Setup with zero offset for immediate triggering
        AOS.init({
            duration: 1000,
            once: false,      // Allow repeated animations
            mirror: true,     // Repeat when scrolling up
            offset: 0,        // trigger immediately
            anchorPlacement: 'top-bottom',
        });

        // 2. Initial Lucide Setup
        lucide.createIcons();

        // 3. Preloader & Visibility Control
        window.addEventListener('load', function () {
            const preloader = document.getElementById('samcc-preloader');
            if (preloader) {
                setTimeout(() => {
                    preloader.style.opacity = '0';
                    setTimeout(() => {
                        preloader.style.display = 'none';
                        // Force icons refresh on full load
                        lucide.createIcons();
                        // Force multiple refreshes for AOS
                        AOS.refresh();
                        setTimeout(() => AOS.refresh(), 100);
                        setTimeout(() => AOS.refresh(), 500);
                    }, 600);
                }, 300);
            }
        });

        // 4. Force refresh on scroll back to top to catch the hero
        window.addEventListener('scroll', function () {
            if (window.scrollY < 50) {
                AOS.refresh();
            }
        }, { passive: true });
    </script>
    @stack('scripts')
</body>

</html>