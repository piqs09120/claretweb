@extends('layouts.app')

@section('title', 'Academic Curriculum')
@section('meta_description', 'Explore the academic curriculums of St. Anthony Mary Claret College.')

@section('content')

    {{-- ── BANNER ───────────────────────────────────────────────────────────── --}}
    {{-- Cinematic video banner --}}
    <section class="relative bg-neutral-900 overflow-hidden" style="margin-top: 90px; min-height: 60vh;" data-aos="fade-in">
        {{-- Background Video --}}
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover pointer-events-none">
            {{-- Make sure to upload curriculum.mp4 to your public/videos folder --}}
            <source src="{{ asset('videos/curriculum.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        {{-- Subtle dark overlay for text readability --}}
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        {{-- Centered title content --}}
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex items-center justify-center" style="min-height: 60vh; padding-top: 60px; padding-bottom: 60px;">
            <h1 class="text-white text-5xl md:text-8xl font-heading font-medium drop-shadow-2xl" data-aos="zoom-out" data-aos-duration="1500">Academic Curriculum</h1>
        </div>
    </section>

    <x-samcc.breadcrumbs 
        :items="[
            ['label' => 'Academics', 'url' => route('home') . '#academics'],
            ['label' => 'Curriculum']
        ]" 
    />

    {{-- ── CONTENT PLACEHOLDER ──────────────────────────────────────────────── --}}
    <section class="py-20 bg-white min-h-[400px]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
            <span class="text-accent text-sm font-bold tracking-widest uppercase mb-4 block">Curriculum Details</span>
            <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-8">Coming Soon</h2>
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
            
            <p class="text-neutral-600 leading-relaxed text-lg max-w-2xl mx-auto">
                We are currently updating our curriculum details for the upcoming academic year. Please check back soon for comprehensive information regarding our course offerings and academic requirements.
            </p>
        </div>
    </section>

@endsection
