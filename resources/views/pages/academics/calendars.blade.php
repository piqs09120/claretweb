@extends('layouts.app')

@section('title', 'Academic Calendars')
@section('meta_description', 'View the academic calendar for the current school year at St. Anthony Mary Claret College.')

@section('content')

    {{-- Banner Section --}}
    <section class="relative bg-neutral-900 overflow-hidden" style="margin-top: 90px; min-height: 60vh;" data-aos="fade-in">
        {{-- Background Video --}}
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover pointer-events-none">
            <source src="{{ asset('videos/academic.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        {{-- Subtle dark overlay for text readability --}}
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        {{-- Centered title content --}}
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex items-center justify-center" style="min-height: 60vh; padding-top: 60px; padding-bottom: 60px;">
            <h1 class="text-white text-5xl md:text-[80px] font-heading font-medium drop-shadow-2xl" data-aos="zoom-out" data-aos-duration="1500">Academic Calendar</h1>
        </div>
    </section>

    <x-samcc.breadcrumbs 
        :items="[
            ['label' => 'Academics', 'url' => route('home') . '#academics'],
            ['label' => 'Academic Calendar']
        ]" 
    />

    {{-- Calendar Content --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-accent text-sm font-bold tracking-widest uppercase mb-4 block">School Year 2024 - 2025</span>
                <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-6">Key Dates & Deadlines</h2>
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
                <p class="text-neutral-600 leading-relaxed text-lg max-w-3xl mx-auto">
                    Stay on track with your academic journey. Below is the general academic calendar for the current school year. Dates are subject to change, so please check back regularly for updates.
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-8">
                    <a href="#" class="inline-flex items-center gap-2 px-8 py-3 bg-accent text-white font-medium rounded-full hover:bg-opacity-90 transition-all shadow-lg group">
                        <i data-lucide="download" class="w-5 h-5 group-hover:-translate-y-1 transition-transform"></i>
                        Download PDF
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mt-16">
                {{-- First Semester --}}
                <div class="relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-blue-50/30 rounded-3xl p-8 md:p-10 border border-neutral-100 shadow-sm">
                        <div class="flex items-center gap-4 mb-10">
                            <div class="w-12 h-12 rounded-2xl bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                                <i data-lucide="calendar" class="w-6 h-6"></i>
                            </div>
                            <h3 class="text-2xl font-bold font-heading text-neutral-900 border-b-2 border-accent/20 pb-1">First Semester</h3>
                        </div>
                        
                        <div class="space-y-8 relative">
                            @foreach([
                                ['date' => 'August 5 - 16', 'event' => 'Enrollment Period'],
                                ['date' => 'August 19', 'event' => 'Start of Classes'],
                                ['date' => 'October 14 - 18', 'event' => 'Midterm Examinations'],
                                ['date' => 'October 24', 'event' => 'Feast of St. Anthony Mary Claret'],
                                ['date' => 'December 16 - 20', 'event' => 'Final Examinations'],
                                ['date' => 'December 21', 'event' => 'Start of Christmas Break']
                            ] as $item)
                            <div class="flex group">
                                <div class="w-24 md:w-32 flex-shrink-0">
                                    <span class="text-accent font-bold text-xs tracking-wider uppercase">{{ $item['date'] }}</span>
                                </div>
                                <div class="flex-grow pl-4 border-l border-neutral-200">
                                    <span class="text-neutral-700 font-medium text-base leading-snug group-hover:text-accent transition-colors">{{ $item['event'] }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Second Semester --}}
                <div class="relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-blue-50/30 rounded-3xl p-8 md:p-10 border border-neutral-100 shadow-sm">
                        <div class="flex items-center gap-4 mb-10">
                            <div class="w-12 h-12 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center flex-shrink-0">
                                <i data-lucide="book-open" class="w-6 h-6"></i>
                            </div>
                            <h3 class="text-2xl font-bold font-heading text-neutral-900 border-b-2 border-secondary/20 pb-1">Second Semester</h3>
                        </div>
                        
                        <div class="space-y-8 relative">
                            @foreach([
                                ['date' => 'January 6 - 17', 'event' => 'Enrollment Period'],
                                ['date' => 'January 20', 'event' => 'Resumption of Classes'],
                                ['date' => 'March 10 - 14', 'event' => 'Midterm Examinations'],
                                ['date' => 'April 14 - 20', 'event' => 'Holy Week Break'],
                                ['date' => 'May 19 - 23', 'event' => 'Final Examinations'],
                                ['date' => 'May 30', 'event' => 'Commencement Exercises']
                            ] as $item)
                            <div class="flex group">
                                <div class="w-24 md:w-32 flex-shrink-0">
                                    <span class="text-secondary font-bold text-xs tracking-wider uppercase">{{ $item['date'] }}</span>
                                </div>
                                <div class="flex-grow pl-4 border-l border-neutral-200">
                                    <span class="text-neutral-700 font-medium text-base leading-snug group-hover:text-secondary transition-colors">{{ $item['event'] }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-16 text-center" data-aos="fade-up">
                <p class="text-xs text-neutral-400 italic">
                    * Make sure to consult the Registrar's Office for specific degree requirements or sudden schedule changes.
                </p>
            </div>
        </div>
    </section>

@endsection
