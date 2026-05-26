@extends('layouts.app')

@section('title', $program->name)
@section('meta_description', 'Learn about the ' . $program->name . ' program at SAMCC — curriculum, duration, and career prospects.')

@section('content')

    @php
        // Dynamic Color Mapping for Departments
        $theme = 'primary';
        $nameLower = strtolower($program->name);
        if (Str::contains($nameLower, 'computer science')) $theme = 'blue';
        elseif (Str::contains($nameLower, 'information technology')) $theme = 'indigo';
        elseif (Str::contains($nameLower, 'education')) $theme = 'emerald';
        elseif (Str::contains($nameLower, 'business')) $theme = 'amber';

        $colors = [
            'primary' => ['text' => 'text-primary-600', 'bg' => 'bg-primary-600', 'light' => 'bg-primary-50', 'border' => 'border-primary-100', 'ring' => 'ring-primary-600/20', 'hover' => 'hover:bg-primary-700'],
            'blue'    => ['text' => 'text-blue-600', 'bg' => 'bg-blue-600', 'light' => 'bg-blue-50', 'border' => 'border-blue-100', 'ring' => 'ring-blue-600/20', 'hover' => 'hover:bg-blue-700'],
            'indigo'  => ['text' => 'text-indigo-600', 'bg' => 'bg-indigo-600', 'light' => 'bg-indigo-50', 'border' => 'border-indigo-100', 'ring' => 'ring-indigo-600/20', 'hover' => 'hover:bg-indigo-700'],
            'emerald' => ['text' => 'text-emerald-600', 'bg' => 'bg-emerald-600', 'light' => 'bg-emerald-50', 'border' => 'border-emerald-100', 'ring' => 'ring-emerald-600/20', 'hover' => 'hover:bg-emerald-700'],
            'amber'   => ['text' => 'text-amber-600', 'bg' => 'bg-amber-600', 'light' => 'bg-amber-50', 'border' => 'border-amber-100', 'ring' => 'ring-amber-600/20', 'hover' => 'hover:bg-amber-700'],
        ];
        $c = $colors[$theme];

        // Layout Variables
        $titleSize = strlen($program->name) > 30 ? 'text-5xl md:text-6xl lg:text-7xl' : 'text-5xl md:text-7xl lg:text-8xl';
    @endphp

    {{-- Hero Section --}}
    <section class="relative bg-neutral-900 overflow-hidden flex items-center" style="margin-top: 90px; min-height: 60vh;" data-aos="fade-in">
        <div class="absolute inset-0 z-0">
            @if(Str::contains($nameLower, 'secondary education'))
                <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-90" poster="https://images.unsplash.com/photo-1523050853064-8504f2f40951?q=80&w=2070">
                    <source src="{{ asset('videos/educ.mp4') }}" type="video/mp4">
                </video>
            @elseif(Str::contains($nameLower, 'information technology'))
                <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-90" poster="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2070">
                    <source src="{{ asset('videos/infotech.mp4') }}" type="video/mp4">
                </video>
            @elseif(Str::contains($nameLower, 'computer science'))
                <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-90" poster="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070">
                    <source src="{{ asset('videos/comsci.mp4') }}" type="video/mp4">
                </video>
            @elseif(Str::contains($nameLower, 'business administration'))
                <video autoplay muted loop playsinline class="w-full h-full object-cover object-top opacity-90" poster="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2070">
                    <source src="{{ asset('videos/market.mp4') }}" type="video/mp4">
                </video>
            @else
                <img src="https://images.unsplash.com/photo-1523050853064-8504f2f40951?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover opacity-90">
            @endif
            <div class="absolute inset-0 bg-gradient-to-r from-black/20 via-transparent to-transparent"></div>
        </div>

        <div class="container-xl relative z-10 px-4 md:px-8">
            <div data-aos="fade-right" class="max-w-4xl">
                <h1 class="{{ $titleSize }} font-heading font-bold text-white mb-10 tracking-tight leading-[1.05] drop-shadow-[0_4px_12px_rgba(0,0,0,0.6)]">
                    {{ $program->name }}
                </h1>

                <div class="flex flex-wrap items-center gap-10 text-white drop-shadow-[0_2px_8px_rgba(0,0,0,0.8)]">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-white/20 border border-white/20 flex items-center justify-center backdrop-blur-sm shadow-xl">
                            <i data-lucide="clock" class="w-6 h-6"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase font-black text-white/80 tracking-widest leading-none mb-1">Duration</span>
                            <span class="text-lg font-bold">{{ $program->duration }}</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-white/20 border border-white/20 flex items-center justify-center backdrop-blur-sm shadow-xl">
                            <i data-lucide="shield-check" class="w-6 h-6"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-[10px] uppercase font-black text-white/80 tracking-widest leading-none mb-1">Recognition</span>
                            <span class="text-lg font-bold">CHED Recognized</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-samcc.breadcrumbs :items="[['label' => 'Academics', 'url' => route('academics')], ['label' => $program->name]]" />

    {{-- Content Section --}}
    <section class="py-24 bg-white">
        <div class="container-xl px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                {{-- Main Content --}}
                <div class="lg:col-span-8">
                    <div class="mb-16" data-aos="fade-up">
                        <span class="text-[11px] font-bold uppercase tracking-[0.3em] {{ $c['text'] }} mb-4 block">Program Overview</span>
                        <h2 class="text-4xl font-heading text-neutral-900 mb-8">Empowering Excellence</h2>
                        <p class="text-xl text-neutral-600 leading-relaxed font-light">
                            {{ $program->description }}
                        </p>
                    </div>

                    {{-- Mini Dashboard --}}
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-16" data-aos="fade-up">
                        @foreach([
                            ['label' => 'Total Units', 'value' => '158', 'icon' => 'database'],
                            ['label' => 'Semesters', 'value' => '8', 'icon' => 'calendar-days'],
                            ['label' => 'Subjects', 'value' => '54+', 'icon' => 'book-open'],
                            ['label' => 'Accredited', 'value' => 'CHED', 'icon' => 'award']
                        ] as $item)
                        <div class="{{ $c['light'] }} p-6 rounded-3xl border {{ $c['border'] }} flex flex-col items-center justify-center text-center">
                            <i data-lucide="{{ $item['icon'] }}" class="w-6 h-6 {{ $c['text'] }} mb-3"></i>
                            <span class="text-2xl font-bold text-neutral-900">{{ $item['value'] }}</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-neutral-500">{{ $item['label'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    {{-- Curriculum --}}
                    @if($program->curriculum_data)
                    <div id="accordion-curriculum" data-accordion="collapse" class="space-y-4" data-aos="fade-up">
                        <h3 class="text-2xl font-heading text-neutral-900 mb-8">Curriculum Plan</h3>
                        @php $years = collect($program->curriculum_data)->groupBy('year'); @endphp
                        @foreach($years as $year => $semesters)
                        <div class="border border-neutral-100 rounded-3xl overflow-hidden shadow-sm bg-white hover:shadow-md transition-shadow">
                            <h2 id="heading-{{ $year }}">
                                <button type="button" class="flex items-center justify-between w-full p-6 text-left" data-accordion-target="#body-{{ $year }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}">
                                    <span class="flex items-center gap-4">
                                        <span class="w-12 h-12 rounded-2xl {{ $c['light'] }} {{ $c['text'] }} flex items-center justify-center font-bold text-lg shadow-sm">
                                            {{ $year }}
                                        </span>
                                        <span class="font-bold text-neutral-800">{{ $year == 1 ? 'First' : ($year == 2 ? 'Second' : ($year == 3 ? 'Third' : 'Fourth')) }} Year Overview</span>
                                    </span>
                                    <i data-lucide="chevron-down" class="w-5 h-5 transition-transform" data-accordion-icon></i>
                                </button>
                            </h2>
                            <div id="body-{{ $year }}" class="hidden p-8 border-t border-neutral-50 bg-neutral-50/30">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                    @foreach($semesters->groupBy('semester') as $semNum => $rows)
                                    <div>
                                        <h4 class="text-[11px] font-black uppercase tracking-widest {{ $c['text'] }} mb-6 border-b {{ $c['border'] }} pb-2">
                                            {{ $semNum == 1 ? '1st' : '2nd' }} Semester
                                        </h4>
                                        <ul class="space-y-4">
                                            @foreach($rows as $row)
                                            @foreach($row['subjects'] as $subject)
                                            <li class="flex items-start gap-3 group">
                                                <div class="mt-1 w-5 h-5 rounded-full {{ $c['light'] }} {{ $c['text'] }} flex items-center justify-center shrink-0 group-hover:{{ $c['bg'] }} group-hover:text-white transition-colors">
                                                    <i data-lucide="check" class="w-3 h-3"></i>
                                                </div>
                                                <span class="text-sm font-medium text-neutral-700 leading-snug">{{ $subject }}</span>
                                            </li>
                                            @endforeach
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-4 space-y-8">
                    <div class="bg-white border border-neutral-100 rounded-[2.5rem] p-10 sticky top-32 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.08)] overflow-hidden" data-aos="fade-left">
                        {{-- Decorative Glow --}}
                        <div class="absolute -top-20 -right-20 w-64 h-64 {{ $c['bg'] }} rounded-full blur-[100px] opacity-5"></div>
                        
                        <h3 class="text-3xl font-heading font-bold text-neutral-900 mb-8 relative z-10">Ready to <span class="{{ $c['text'] }}">Apply?</span></h3>
                        
                        <div class="space-y-4 relative z-10">
                            <a href="{{ route('admissions') }}" class="flex items-center justify-center w-full py-5 {{ $c['bg'] }} text-white font-bold rounded-2xl hover:scale-[1.02] transition-transform shadow-lg shadow-{{ $theme }}-600/10 {{ $theme == 'amber' ? 'text-neutral-900' : '' }}">
                                Enroll Now
                            </a>
                            <button data-modal-target="inquiry-modal" data-modal-toggle="inquiry-modal" class="flex items-center justify-center w-full py-5 bg-neutral-50 text-neutral-700 border border-neutral-100 font-bold rounded-2xl hover:bg-neutral-100 transition-all">
                                Send Inquiry
                            </button>
                        </div>
                        
                        <div class="mt-10 pt-10 border-t border-neutral-50 relative z-10">
                            <span class="text-[10px] font-bold text-neutral-400 uppercase tracking-[0.2em] mb-4 block">Direct Contact</span>
                            <div class="flex items-center gap-4 group">
                                <div class="w-12 h-12 rounded-2xl {{ $c['light'] }} {{ $c['text'] }} flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i data-lucide="phone" class="w-6 h-6"></i>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm font-bold text-neutral-900 tracking-tight">(02) 8123 4567</span>
                                    <span class="text-[10px] text-neutral-400 font-medium">Monday - Friday, 8am-5pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Inquiry Modal --}}
    <div id="inquiry-modal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-0 z-[100] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-[2rem] shadow-2xl overflow-hidden">
                <div class="p-8 border-b {{ $c['border'] }} {{ $c['light'] }} flex justify-between items-center">
                    <h3 class="text-2xl font-heading font-bold text-neutral-900">Get in Touch</h3>
                    <button type="button" class="text-neutral-400 hover:text-neutral-900" data-modal-hide="inquiry-modal"><i data-lucide="x" class="w-6 h-6"></i></button>
                </div>
                <form action="#" class="p-8 space-y-6">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-widest text-neutral-500 mb-2">Full Name</label>
                        <input type="text" class="w-full bg-neutral-50 border border-neutral-100 p-4 rounded-xl focus:ring-2 {{ $c['ring'] }} outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-widest text-neutral-500 mb-2">Email Address</label>
                        <input type="email" class="w-full bg-neutral-50 border border-neutral-100 p-4 rounded-xl focus:ring-2 {{ $c['ring'] }} outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-widest text-neutral-500 mb-2">Message</label>
                        <textarea rows="4" class="w-full bg-neutral-50 border border-neutral-100 p-4 rounded-xl focus:ring-2 {{ $c['ring'] }} outline-none"></textarea>
                    </div>
                    <button type="submit" class="w-full py-5 {{ $c['bg'] }} text-white font-bold rounded-2xl shadow-lg shadow-{{ $theme }}-600/20 active:scale-95 transition-all">
                        Send Inquiry
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection