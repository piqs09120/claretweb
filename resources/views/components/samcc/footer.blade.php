<footer class="bg-[#EBF1FA] pt-24 pb-12 border-t border-neutral-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Top Section: Main Content --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-16 mb-20">

            {{-- Column 1: School Identity --}}
            <div class="lg:col-span-4 space-y-8">
                <div class="flex items-center gap-5">
                    <div class="w-20 h-20 bg-secondary rounded-2xl flex items-center justify-center p-3 shadow-premium border border-neutral-200 overflow-hidden shrink-0">
                        <img src="{{ asset('images/logoweb2.png') }}" alt="SAMCC Logo" class="w-full h-auto"
                            onerror="this.src='https://ui-avatars.com/api/?name=SAMCC&background=0D0D0D&color=C8A96A&rounded=true'">
                    </div>
                    <div>
                        <h3 class="text-2xl font-heading text-textmain leading-tight font-medium">St. Anthony Mary<br><span class="text-accent italic font-light">Claret College</span></h3>
                    </div>
                </div>
                <p class="text-base leading-relaxed max-w-sm text-subtext font-light">
                    A Catholic institution of learning and formation committed to academic excellence and the
                    integration of faith and reason in the Claretian tradition.
                </p>
                <div class="flex items-center space-x-4 pt-4">
                    @foreach([
                        ['label' => 'Twitter', 'icon' => 'twitter'],
                        ['label' => 'Facebook', 'icon' => 'facebook'],
                        ['label' => 'Instagram', 'icon' => 'instagram']
                    ] as $social)
                        <a href="#" aria-label="{{ $social['label'] }}" class="w-12 h-12 rounded-xl bg-secondary flex items-center justify-center text-accent hover:bg-accent hover:text-primary hover:-translate-y-1 transition-all duration-300 border border-neutral-200 shadow-sm">
                            <i data-lucide="{{ $social['icon'] }}" class="w-5 h-5"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Column 2: Departments --}}
            <div class="lg:col-span-3 space-y-8">
                <h4 class="text-xs font-semibold text-textmain uppercase tracking-[0.3em]">Departments</h4>
                <div class="space-y-6">
                    <div>
                        <span class="block text-accent font-medium text-xs uppercase tracking-widest mb-2">Undergraduate</span>
                        <p class="text-sm font-light leading-relaxed text-subtext">
                            48 Cenacle Drive, Sanville Subd., Culiat, Quezon City<br>
                            <span class="text-textmain font-medium mt-1 inline-block hover:text-accent transition-colors cursor-default">(02) 8997-0593</span>
                        </p>
                    </div>
                    <div>
                        <span class="block text-accent font-medium text-xs uppercase tracking-widest mb-2">Graduate</span>
                        <p class="text-sm font-light leading-relaxed text-subtext">
                            526 Tandang Sora Ave., Culiat, Quezon City 1128<br>
                            <span class="text-textmain font-medium mt-1 inline-block hover:text-accent transition-colors cursor-default">+63-2-8932-0343</span>
                        </p>
                    </div>
                </div>
            </div>

            {{-- Column 3: Quick Links --}}
            <div class="lg:col-span-2 space-y-8">
                <h4 class="text-xs font-semibold text-textmain uppercase tracking-[0.3em]">Navigation</h4>
                <ul class="space-y-4 text-sm font-light text-subtext">
                    @foreach([
                            ['label' => 'Home', 'route' => 'home'],
                            ['label' => 'About', 'url' => route('home') . '#about'],
                            ['label' => 'Academics', 'route' => 'academics'],
                            ['label' => 'Admissions', 'url' => route('home') . '#admissions'],
                            ['label' => 'Student Life', 'url' => route('home') . '#activities'],
                            ['label' => 'Accreditations', 'url' => route('home') . '#accreditations'],
                            ['label' => 'Contact', 'url' => route('home') . '#contact'],
                        ] as $link)
                            <li>
                                <a href="{{ $link['url'] ?? route($link['route']) }}" class="hover:text-accent hover:translate-x-2 inline-block transition-all duration-300">
                                    {{ $link['label'] }}
                                </a>
                            </li>
                    @endforeach
                </ul>
            </div>

            {{-- Column 4: Extra Info --}}
            <div class="lg:col-span-3 space-y-8">
                <h4 class="text-xs font-semibold text-textmain uppercase tracking-[0.3em]">Campus Info</h4>
                <div class="space-y-6">
                    <div class="flex items-start gap-4 group">
                        <div class="w-10 h-10 rounded-lg bg-secondary flex items-center justify-center text-accent border border-neutral-200 shrink-0 mt-1 group-hover:bg-accent group-hover:text-primary group-hover:border-accent transition-all shadow-sm">
                            <i data-lucide="clock" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <span class="block text-textmain text-xs font-semibold uppercase tracking-widest mb-1">Campus Hours</span>
                            <span class="text-sm font-light text-subtext">7:30 AM &ndash; 5:00 PM</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 group">
                        <div class="w-10 h-10 rounded-lg bg-secondary flex items-center justify-center text-accent border border-neutral-200 shrink-0 mt-1 group-hover:bg-accent group-hover:text-primary group-hover:border-accent transition-all shadow-sm">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <span class="block text-textmain text-xs font-semibold uppercase tracking-widest mb-1">Email Support</span>
                            <a href="mailto:contact@claretmedia.ph" class="text-sm font-light text-subtext hover:text-accent transition-colors">contact@claretmedia.ph</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom Footer --}}
        <div class="border-t border-neutral-200 pt-10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-[13px] text-subtext text-center md:text-left font-light">
                    &copy; {{ date('Y') }} <span class="text-textmain font-medium uppercase tracking-widest">St. Anthony Mary Claret College</span>.
                </p>
                <div class="flex items-center gap-2 text-[12px] text-subtext font-light">
                    <span>Powered by</span>
                    <span class="text-primary font-bold uppercase tracking-widest text-[10px] bg-accent px-3 py-1.5 rounded hover:brightness-110 transition-all cursor-pointer shadow-glow">Claret Media</span>
                </div>
            </div>
        </div>
    </div>
</footer>
