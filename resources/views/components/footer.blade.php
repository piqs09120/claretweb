<footer class="border-t border-neutral-100 text-neutral-600" style="background-color: #fef6e4;">
    <div class="container-xl py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- About col --}}
            <div class="lg:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-primary-700 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold font-serif">SC</span>
                    </div>
                    <div>
                        <p class="text-white font-bold text-sm tracking-wide">St. Anthony Mary Claret College</p>
                        <p class="text-secondary-400 text-xs font-medium uppercase tracking-widest">Excellence in
                            Catholic Education</p>
                    </div>
                </div>
                <p class="text-sm text-neutral-500 leading-relaxed mb-8 max-w-sm">
                    A private Catholic educational institution in Quezon City, Philippines, dedicated to forming
                    competent, missionary-driven professionals in the Claretian tradition.
                </p>
                {{-- Social --}}
                <div class="flex items-center gap-3">
                    <a href="https://facebook.com/samcc" target="_blank"
                        class="w-10 h-10 bg-neutral-100 hover:bg-primary-600 text-neutral-500 hover:text-white rounded-xl flex items-center justify-center transition-all duration-300 border border-neutral-200">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-neutral-100 hover:bg-primary-600 text-neutral-500 hover:text-white rounded-xl flex items-center justify-center transition-all duration-300 border border-neutral-200">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-neutral-900 font-bold text-sm uppercase tracking-wider mb-6">Quick Links</h4>
                <ul class="space-y-2">
                    @foreach([['route' => 'home', 'label' => 'Home'], ['route' => 'about', 'label' => 'About Us'], ['route' => 'academics', 'label' => 'Academic Programs'], ['route' => 'admissions', 'label' => 'Admissions'], ['route' => 'activities', 'label' => 'Student Activities'], ['route' => 'contact', 'label' => 'Contact Us']] as $link)
                        <li>
                            <a href="{{ route($link['route']) }}"
                                class="text-sm text-neutral-500 hover:text-primary-600 transition-all duration-200 flex items-center gap-2 group/link">
                                <span
                                    class="w-1.5 h-1.5 bg-neutral-300 group-hover/link:bg-primary-500 rounded-full flex-shrink-0 transition-colors"></span>
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-neutral-900 font-bold text-sm uppercase tracking-wider mb-6">Contact</h4>
                <ul class="space-y-3">
                    <li class="flex gap-3 text-sm">
                        <svg class="w-4 h-4 text-primary-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-neutral-500">Quezon City, Metro Manila, Philippines</span>
                    </li>
                    <li class="flex gap-3 text-sm">
                        <svg class="w-4 h-4 text-primary-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class="text-neutral-500">+63 (2) 8123-4567</span>
                    </li>
                    <li class="flex gap-3 text-sm">
                        <svg class="w-4 h-4 text-primary-600 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="text-neutral-500">info@samcc.edu.ph</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="border-t border-neutral-100">
        <div
            class="container-xl py-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] font-medium uppercase tracking-wider text-neutral-400">
            <p>&copy; {{ date('Y') }} St. Anthony Mary Claret College. All rights reserved.</p>
            <p>CHED Recognized Institution &middot; Quezon City, Philippines</p>
        </div>
    </div>
</footer>