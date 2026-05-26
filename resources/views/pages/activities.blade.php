@extends('layouts.app')

@section('title', 'Student Activities')
@section('meta_description', 'Discover the vibrant student life and activities at St. Anthony Mary Claret College.')

@section('content')

    {{-- ── HERO SECTION ────────────────────────────────────────────────────────── --}}
    <section class="relative bg-neutral-900 overflow-hidden" style="margin-top: 90px; min-height: 60vh;" data-aos="fade-in">
        {{-- Background Video --}}
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover pointer-events-none">
            {{-- Ensure student life.mp4 exists in public/videos --}}
            <source src="{{ asset('videos/student life.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        {{-- Subtle dark overlay --}}
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        {{-- Centered title content --}}
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex items-center justify-center" style="min-height: 60vh; padding-top: 60px; padding-bottom: 60px;">
            <h1 class="text-white text-5xl md:text-8xl font-heading font-medium drop-shadow-2xl" data-aos="zoom-out" data-aos-duration="1500">Student Life</h1>
        </div>
    </section>

    <x-samcc.breadcrumbs 
        :items="[
            ['label' => 'Student Life']
        ]" 
    />

    {{-- ── ACTIVITIES CONTENT ─────────────────────────────────────────────────── --}}
    <section class="py-24 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="space-y-24">
                
                {{-- Philosophical Journal --}}
                <div data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-8 border-b border-primary-100 pb-4">Philosophical Journal</h2>
                    <div class="space-y-6 text-neutral-700 leading-relaxed text-lg">
                        <p>
                            In alignment with the college's vision and mission, and with the aim of enhancing students' philosophical competence and research skills, the establishment of an undergraduate philosophy journal was initiated during the academic year 2020-2021.
                        </p>
                        <p>
                            This journal serves as a platform for students to contribute to the field of Philosophy and elevate the level of discourse within society. It is an ongoing activity at SAMCC, providing students with the opportunity to showcase their scholarly work and contribute to the broader body of knowledge in Philosophy.
                        </p>
                    </div>
                </div>

                {{-- Student Government --}}
                <div data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-8 border-b border-primary-100 pb-4">Student Government</h2>
                    <div class="space-y-6 text-neutral-700 leading-relaxed text-lg">
                        <p>
                            <span class="font-bold text-neutral-900">The Claret College Student Organization (CCSO)</span> serves as the student government for the Undergraduate Department, dedicated to advancing the interests and aspirations of the college while upholding high ideals and principles.
                        </p>
                        <p>
                            The organization aims to nurture, train, and cultivate students into effective missionaries and leaders for the church and the country. Each academic year, students participate in the election of the Officers of the Executive Board, consisting of the Servant Leader, Assistant Servant Leader, Secretary, and Treasurer.
                        </p>
                        <p>
                            The CCSO operates under a Constitution and By-laws, providing a framework for its governance and activities.
                        </p>
                    </div>
                </div>

                {{-- Daop Palad --}}
                <div data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-8 border-b border-primary-100 pb-4">Daop Palad</h2>
                    <div class="space-y-6 text-neutral-700 leading-relaxed text-lg">
                        <p>
                            The Annual SAMCC Family Day, called <span class="italic font-medium">Daop Palad</span>, is a whole-day activity held a month after the start of each academic year, fostering camaraderie, teamwork, and a sense of belonging in the college community, spearheaded by the CCSO and committee chairs.
                        </p>
                    </div>
                </div>

                {{-- Development Week --}}
                <div data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-8 border-b border-primary-100 pb-4">Development Week and Development Day</h2>
                    <div class="h-1 bg-neutral-900 w-full mb-8"></div>
                </div>

                {{-- RCW Office --}}
                <div data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-8 border-b border-primary-100 pb-4">Research and Creative Works (RCW) Office</h2>
                    <div class="space-y-6 text-neutral-700 leading-relaxed text-lg">
                        <p>
                            The St. Anthony Mary Claret College (SAMCC) Graduate School maintains a Research and Creative Works (RCW) Office, which is tasked with developing and implementing mechanisms for planning, managing, conducting, and evaluating research and creative works across its graduate programs.
                        </p>
                        <ul class="space-y-4 pt-4">
                            @foreach([
                                'Provides strategic direction for the research agenda of the graduate school.',
                                'Monitors compliance with CHED policies and standards.',
                                'Ensures quality assurance in the preparation, conduct, and dissemination of RCW.',
                                'Facilitates capacity-building initiatives for faculty and students in research methodologies, publication, and innovation.'
                            ] as $index => $item)
                                <li class="flex items-start gap-4">
                                    <span class="font-bold text-primary-600">{{ $index + 1 }}.</span>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            <div class="mt-24 text-center" data-aos="fade-up">
                <a href="{{ route('home') }}#activities" class="text-sm font-bold text-primary-600 hover:text-primary-700 transition-colors uppercase tracking-widest flex items-center justify-center gap-2">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Back to Overview
                </a>
            </div>

        </div>
    </section>

@endsection
