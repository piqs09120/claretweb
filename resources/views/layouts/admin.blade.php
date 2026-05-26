<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel') | SAMCC Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full font-sans antialiased bg-gray-50" x-data="{ sidebarOpen: false }">

    <div class="flex h-screen overflow-hidden">

        {{-- Sidebar --}}
        <aside class="hidden md:flex md:w-64 md:flex-col flex-shrink-0">
            <div class="flex flex-col h-full bg-claret-950 text-white">
                {{-- Logo --}}
                <div class="flex items-center gap-3 px-6 py-5 border-b border-claret-800">
                    <div
                        class="w-9 h-9 bg-gold-500 rounded-full flex items-center justify-center font-bold text-claret-950 text-sm">
                        SC</div>
                    <div>
                        <p class="text-sm font-bold leading-tight">SAMCC Admin</p>
                        <p class="text-xs text-claret-300">Control Panel</p>
                    </div>
                </div>

                {{-- Nav --}}
                <nav class="flex-1 px-3 py-4 space-y-1 overflow-y-auto">
                    @php
                        $adminNav = [
                            ['route' => 'admin.dashboard', 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'label' => 'Dashboard'],
                            ['route' => 'admin.posts.index', 'icon' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 12h6m-6-4h4', 'label' => 'News & Blog'],
                            ['route' => 'admin.programs.index', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'label' => 'Programs'],
                            ['route' => 'admin.activities.index', 'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z', 'label' => 'Activities'],
                            ['route' => 'admin.messages.index', 'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label' => 'Messages'],
                            ['route' => 'admin.settings', 'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z', 'label' => 'Settings'],
                        ];
                    @endphp

                    @foreach($adminNav as $item)
                                    <a href="{{ route($item['route']) }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors duration-150
                                          {{ request()->routeIs($item['route']) || (isset($item['route']) && str_starts_with(request()->route()->getName(), rtrim($item['route'], 'index')))
                        ? 'bg-claret-800 text-white' : 'text-claret-200 hover:bg-claret-800 hover:text-white' }}">
                                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                                        </svg>
                                        {{ $item['label'] }}
                                        @if($item['label'] === 'Messages')
                                            @php $unread = \App\Models\ContactMessage::where('is_read', false)->count(); @endphp
                                            @if($unread > 0)
                                                <span
                                                    class="ml-auto bg-gold-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">{{ $unread }}</span>
                                            @endif
                                        @endif
                                    </a>
                    @endforeach
                </nav>

                {{-- Bottom --}}
                <div class="px-3 py-4 border-t border-claret-800 space-y-1">
                    <a href="{{ route('home') }}" target="_blank"
                        class="flex items-center gap-3 px-3 py-2 rounded-lg text-xs text-claret-300 hover:text-white hover:bg-claret-800 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        View Website
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full flex items-center gap-3 px-3 py-2 rounded-lg text-xs text-claret-300 hover:text-white hover:bg-claret-800 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        {{-- Main content --}}
        <div class="flex-1 flex flex-col overflow-hidden">

            {{-- Top bar --}}
            <header class="bg-white border-b border-gray-200 flex items-center justify-between px-6 py-4 flex-shrink-0">
                <div>
                    <h1 class="text-lg font-bold text-gray-800">@yield('page_title', 'Dashboard')</h1>
                    <p class="text-xs text-gray-500">@yield('page_subtitle', 'Welcome back, ' . auth()->user()->name)
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-sm text-gray-500 hidden sm:block">{{ auth()->user()->name }}</span>
                    <div
                        class="w-9 h-9 bg-claret-700 rounded-full flex items-center justify-center text-white font-bold text-sm">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                </div>
            </header>

            {{-- Content --}}
            <main class="flex-1 overflow-y-auto p-6">

                {{-- Flash --}}
                @if(session('success'))
                    <div class="alert-success mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert-error mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" />
                        </svg>
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

</body>

</html>