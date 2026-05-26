@extends('layouts.app')

@section('title', 'Faculty & Mentors')
@section('meta_description', 'Meet the esteemed faculty and mentors of St. Anthony Mary Claret College.')

@section('content')

    {{-- ── BANNER ───────────────────────────────────────────────────────────── --}}
    {{-- Cinematic video banner --}}
    <section class="relative bg-neutral-900 overflow-hidden" style="margin-top: 90px; min-height: 60vh;" data-aos="fade-in">
        {{-- Background Video --}}
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover pointer-events-none">
            {{-- Make sure to upload faculty.mp4 to your public/videos folder --}}
            <source src="{{ asset('videos/faculty.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        {{-- Subtle dark overlay for text readability --}}
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        {{-- Centered title content --}}
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex items-center justify-center" style="min-height: 60vh; padding-top: 60px; padding-bottom: 60px;">
            <h1 class="text-white text-5xl md:text-8xl font-heading font-medium drop-shadow-2xl" data-aos="zoom-out" data-aos-duration="1500">Faculty & Mentors</h1>
        </div>
    </section>

    <x-samcc.breadcrumbs 
        :items="[
            ['label' => 'Academics', 'url' => route('home') . '#academics'],
            ['label' => 'Faculty & Mentors']
        ]" 
    />

    {{-- ── FACULTY INTRODUCTION ─────────────────────────────────────────────── --}}
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-accent text-sm font-bold tracking-widest uppercase mb-4 block">Our Dedicated Team</span>
                <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-6">Guiding Light & Wisdom</h2>
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
                    Our faculty comprises seasoned educators, religious leaders, and industry professionals dedicated to the holistic formation of our students. They bring a wealth of knowledge, experience, and spiritual guidance to the Claretian community.
                </p>
            </div>

            {{-- FACULTY PROFILES (Static Content Example) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                
                {{-- Mentor 1 --}}
                <div class="group relative overflow-hidden rounded-3xl border border-neutral-100 shadow-sm bg-neutral-50" data-aos="fade-up" data-aos-delay="100">
                    <div class="aspect-w-4 aspect-h-3 bg-neutral-200">
                        {{-- Replace with actual faculty photo --}}
                        <img src="https://ui-avatars.com/api/?name=Dr+Juan+Dela+Cruz&background=B91C1C&color=fff&size=512&font-size=0.33" alt="Faculty Member" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-8 relative z-10 bg-neutral-50 group-hover:bg-white transition-colors duration-300">
                        <span class="text-accent text-xs font-bold tracking-widest uppercase mb-2 block">Dean of Theology</span>
                        <h3 class="text-2xl font-heading text-neutral-900 mb-3">Dr. Juan Dela Cruz</h3>
                        <p class="text-neutral-600 text-sm leading-relaxed mb-6">
                            With over 20 years of experience in theological studies and pastoral care, Dr. Dela Cruz leads the theological department with profound wisdom and dedication to the Claretian mission.
                        </p>
                    </div>
                </div>

                {{-- Mentor 2 --}}
                <div class="group relative overflow-hidden rounded-3xl border border-neutral-100 shadow-sm bg-neutral-50" data-aos="fade-up" data-aos-delay="200">
                    <div class="aspect-w-4 aspect-h-3 bg-neutral-200">
                        {{-- Replace with actual faculty photo --}}
                        <img src="https://ui-avatars.com/api/?name=Rev+Fr+Antonio+Reyes&background=B91C1C&color=fff&size=512&font-size=0.33" alt="Faculty Member" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-8 relative z-10 bg-neutral-50 group-hover:bg-white transition-colors duration-300">
                        <span class="text-accent text-xs font-bold tracking-widest uppercase mb-2 block">Professor of Philosophy</span>
                        <h3 class="text-2xl font-heading text-neutral-900 mb-3">Rev. Fr. Antonio Reyes, CMF</h3>
                        <p class="text-neutral-600 text-sm leading-relaxed mb-6">
                            Fr. Reyes specializes in ancient philosophy and ethics. He integrates deep philosophical inquiry with the spiritual formation of students, encouraging critical thinking grounded in faith.
                        </p>
                    </div>
                </div>

                {{-- Mentor 3 --}}
                <div class="group relative overflow-hidden rounded-3xl border border-neutral-100 shadow-sm bg-neutral-50" data-aos="fade-up" data-aos-delay="300">
                    <div class="aspect-w-4 aspect-h-3 bg-neutral-200">
                        {{-- Replace with actual faculty photo --}}
                        <img src="https://ui-avatars.com/api/?name=Prof+Maria+Santos&background=B91C1C&color=fff&size=512&font-size=0.33" alt="Faculty Member" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-8 relative z-10 bg-neutral-50 group-hover:bg-white transition-colors duration-300">
                        <span class="text-accent text-xs font-bold tracking-widest uppercase mb-2 block">Instructor of Missiology</span>
                        <h3 class="text-2xl font-heading text-neutral-900 mb-3">Prof. Maria Santos</h3>
                        <p class="text-neutral-600 text-sm leading-relaxed mb-6">
                            An expert in cross-cultural missions and missiology, Prof. Santos has extensive field experience across Asia. She brings real-world missionary perspectives to her classroom.
                        </p>
                    </div>
                </div>

                {{-- Mentor 4 --}}
                <div class="group relative overflow-hidden rounded-3xl border border-neutral-100 shadow-sm bg-neutral-50" data-aos="fade-up" data-aos-delay="400">
                    <div class="aspect-w-4 aspect-h-3 bg-neutral-200">
                        {{-- Replace with actual faculty photo --}}
                        <img src="https://ui-avatars.com/api/?name=Dr+Ricardo+Lim&background=B91C1C&color=fff&size=512&font-size=0.33" alt="Faculty Member" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-8 relative z-10 bg-neutral-50 group-hover:bg-white transition-colors duration-300">
                        <span class="text-accent text-xs font-bold tracking-widest uppercase mb-2 block">Department Chair, Biblical Studies</span>
                        <h3 class="text-2xl font-heading text-neutral-900 mb-3">Dr. Ricardo Lim</h3>
                        <p class="text-neutral-600 text-sm leading-relaxed mb-6">
                            Dr. Lim's passion for Scripture and biblical languages animates his teaching. He guides students in uncovering the profound truths of the Bible for modern pastoral application.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
