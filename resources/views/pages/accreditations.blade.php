@extends('layouts.app')

@section('title', 'Accreditations')
@section('meta_description', 'Learn about the recognized excellence and academic accreditations of St. Anthony Mary Claret College.')

@section('content')

    {{-- ── HERO SECTION ────────────────────────────────────────────────────────── --}}
    <section class="relative bg-neutral-900 overflow-hidden" style="margin-top: 90px; min-height: 60vh;" data-aos="fade-in">
        {{-- Background Video --}}
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover pointer-events-none">
            {{-- Ensure partner.mp4 exists in public/videos --}}
            <source src="{{ asset('videos/partner.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        {{-- Subtle dark overlay --}}
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        {{-- Centered title content --}}
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex items-center justify-center" style="min-height: 60vh; padding-top: 60px; padding-bottom: 60px;">
            <h1 class="text-white text-5xl md:text-8xl font-heading font-medium drop-shadow-2xl" data-aos="zoom-out" data-aos-duration="1500">Accreditations</h1>
        </div>
    </section>

    <x-samcc.breadcrumbs 
        :items="[
            ['label' => 'Accreditations']
        ]" 
    />

    {{-- ── ACCREDITATIONS CONTENT ─────────────────────────────────────────────────── --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Section Title with Animated Underline --}}
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-heading font-bold text-neutral-900 uppercase tracking-tight mb-6">
                    Accreditations, Affiliations & Partners
                </h2>
                <div class="relative w-64 h-1 bg-neutral-100 mx-auto rounded-full overflow-hidden shadow-sm">
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
            </div>

            <div class="max-w-5xl mx-auto">
                <div class="space-y-24">
                    
                    {{-- Institutional Quality --}}
                    <div data-aos="fade-up">
                        <h2 class="text-3xl md:text-5xl font-heading text-neutral-900 mb-8 border-b-2 border-accent/20 pb-4">Institutional Recognition</h2>
                    <div class="space-y-6 text-neutral-700 leading-relaxed text-lg">
                        <p>
                            St. Anthony Mary Claret College (SAMCC) is a tertiary educational institution established by the Claretian Missionaries in the Philippines. We are committed to providing quality education that integrates faith, science, and life, fully recognized by the Commission on Higher Education (CHED).
                        </p>
                        <p>
                            Our commitment to excellence is reflected in our continuous effort to align our curricula, faculty development, and student services with national and international standards. This recognition serves as a testament to our dedication to forming "agents of evangelization" who are competent, compassionate, and socially responsible.
                        </p>
                    </div>
                </div>

                {{-- CHED Compliance --}}
                <div data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-8 border-b border-primary-100 pb-4">CHED Compliance</h2>
                    <div class="space-y-6 text-neutral-700 leading-relaxed text-lg">
                        <p>
                            All academic programs offered at SAMCC, ranging from the Undergraduate Department (AB Philosophy) to the Graduate School, strictly adhere to the policies, standards, and guidelines set by the Commission on Higher Education (CHED).
                        </p>
                        <ul class="space-y-4 pt-4">
                            @foreach([
                                'Government Recognition for AB Philosophy programs.',
                                'Compliance with Graduate School standards for advanced theological and missionary studies.',
                                'Adherence to the latest educational reforms and frameworks in the Philippines.',
                                'Quality assurance through regular monitoring and evaluation.'
                            ] as $index => $item)
                                <li class="flex items-start gap-4">
                                    <div class="w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center shrink-0 mt-1">
                                        <i data-lucide="check" class="w-3.5 h-3.5"></i>
                                    </div>
                                    <span class="font-medium text-neutral-800">{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- International/Church Affiliations --}}
                <div data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-8 border-b border-primary-100 pb-4">Ecclesiastical & Global Affiliations</h2>
                    <div class="space-y-6 text-neutral-700 leading-relaxed text-lg">
                        <p>
                            As a Claretian institution, SAMCC is part of a global network of educational institutions managed by the Missionaries, Sons of the Immaculate Heart of the Blessed Virgin Mary (Claretian Missionaries). 
                        </p>
                        <p>
                            We maintain strong ties with the Institute for Consecrated Life in Asia (ICLA), providing a rich environment for missionary training and academic collaboration that spans across various nations and cultures in the Asian region.
                        </p>
                    </div>
                </div>

            </div>

            <div class="mt-24 text-center" data-aos="fade-up">
                <a href="{{ route('home') }}#accreditations" class="text-sm font-bold text-accent hover:text-red-700 transition-colors uppercase tracking-widest flex items-center justify-center gap-2">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Back to Overview
                </a>
            </div>

        </div>
    </section>

@endsection
