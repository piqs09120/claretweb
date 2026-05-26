@extends('layouts.app')

@section('title', 'Admissions')
@section('meta_description', 'Admission application procedures for St. Anthony Mary Claret College for Academic Year 2025-2026.')

@section('content')

    {{-- ── BANNER ───────────────────────────────────────────────────────────── --}}
    {{-- Cinematic video banner --}}
    <section class="relative bg-neutral-900 overflow-hidden" style="margin-top: 90px; min-height: 60vh;" data-aos="fade-in">
        {{-- Background Video --}}
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover pointer-events-none">
            <source src="{{ asset('videos/admission.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        {{-- Subtle dark overlay for text readability --}}
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        {{-- Centered title content --}}
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex items-center justify-center" style="min-height: 60vh; padding-top: 60px; padding-bottom: 60px;">
            <h1 class="text-white text-5xl md:text-8xl font-heading font-medium drop-shadow-2xl" data-aos="zoom-out" data-aos-duration="1500">Admissions</h1>
        </div>
    </section>

    <x-samcc.breadcrumbs 
        :items="[
            ['label' => 'Admissions', 'url' => route('home') . '#admissions'],
            ['label' => 'Requirements & Qualifications']
        ]" 
    />

    {{-- ── PROCEDURES ──────────────────────────────────────────────────────────── --}}
    <section class="py-24 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-neutral-900 uppercase tracking-wide mb-6">Requirements & Qualifications</h2>
                <span class="text-accent font-bold text-sm tracking-widest uppercase block mb-6">Academic Year 2025&ndash;2026</span>
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

            <div class="max-w-4xl mx-auto space-y-16 text-neutral-700 leading-relaxed">
                {{-- Steps --}}
                <div class="space-y-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start gap-6 bg-neutral-50 p-6 rounded-2xl border border-neutral-100">
                        <span class="flex-shrink-0 w-12 h-12 rounded-full bg-accent text-white flex items-center justify-center font-heading font-bold text-xl shadow-md">1</span>
                        <div>
                            <h3 class="font-heading font-bold text-neutral-900 text-2xl mb-2">Obtain an Application Form</h3>
                            <p class="text-lg">Secure your application form directly from the SAMCC Admissions Office.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-6 bg-neutral-50 p-6 rounded-2xl border border-neutral-100">
                        <span class="flex-shrink-0 w-12 h-12 rounded-full bg-accent text-white flex items-center justify-center font-heading font-bold text-xl shadow-md">2</span>
                        <div>
                            <h3 class="font-heading font-bold text-neutral-900 text-2xl mb-2">Submit Required Documents</h3>
                            <p class="text-lg">Prepare and submit the application form along with the specific requirements listed below in one long folder.</p>
                        </div>
                    </div>
                </div>

                {{-- Requirements Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 pt-8 border-t border-neutral-200" data-aos="fade-up" data-aos-delay="200">
                    {{-- Filipino Students --}}
                    <div class="space-y-6">
                        <h3 class="text-2xl font-bold font-heading text-neutral-900 border-b-2 border-accent pb-3">For Filipino Students</h3>
                        <ul class="space-y-4">
                            @foreach([
                                'Duly accomplished Application Form with a recent 2x2 photo',
                                'Photocopy of Birth Certificate (original must be presented for verification)',
                                'Certificate of Good Moral Character from the last school attended',
                                'Form 138 (for incoming freshmen) or Transcript of Records (for transferees)',
                                'Certification of English Language Proficiency issued by SAMCC (at least Upper-Intermediate)',
                                'Successful completion of ProCEP (if applicable)',
                                'Written Recommendation from Congregation or Diocese'
                            ] as $req)
                                <li class="flex items-start gap-4">
                                    <div class="w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                    <span class="text-neutral-800">{{ $req }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Foreign Students --}}
                    <div class="space-y-6">
                        <h3 class="text-2xl font-bold font-heading text-neutral-900 border-b-2 border-accent pb-3">For Foreign Students</h3>
                        <ul class="space-y-4">
                            @foreach([
                                'Duly accomplished Application Form with a recent 2x2 photo',
                                'Photocopy of Birth Certificate',
                                'Certificate of Good Moral Character',
                                'Photocopy of Appropriate Visa (original must be presented)',
                                'Authenticated Transcript of Records (translated to English)',
                                'Certification of English Language Proficiency (at least Upper-Intermediate)',
                                'Written Recommendation from Congregation or Diocese'
                            ] as $req)
                                <li class="flex items-start gap-4">
                                    <div class="w-6 h-6 rounded-full bg-accent/10 text-accent flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <i data-lucide="check" class="w-4 h-4"></i>
                                    </div>
                                    <span class="text-neutral-800">{{ $req }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- Additional Info & Important Box --}}
                <div class="space-y-8 pt-8" data-aos="fade-up" data-aos-delay="300">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
                        <div class="bg-primary/5 p-6 rounded-2xl border border-primary/10">
                            <span class="font-bold text-accent block mb-2">Testing Fee</span>
                            <p>Upon completion and verification of requirements, proceed to the Cashier to pay the Testing Fee.</p>
                        </div>
                        <div class="bg-primary/5 p-6 rounded-2xl border border-primary/10">
                            <span class="font-bold text-accent block mb-2">Assessment Test</span>
                            <p>Bring two (2) ballpoint pens for the mandatory three-day English Proficiency Assessment (EPA).</p>
                        </div>
                        <div class="bg-primary/5 p-6 rounded-2xl border border-primary/10">
                            <span class="font-bold text-accent block mb-2">Releasing of Results</span>
                            <p>Test results are officially released approximately one week after the examination dates.</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                        <i data-lucide="info" class="flex-shrink-0 inline w-4 h-4 me-3"></i>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Note:</span> The three-day English Proficiency Assessment (EPA) is administered to all incoming SAMCC students to purely evaluate four fundamental language skills: Grammar, Listening, Writing, and Speaking.
                        </div>
                    </div>

                    {{-- Program Specifics --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-8 border-t border-neutral-200">
                        <div>
                            <h4 class="font-bold text-neutral-900 border-b border-neutral-200 pb-2 mb-3">First Year A.B. Philosophy</h4>
                            <p class="text-sm text-neutral-600">Scores below Upper-Intermediate require enrollment in ProCEP for two semesters instead of immediate full entry.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-neutral-900 border-b border-neutral-200 pb-2 mb-3">Transferees & Certificate Enrollees</h4>
                            <p class="text-sm text-neutral-600">Scores below Upper-Intermediate require taking English 1 and English 2 in addition to the regular subjects.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-16 text-center" data-aos="fade-up">
                <a href="{{ route('home') }}#admissions" class="text-white bg-accent hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-accent dark:hover:bg-red-700 dark:focus:ring-red-800 uppercase tracking-widest transition-all">
                    <i data-lucide="arrow-left" class="w-4 h-4 me-2"></i>
                    Back to Overview
                </a>
            </div>

        </div>
    </section>

@endsection
