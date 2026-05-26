<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" x-data="{ scrolled: false }"
    @scroll.window="scrolled = window.scrollY > 30"
    :class="scrolled ? 'bg-white/95 dark:bg-gray-900/95 backdrop-blur shadow-md' : 'bg-transparent'">
    <div class="container-xl">
        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div
                    class="w-11 h-11 bg-claret-700 rounded-full flex items-center justify-center shadow-md group-hover:shadow-claret-300 transition-shadow duration-300">
                    <span class="text-white font-bold text-base font-serif">SC</span>
                </div>
                <div class="hidden sm:block">
                    <p class="font-bold text-sm leading-tight"
                        :class="scrolled ? 'text-claret-800 dark:text-white' : 'text-white'">St. Anthony Mary Claret</p>
                    <p class="text-xs font-medium" :class="scrolled ? 'text-gold-600' : 'text-gold-300'">College —
                        Quezon City</p>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden lg:flex items-center gap-1">
                @php
                    $navLinks = [
                        ['route' => 'home', 'label' => 'Home'],
                        ['route' => 'about', 'label' => 'About'],
                        ['route' => 'academics', 'label' => 'Academics'],
                        ['route' => 'admissions', 'label' => 'Admissions'],
                        ['route' => 'activities', 'label' => 'Activities'],
                        ['route' => 'contact', 'label' => 'Contact'],
                    ];
                @endphp

                @foreach($navLinks as $link)
                    <a href="{{ route($link['route']) }}" class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200
                              {{ request()->routeIs($link['route']) ? 'bg-claret-700 text-white' : '' }}"
                        :class="!{{ request()->routeIs($link['route']) ? 'true' : 'false' }} ? (scrolled ? 'text-gray-700 dark:text-gray-200 hover:bg-claret-50 dark:hover:bg-gray-800 hover:text-claret-700' : 'text-white/90 hover:text-white hover:bg-white/10') : ''">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </div>

            {{-- Right side --}}
            <div class="flex items-center gap-3">
                {{-- Dark mode toggle --}}
                <button @click="darkMode = !darkMode" class="p-2 rounded-lg transition-colors"
                    :class="scrolled ? 'text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800' : 'text-white/80 hover:text-white hover:bg-white/10'"
                    title="Toggle dark mode">
                    <i data-lucide="moon" x-show="!darkMode" class="w-5 h-5"></i>
                    <i data-lucide="sun" x-show="darkMode" class="w-5 h-5"></i>
                </button>

                {{-- Apply CTA --}}
                <a href="{{ route('admissions') }}" class="hidden sm:inline-flex btn-primary btn-sm">
                    Apply Now
                </a>

                {{-- Mobile menu button --}}
                <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 rounded-lg transition-colors"
                    :class="scrolled ? 'text-gray-700 hover:bg-gray-100' : 'text-white hover:bg-white/10'">
                    <i data-lucide="menu" x-show="!mobileOpen" class="w-6 h-6"></i>
                    <i data-lucide="x" x-show="mobileOpen" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        {{-- Mobile menu --}}
        <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="lg:hidden bg-white dark:bg-gray-900 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-800 mb-4 overflow-hidden">
            <div class="flex flex-col divide-y divide-gray-100 dark:divide-gray-800">
                @foreach($navLinks as $link)
                    <a href="{{ route($link['route']) }}" @click="mobileOpen = false"
                        class="flex items-center px-5 py-4 text-sm font-medium {{ request()->routeIs($link['route']) ? 'text-claret-700 bg-claret-50 dark:bg-claret-950 dark:text-claret-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800' }}">
                        {{ $link['label'] }}
                        @if(request()->routeIs($link['route']))
                            <i data-lucide="check" class="w-4 h-4 ml-auto text-claret-600"></i>
                        @endif
                    </a>
                @endforeach
                <div class="p-4">
                    <a href="{{ route('admissions') }}" class="btn-primary w-full justify-center">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</nav>