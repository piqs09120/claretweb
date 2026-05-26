@props(['scrolled' => false])

<div x-data="{ 
        mobileOpen: false, 
        loginModal: {{ $errors->has('library') ? 'true' : 'false' }},
        activeTab: '{{ $errors->has('library') ? 'library' : 'admin' }}',
        activeSection: window.location.hash || (window.scrollY < 100 ? '#top' : ''),
        init() {
            // Intersection Observer for scroll tracking
            const observerOptions = {
                root: null,
                rootMargin: '-20% 0px -70% 0px',
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.activeSection = '#' + entry.target.id;
                    }
                });
            }, observerOptions);

            // Observe all sections with IDs
            document.querySelectorAll('section[id], div[id]').forEach(section => {
                if (['top', 'about', 'academics', 'admissions', 'activities', 'accreditations', 'contact'].includes(section.id)) {
                    observer.observe(section);
                }
            });

            // Handle manual clicks to set active state immediately
            window.addEventListener('hashchange', () => {
                this.activeSection = window.location.hash || '#top';
            });
            
            // Special case for top of page
            window.addEventListener('scroll', () => {
                if (window.scrollY < 100) this.activeSection = '#top';
            });

            // Prevent scroll when login modal or mobile menu is open
            this.$watch('loginModal', value => this.toggleScroll(value || this.mobileOpen));
            this.$watch('mobileOpen', value => this.toggleScroll(value || this.loginModal));
        },
        toggleScroll(hide) {
            if (hide) {
                document.body.classList.add('overflow-hidden');
            } else {
                document.body.classList.remove('overflow-hidden');
            }
        }
    }">

    {{-- Main Navbar --}}
    <nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500"
        :class="(activeSection === '#top' && @js(request()->routeIs('home'))) ? 'bg-transparent border-transparent py-4' : 'bg-primary/95 backdrop-blur-md shadow-sm border-b border-neutral-200/50 py-1'">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-[90px]">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex-shrink-0" @click="activeSection = '#top'">
                    <img src="{{ asset('images/logoweb2.png') }}" alt="SAMCC Logo" class="h-[75px] w-auto transition-transform duration-500 hover:scale-105"
                        onerror="this.src='https://ui-avatars.com/api/?name=SAMCC&background=0D0D0D&color=C8A96A&rounded=true'">
                </a>

                {{-- Desktop Links --}}
                <div class="hidden md:flex flex-1 justify-center space-x-10">
                    @php
                        $isHome = request()->routeIs('home');
                        $links = [
                            ['label' => 'Home', 'url' => '#top', 'id' => '#top'],
                            ['label' => 'About', 'url' => '#about', 'id' => '#about'],
                            [
                                'label' => 'Academics',
                                'url' => '#academics',
                                'id' => '#academics',
                                'route_pattern' => 'academics*',
                                'children' => [
                                    [
                                        'label' => 'Programs',
                                        'children' => [
                                            ['label' => 'Undergraduate Department', 'route' => 'academics.undergraduate'],
                                            ['label' => 'Graduate Department', 'route' => 'academics.graduate'],
                                        ]
                                    ],
                                    ['label' => 'Curriculum', 'route' => 'academics.curriculum'],
                                    ['label' => 'Faculty & Mentors', 'route' => 'academics.faculty'],
                                    ['label' => 'Academic Calendar', 'route' => 'academics.calendars'],
                                ]
                            ],
                            [
                                'label' => 'Admissions',
                                'url' => '#admissions',
                                'id' => '#admissions',
                                'route_pattern' => 'admissions*',
                                'children' => [
                                    ['label' => 'Requirements & Qualifications', 'route' => 'admissions'],
                                ]
                            ],
                            ['label' => 'Student Life', 'url' => '#activities', 'id' => '#activities', 'route_pattern' => 'activities'],
                            ['label' => 'Accreditations', 'url' => '#accreditations', 'id' => '#accreditations', 'route_pattern' => 'accreditations'],
                            ['label' => 'Contact', 'url' => '#contact', 'id' => '#contact'],
                        ];
                    @endphp
                    @foreach($links as $link)
                        @php
                            $routePattern = $link['route_pattern'] ?? null;
                            $linkId = $link['id'] ?? null;
                        @endphp

                        @if(isset($link['children']))
                            <div class="relative group" x-data="{ open: false }" @mouseenter="open = true"
                                @mouseleave="open = false" @click.away="open = false">
                                <div class="flex items-center gap-1 cursor-pointer text-[14px] font-sans tracking-widest uppercase font-medium transition-all duration-500 relative py-2"
                                    :class="(activeSection === '#top' && @js(request()->routeIs('home'))) ? 'text-white hover:text-accent' : (((activeSection === '{{ $linkId }}' && @js(request()->routeIs('home'))) || @js($routePattern && request()->routeIs($routePattern))) ? 'text-accent' : 'text-textmain hover:text-accent')">
                                    <a
                                        href="{{ $isHome ? $link['url'] : route('home') . $link['url'] }}">{{ $link['label'] }}</a>
                                    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                                    {{-- Premium Fade & Expand Underline (Hover Only) --}}
                                    <span
                                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent opacity-0 group-hover:w-full group-hover:opacity-100 transition-all duration-700 ease-in-out"
                                        style="transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);"></span>
                                </div>
                                {{-- Dropdown Menu --}}
                                <div x-show="open" x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="transform opacity-0 scale-95 translate-y-2"
                                    x-transition:enter-end="transform opacity-100 scale-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="transform opacity-100 scale-100 translate-y-0"
                                    x-transition:leave-end="transform opacity-0 scale-95 translate-y-2"
                                    class="absolute left-0 mt-1 w-64 bg-secondary border border-neutral-200 shadow-premium rounded-xl py-2"
                                    style="display: none;">
                                    @foreach($link['children'] as $child)
                                        @if(isset($child['children']))
                                            <div class="w-full relative group/sub" x-data="{ subOpen: false }" @click.away="subOpen = false">
                                                <button @click="subOpen = !subOpen" class="w-full flex items-center justify-between px-6 py-3.5 text-sm font-medium text-subtext hover:bg-primary hover:text-accent cursor-pointer transition-all duration-300 border-l-2 border-transparent hover:border-accent focus:outline-none">
                                                    {{ $child['label'] }}
                                                    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300 ease-in-out" :class="{ 'rotate-180': subOpen }"></i>
                                                </button>
                                                <div x-show="subOpen"
                                                    x-transition:enter="transition-all ease-in-out duration-300"
                                                    x-transition:enter-start="opacity-0 max-h-0"
                                                    x-transition:enter-end="opacity-100 max-h-[200px]"
                                                    x-transition:leave="transition-all ease-in-out duration-300"
                                                    x-transition:leave-start="opacity-100 max-h-[200px]"
                                                    x-transition:leave-end="opacity-0 max-h-0"
                                                    class="bg-primary/40 overflow-hidden"
                                                    style="display: none;">
                                                    <div class="py-2 pl-6 pr-2">
                                                        @foreach($child['children'] as $grandChild)
                                                            <a href="{{ isset($grandChild['route']) ? route($grandChild['route']) : ($grandChild['url'] ?? '#') }}"
                                                                class="block px-4 py-2 my-1 text-sm font-medium rounded-lg {{ (isset($grandChild['route']) && request()->routeIs($grandChild['route'])) ? 'text-accent bg-white shadow-sm' : 'text-neutral-500' }} hover:bg-white hover:text-accent hover:shadow-sm transition-all duration-300">
                                                                {{ $grandChild['label'] }}
                                                            </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <a href="{{ isset($child['route']) ? route($child['route']) : ($child['url'] ?? '#') }}"
                                                class="block px-6 py-3.5 text-sm font-medium {{ (isset($child['route']) && request()->routeIs($child['route'])) ? 'text-accent bg-primary border-accent' : 'text-subtext border-transparent' }} hover:bg-primary hover:text-accent transition-colors border-l-2 hover:border-accent">
                                                {{ $child['label'] }}
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <a href="{{ $isHome ? $link['url'] : route('home') . $link['url'] }}"
                                @click="activeSection = '{{ $linkId }}'"
                                class="text-[14px] font-sans tracking-widest uppercase font-medium transition-all duration-500 relative py-2 group"
                                :class="(activeSection === '#top' && @js(request()->routeIs('home'))) ? 'text-white hover:text-accent' : (((activeSection === '{{ $linkId }}' && @js(request()->routeIs('home'))) || @js($routePattern && request()->routeIs($routePattern))) ? 'text-accent' : 'text-textmain hover:text-accent')">
                                {{ $link['label'] }}
                                {{-- Premium Fade & Expand Underline (Hover Only) --}}
                                <span
                                    class="absolute bottom-0 left-0 w-0 h-0.5 bg-accent opacity-0 group-hover:w-full group-hover:opacity-100 transition-all duration-700 ease-in-out"
                                    style="transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);"></span>
                            </a>
                        @endif
                    @endforeach
                </div>

                {{-- Right Actions (Login) --}}
                <div class="hidden md:flex items-center space-x-6">
                    <button type="button" @click="loginModal = true; activeTab = 'admin'"
                        class="px-6 py-2.5 bg-accent text-white text-xs font-semibold tracking-[0.2em] uppercase rounded-full hover:brightness-110 hover:scale-[1.02] hover:shadow-glow transition-all duration-300 transform active:scale-95">
                        Login
                    </button>
                </div>

                {{-- Mobile Toggle --}}
                <div class="flex items-center md:hidden space-x-4">
                    <button type="button" @click="loginModal = true; activeTab = 'admin'"
                        class="text-xs font-semibold tracking-widest uppercase text-accent">Login</button>
                    <button @click="mobileOpen = !mobileOpen" class="p-2 transition-colors duration-300"
                        :class="(activeSection === '#top' && @js(request()->routeIs('home'))) ? 'text-white' : 'text-textmain'">
                        <i data-lucide="menu" x-show="!mobileOpen" class="w-6 h-6"></i>
                        <i data-lucide="x" x-show="mobileOpen" class="w-6 h-6" style="display:none;"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            class="md:hidden bg-secondary border-t border-neutral-200 shadow-premium" style="display:none;">
            <div class="px-4 py-4 space-y-1">
                @foreach($links as $link)
                    @if(isset($link['children']))
                        <div x-data="{ subOpen: false }">
                            <button @click="subOpen = !subOpen"
                                class="flex items-center justify-between w-full px-4 py-3 rounded-lg text-base font-bold transition-all duration-300"
                                :class="(activeSection === '{{ $link['id'] }}' || subOpen) ? 'text-accent bg-primary-50' : 'text-neutral-800'">
                                <span>{{ $link['label'] }}</span>
                                <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': subOpen }"></i>
                            </button>
                            <div x-show="subOpen" class="pl-6 space-y-1 py-1" style="display: none;">
                                <a href="{{ $isHome ? $link['url'] : route('home') . $link['url'] }}"
                                    class="block px-4 py-2 text-sm font-bold text-neutral-600 hover:text-accent transition-colors">View
                                    All</a>
                                @foreach($link['children'] as $child)
                                    @if(isset($child['children']))
                                        <div x-data="{ innerOpen: false }" class="mt-1">
                                            <button @click="innerOpen = !innerOpen" class="flex items-center justify-between w-full px-4 py-2 rounded-lg text-sm font-bold text-neutral-600 hover:text-accent transition-colors">
                                                <span>{{ $child['label'] }}</span>
                                                <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': innerOpen }"></i>
                                            </button>
                                            <div x-show="innerOpen" class="pl-4 space-y-1 py-1" style="display: none;">
                                                @foreach($child['children'] as $grandChild)
                                                    <a href="{{ isset($grandChild['route']) ? route($grandChild['route']) : ($grandChild['url'] ?? '#') }}" class="block px-4 py-2 text-sm font-bold {{ (isset($grandChild['route']) && request()->routeIs($grandChild['route'])) ? 'text-accent' : 'text-neutral-500' }} hover:text-accent transition-colors">- {{ $grandChild['label'] }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    @else
                                        <a href="{{ isset($child['route']) ? route($child['route']) : ($child['url'] ?? '#') }}"
                                            class="block px-4 py-2 text-sm font-bold {{ (isset($child['route']) && request()->routeIs($child['route'])) ? 'text-accent' : 'text-neutral-600' }} hover:text-accent transition-colors">
                                            {{ $child['label'] }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @else
                        <a href="{{ $isHome ? $link['url'] : route('home') . $link['url'] }}"
                            @click="activeSection = '{{ $link['id'] }}'; mobileOpen = false"
                            class="block px-4 py-3 rounded-lg text-base font-bold transition-all duration-300"
                            :class="(activeSection === '{{ $link['id'] }}' || @js(isset($link['route_pattern']) && request()->routeIs($link['route_pattern']))) ? 'text-accent bg-primary-50' : 'text-neutral-800 hover:bg-neutral-50 hover:text-accent'">
                            {{ $link['label'] }}
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </nav>

    {{-- Login Modal --}}
    <div x-show="loginModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-0"
        style="display: none;" x-cloak>
        <!-- Background overlay -->
        <div x-show="loginModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-neutral-900 bg-opacity-60 backdrop-blur-sm transition-opacity"
            @click="loginModal = false"></div>

        <!-- Modal panel -->
        <div x-show="loginModal" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="relative bg-secondary rounded-2xl text-left overflow-hidden shadow-premium transform transition-all sm:max-w-md w-full border border-neutral-200">

            <div class="absolute top-0 right-0 pt-6 pr-6 z-10">
                <button type="button" @click="loginModal = false"
                    class="bg-neutral-100 p-2 rounded-full text-neutral-400 hover:text-neutral-600 focus:outline-none transition-colors">
                    <span class="sr-only">Close</span>
                    <i data-lucide="x" class="h-5 w-5 text-neutral-400 hover:text-neutral-600 transition-colors"></i>
                </button>
            </div>

            <div class="px-6 pt-10 pb-8">
                {{-- Content Header --}}
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold font-heading text-neutral-900">Library Portal</h3>
                    <p class="mt-1 text-xs text-neutral-400 font-medium uppercase tracking-widest">Sign in with your Library account</p>
                </div>

                {{-- Login Form (Simulated for Redirect) --}}
                <form action="https://librarika.com/users/login" target="_blank" class="space-y-5">
                    <div>
                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase tracking-wider">Username or Email</label>
                        <input type="text" name="email" required
                            class="bg-gray-50 border border-neutral-200 text-gray-900 text-sm rounded-xl focus:ring-accent focus:border-accent block w-full p-4 transition-all shadow-sm"
                            placeholder="Enter your username">
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <label class="text-xs font-bold text-gray-700 uppercase tracking-wider">Password</label>
                            <a href="https://librarika.com/users/forgot_password" target="_blank" class="text-[10px] font-bold text-accent uppercase hover:underline">Forgot?</a>
                        </div>
                        <input type="password" name="password" required
                            class="bg-gray-50 border border-neutral-200 text-gray-900 text-sm rounded-xl focus:ring-accent focus:border-accent block w-full p-4 transition-all shadow-sm"
                            placeholder="••••••••">
                    </div>

                    <div class="pt-2">
                        <button type="submit"
                            class="w-full flex justify-center items-center rounded-xl px-4 py-4 bg-accent text-white text-sm font-bold tracking-widest uppercase hover:brightness-110 hover:scale-[1.02] shadow-glow transition-all active:scale-[0.98] group">
                            Login to Portal
                            <i data-lucide="log-in" class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                        </button>
                    </div>

                    <div class="text-center pt-6 border-t border-dashed border-neutral-100">
                        <p class="text-[10px] text-neutral-400 uppercase tracking-widest">Secure External Gateway: Librarika</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>