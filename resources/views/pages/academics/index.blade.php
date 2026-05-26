@extends('layouts.app')

@section('title', 'Academic Programs')
@section('meta_description', 'Explore CHED-recognized degree programs at St. Anthony Mary Claret College — Computer Science, Information Technology, Education, and Business Administration.')

@section('content')

    {{-- Banner Section --}}
    <section class="relative bg-neutral-900 overflow-hidden" style="margin-top: 90px; min-height: 60vh;" data-aos="fade-in">
        {{-- Background Video --}}
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover pointer-events-none">
            <source src="{{ asset('videos/acads.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        {{-- Subtle dark overlay for text readability --}}
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        {{-- Centered title content --}}
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex items-center justify-center" style="min-height: 60vh; padding-top: 60px; padding-bottom: 60px;">
            <h1 class="text-white text-5xl md:text-[80px] font-heading font-medium drop-shadow-2xl" data-aos="zoom-out" data-aos-duration="1500">Academics</h1>
        </div>
    </section>

    <x-samcc.breadcrumbs 
        :items="[
            ['label' => 'Academics']
        ]" 
    />

    {{-- ── PROGRAMS LIST ────────────────────────────────────────────────────── --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-4xl font-heading text-neutral-900 mb-6">Our Academic Programs</h2>
                <div class="relative w-64 h-1 bg-neutral-100 mx-auto rounded-full overflow-hidden shadow-sm mb-10">
                    <div class="absolute inset-y-0 left-1/2 -translate-x-1/2 bg-accent rounded-full animate-double-expand"></div>
                </div>
                <style>
                    @keyframes doubleExpand {
                        0% { width: 0; opacity: 0.5; }
                        50% { width: 100%; opacity: 1; filter: drop-shadow(0 0 8px rgba(225,42,54,0.6)); }
                        100% { width: 0; opacity: 0.5; }
                    }
                    .animate-double-expand {
                        animation: doubleExpand 3s cubic-bezier(0.65, 0, 0.35, 1) infinite;
                    }
                </style>
                <p class="text-neutral-600 max-w-2xl mx-auto text-lg leading-relaxed">
                    St. Anthony Mary Claret College offers a range of Undergraduate and Graduate programs focused on
                    providing quality Catholic education and professional competence.
                </p>
            </div>

            @if($programs->isEmpty())
                <div class="text-center py-20" data-aos="fade-up">
                    <div class="text-5xl mb-4">📚</div>
                    <p class="text-neutral-500 font-medium italic">No programs available at the moment. Please check back later.
                    </p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach($programs as $program)
                        @php
                            $icon = 'book-open';
                            $color = 'primary';
                            if (Str::contains(strtolower($program->name), 'computer science')) {
                                $icon = 'code-2';
                                $color = 'blue';
                            } elseif (Str::contains(strtolower($program->name), 'information technology')) {
                                $icon = 'monitor';
                                $color = 'indigo';
                            } elseif (Str::contains(strtolower($program->name), 'education')) {
                                $icon = 'graduation-cap';
                                $color = 'emerald';
                            } elseif (Str::contains(strtolower($program->name), 'business')) {
                                $icon = 'briefcase';
                                $color = 'amber';
                            }
                            
                            $colorClasses = [
                                'primary' => ['bg' => 'bg-primary-50', 'text' => 'text-primary-600', 'border' => 'border-primary-100', 'hover' => 'group-hover:text-primary-600', 'line' => 'bg-primary-600'],
                                'blue' => ['bg' => 'bg-blue-50', 'text' => 'text-blue-600', 'border' => 'border-blue-100', 'hover' => 'group-hover:text-blue-600', 'line' => 'bg-blue-600'],
                                'indigo' => ['bg' => 'bg-indigo-50', 'text' => 'text-indigo-600', 'border' => 'border-indigo-100', 'hover' => 'group-hover:text-indigo-600', 'line' => 'bg-indigo-600'],
                                'emerald' => ['bg' => 'bg-emerald-50', 'text' => 'text-emerald-600', 'border' => 'border-emerald-100', 'hover' => 'group-hover:text-emerald-600', 'line' => 'bg-emerald-600'],
                                'amber' => ['bg' => 'bg-amber-50', 'text' => 'text-amber-600', 'border' => 'border-amber-100', 'hover' => 'group-hover:text-amber-600', 'line' => 'bg-amber-600'],
                            ];
                            
                            $styles = $colorClasses[$color] ?? $colorClasses['primary'];
                        @endphp
                        
                        <div class="group relative bg-white border border-neutral-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_-12px_rgba(0,0,0,0.1)] transition-all duration-500 rounded-2xl overflow-hidden flex flex-col h-full"
                            data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            
                            {{-- Top accent line with animated expansion on hover --}}
                            <div class="absolute top-0 left-0 w-full h-1 {{ $styles['line'] }} opacity-80 group-hover:h-1.5 transition-all duration-300"></div>

                            {{-- Background Pattern Decoration --}}
                            <div class="absolute top-0 right-0 p-4 opacity-[0.03] group-hover:opacity-[0.07] transition-opacity duration-500 pointer-events-none">
                                <i data-lucide="{{ $icon }}" class="w-32 h-32 -mr-10 -mt-10 rotate-12"></i>
                            </div>

                            <div class="p-8 pb-6 flex-1 flex flex-col relative z-10">
                                <div class="flex items-center justify-between mb-8">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full {{ $styles['bg'] }} {{ $styles['text'] }} text-[10px] font-bold uppercase tracking-wider">
                                        {{ $program->degree_type }}
                                    </span>
                                    <div class="w-12 h-12 rounded-2xl {{ $styles['bg'] }} {{ $styles['text'] }} flex items-center justify-center transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3 shadow-sm">
                                        <i data-lucide="{{ $icon }}" class="w-6 h-6"></i>
                                    </div>
                                </div>

                                <h3 class="text-2xl font-heading text-neutral-900 mb-4 transition-colors duration-300 {{ $styles['hover'] }} leading-tight">
                                    {{ $program->name }}
                                </h3>

                                <p class="text-neutral-500 text-[15px] leading-relaxed mb-8 flex-1">
                                    {{ $program->description }}
                                </p>

                                <div class="pt-6 border-t border-neutral-50 flex items-center justify-between">
                                    <div class="flex items-center gap-2.5">
                                        <div class="p-1.5 rounded-lg bg-neutral-50 text-neutral-400">
                                            <i data-lucide="calendar" class="w-4 h-4"></i>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="text-[10px] text-neutral-400 font-bold uppercase tracking-tighter leading-none">Duration</span>
                                            <span class="text-sm text-neutral-700 font-semibold">{{ $program->duration }}</span>
                                        </div>
                                    </div>

                                    <a href="{{ route('academics.show', $program->slug) }}"
                                        class="inline-flex items-center justify-center h-10 px-5 text-sm font-bold text-neutral-900 hover:text-white border border-neutral-200 hover:bg-neutral-900 rounded-xl transition-all duration-300 group/btn">
                                        Learn More
                                        <i data-lucide="arrow-right" class="ml-2 w-4 h-4 transition-transform duration-300 group-hover/btn:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    {{-- ── GRADUATE STUDIES (ICLA) ────────────────────────────────────────────── --}}
    <section class="py-24 bg-neutral-50 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-white border border-neutral-100 rounded-[3rem] p-10 md:p-20 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.08)] flex flex-col lg:flex-row items-center gap-16"
                data-aos="fade-up">
                <div class="lg:w-1/2">
                    <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-blue-600 text-[11px] font-bold uppercase tracking-[0.3em] mb-8">
                        Advanced Research Center
                    </div>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-heading text-neutral-900 mb-8 leading-tight">Institute for <span class="text-blue-600 font-bold">Consecrated Life</span> in Asia</h2>
                    <p class="text-neutral-500 text-lg leading-relaxed mb-10 font-normal">
                        Our Graduate Department (ICLA) is a world-class center of Theological and Pastoral research, recognized by the Holy See for its excellence in Catholic formation and academic rigor.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                        @foreach([
                            ['label' => 'Missionary Theology', 'icon' => 'globe'],
                            ['label' => 'Consecrated Life', 'icon' => 'flame'],
                            ['label' => 'Sabbatical Programs', 'icon' => 'refresh-cw'],
                            ['label' => 'Ecclesiastical Degrees', 'icon' => 'award']
                        ] as $feature)
                        <div class="flex items-center gap-4 group">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                <i data-lucide="{{ $feature['icon'] }}" class="w-5 h-5"></i>
                            </div>
                            <span class="text-neutral-700 font-semibold tracking-tight">{{ $feature['label'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    <div class="flex flex-wrap items-center gap-6">
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center justify-center px-10 py-4 bg-blue-600 text-white font-bold rounded-2xl hover:bg-blue-700 hover:scale-[1.02] transition-all shadow-lg shadow-blue-600/20">
                            Explore Graduate Programs
                        </a>
                        <div class="flex items-center gap-3 text-neutral-400">
                            <i data-lucide="info" class="w-5 h-5"></i>
                            <span class="text-sm font-medium">Pontifical Recognition</span>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 relative">
                    <div class="aspect-[4/5] md:aspect-square bg-neutral-100 rounded-[2.5rem] overflow-hidden shadow-2xl relative group">
                        <img src="https://images.unsplash.com/photo-1541339907198-e08759dfc3ef?q=80&w=2070" 
                             alt="ICLA Campus" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-neutral-900/40 via-transparent to-transparent"></div>
                        
                        {{-- Floating Information --}}
                        <div class="absolute bottom-8 left-8 right-8 bg-white/90 backdrop-blur-md border border-white/20 p-6 rounded-2xl shadow-xl">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center text-white">
                                    <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <span class="block text-[10px] font-bold text-blue-600 uppercase tracking-widest">Enrollment Status</span>
                                    <span class="text-neutral-900 font-bold">Applications are open for AY 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection