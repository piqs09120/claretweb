@extends('layouts.app')

@section('title', '')
@section('meta_description', 'St. Anthony Mary Claret College — A private Catholic institution in Quezon City offering quality education in the Claretian tradition.')

@section('content')

    {{-- HERO SECTION --}}
    <section id="top" class="relative w-full h-screen min-h-[800px] overflow-hidden bg-black">
        {{-- Background Video --}}
        <video autoplay muted loop playsinline
            class="absolute inset-0 w-full h-full object-cover scale-105 pointer-events-none" data-aos="zoom-out"
            data-aos-duration="3000">
            <source src="{{ asset('videos/home.mp4') }}?update={{ rand(10000, 99999) }}" type="video/mp4">
        </video>

        {{-- No overlay applied to preserve original video colors --}}

        <div class="relative z-10 h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center">
            <div class="max-w-4xl pt-20">
                <span
                    class="block text-white/90 font-bold text-sm md:text-base tracking-[0.4em] uppercase mb-6 drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)]"
                    data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000">
                    A Commitment to Excellence
                </span>

                <h1
                    class="text-white text-5xl md:text-7xl lg:text-[90px] font-heading font-medium leading-[1.1] mb-8 drop-shadow-2xl">
                    <div data-aos="fade-right" data-aos-delay="400" data-aos-duration="1200">
                        <span class="block animate-float" style="animation-delay: 0s;">St. Anthony</span>
                    </div>
                    <div data-aos="fade-right" data-aos-delay="600" data-aos-duration="1200">
                        <span class="block text-accent italic font-light animate-float" style="animation-delay: 0.2s;">Mary
                            Claret</span>
                    </div>
                    <div data-aos="fade-right" data-aos-delay="800" data-aos-duration="1200">
                        <span class="block animate-float" style="animation-delay: 0.4s;">College</span>
                    </div>
                </h1>

                <p class="text-neutral-200 text-lg md:text-xl max-w-2xl mb-12 font-sans font-light drop-shadow-md"
                    data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1200">
                    Forming students as agents of evangelization through a modern, rigorous, and holistic Catholic
                    education.
                </p>

                <div class="flex flex-wrap justify-start gap-6" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <a href="{{ route('academics') }}"
                        class="px-10 py-4 bg-accent text-white font-medium text-sm tracking-widest uppercase rounded-full hover:brightness-110 hover:scale-[1.02] transition-all duration-300 shadow-glow">
                        Discover Programs
                    </a>
                    <a href="#about"
                        class="px-10 py-4 border border-white/50 text-white font-medium text-sm tracking-widest uppercase rounded-full hover:bg-white hover:text-accent hover:border-white hover:scale-105 transition-all duration-300 backdrop-blur-sm">
                        About Us
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-12 left-1/2 -translate-x-1/2 text-white/80 animate-bounce drop-shadow">
            <i data-lucide="mouse" class="w-6 h-6"></i>
        </div>
    </section>

    {{-- ABOUT SECTION --}}
    <section id="about" class="py-32 bg-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative group" data-aos="fade-right" data-aos-duration="1000">
                    <div
                        class="absolute -inset-2 bg-accent/20 blur-2xl rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    </div>
                    <img src="{{ asset('images/acad.jpg') }}" alt="Campus Life"
                        class="relative rounded-[2rem] shadow-premium object-cover h-[600px] w-full transform group-hover:-translate-y-2 transition-transform duration-500 border border-neutral-200">
                </div>

                <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <span class="text-accent text-xs font-semibold tracking-[0.3em] uppercase mb-4 block">About the
                        College</span>
                    <h2 class="text-4xl md:text-5xl lg:text-5xl font-heading text-textmain mb-8 leading-tight font-medium">
                        Claretian Formation<br>
                        <span class="text-accent italic font-light">Begins With Us</span>
                    </h2>
                    <div class="w-16 h-px bg-accent/50 mb-8"></div>
                    <div class="space-y-6 text-subtext font-light text-lg leading-relaxed mb-10">
                        <p>
                            Founded in 1984, St. Anthony Mary Claret College is a premier Catholic educational institution
                            in Quezon City. We are deeply committed to forming students as active agents of evangelization
                            and positive change in society.
                        </p>
                        <p>
                            Guided by the ideals of St. Anthony Mary Claret, our programs focus on the integral formation of
                            the human person. We believe in providing an education where knowledge is elevated by profound
                            virtue—"Scientia Maxime Cum Virtute".
                        </p>
                    </div>
                    <a href="{{ route('about') }}"
                        class="inline-flex items-center gap-2 px-10 py-4 bg-accent text-white font-bold text-sm tracking-widest uppercase rounded-sm hover:brightness-110 hover:scale-[1.02] transition-all duration-300 shadow-lg group">
                        Learn More
                        <i data-lucide="arrow-right"
                            class="ml-1 w-5 h-5 transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="academics" class="py-24 md:py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">

                {{-- Left Side: Content --}}
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-accent text-sm font-bold tracking-[0.2em] uppercase">ACADEMICS</span>
                        <div class="w-16 h-[2px] bg-accent"></div>
                    </div>

                    <h2 class="text-5xl md:text-7xl font-heading font-medium leading-[1.1] mb-8 text-neutral-900">
                        Academic Excellence <br>
                        <span class="italic">at Your Fingertips</span>
                    </h2>

                    <p class="text-neutral-600 text-lg leading-relaxed mb-10 max-w-xl font-sans font-light">
                        St. Anthony Mary Claret College is dedicated to maintaining the highest standards of academic
                        excellence. Our programs are recognized and accredited by leading educational bodies, ensuring that
                        our students receive a globally competitive education.
                    </p>

                    <a href="{{ route('academics') }}"
                        class="inline-block px-10 py-5 bg-accent text-white font-bold text-sm tracking-widest uppercase rounded-sm hover:brightness-110 hover:scale-[1.02] transition-all duration-300 shadow-lg active:scale-95">
                        LEARN MORE
                    </a>
                </div>

                {{-- Right Side: Staggered Cards --}}
                <div class="w-full lg:w-1/2 relative min-h-[500px] md:min-h-[650px] flex items-center mt-20 lg:mt-0"
                    data-aos="fade-left">
                    <div class="relative w-full max-w-lg mx-auto lg:ml-auto lg:mr-0">

                        {{-- Top Card: Bachelor's --}}
                        <div
                            class="bg-[#002147] text-white p-8 md:p-10 rounded-sm shadow-2xl relative lg:absolute lg:-top-64 lg:right-0 w-full lg:w-[90%] z-30 group hover:-translate-y-2 transition-transform duration-500 mb-6 lg:mb-0">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-2xl font-bold font-heading text-white">Bachelor's Degrees</h3>
                                <div
                                    class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center group-hover:bg-white group-hover:text-[#002147] transition-colors">
                                    <i data-lucide="arrow-up-right" class="w-5 h-5"></i>
                                </div>
                            </div>
                            <p class="text-white/80 text-sm md:text-base leading-relaxed font-light">
                                Offering a holistic Bachelor of Arts Major in Philosophy, designed for future leaders,
                                religious aspirants, and individuals seeking profound understanding.
                            </p>
                        </div>

                        {{-- Middle Card: Master's --}}
                        <div
                            class="bg-[#005DAA] text-white p-8 md:p-10 rounded-sm shadow-2xl relative lg:absolute lg:top-0 lg:-left-12 w-full lg:w-[90%] z-20 group hover:-translate-y-2 transition-transform duration-500 mb-6 lg:mb-0 lg:scale-105">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-2xl font-bold font-heading text-white">Master's Degrees</h3>
                                <div
                                    class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center group-hover:bg-white group-hover:text-[#005DAA] transition-colors">
                                    <i data-lucide="arrow-up-right" class="w-5 h-5"></i>
                                </div>
                            </div>
                            <p class="text-white/80 text-sm md:text-base leading-relaxed font-light">
                                The Institute for Consecrated Life in Asia offers advanced ecclesiastical degrees in
                                Theology and Pastoral Ministry, incorporated with UST.
                            </p>
                        </div>

                        {{-- Bottom Card: Doctoral --}}
                        <div
                            class="bg-[#002147] text-white p-8 md:p-10 rounded-sm shadow-2xl relative lg:absolute lg:top-64 lg:right-0 w-full lg:w-[90%] z-10 group hover:-translate-y-2 transition-transform duration-500">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-2xl font-bold font-heading text-white">Doctoral Degrees</h3>
                                <div
                                    class="w-8 h-8 rounded-full border border-white/30 flex items-center justify-center group-hover:bg-white group-hover:text-[#002147] transition-colors">
                                    <i data-lucide="arrow-up-right" class="w-5 h-5"></i>
                                </div>
                            </div>
                            <p class="text-white/80 text-sm md:text-base leading-relaxed font-light">
                                Advanced research and specializations in theological studies and institutional leadership
                                for global impact and spiritual formation.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- CAMPUS LIFE (GRID 2x2) --}}
    <section class="py-24 md:py-32 bg-[#EBF1FA]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span class="text-accent text-xs font-bold tracking-[0.3em] uppercase mb-4 block">CAMPUS LIFE</span>
                <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-6 leading-tight">Grow & Develop your <br>
                    <span class="italic">Soft Skills Everywhere</span>
                </h2>
                <div class="w-20 h-px bg-accent/50 mx-auto mb-8"></div>
                <p class="text-neutral-500 font-sans font-light leading-relaxed text-lg">
                    St. Anthony Mary Claret College provides an environment that nurtures holistic growth, encouraging
                    students to develop essential life skills through diverse campus activities.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Card 1: Student Organizations & Clubs --}}
                <div class="relative h-[500px] rounded-[2rem] overflow-hidden group shadow-lg" data-aos="fade-up"
                    data-aos-delay="100">
                    <img src="{{ asset('images/student_orgs.jpg') }}" onerror="this.src='{{ asset('images/room.jpg') }}'"
                        alt="Student Organizations"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div
                        class="absolute bottom-6 left-6 right-6 bg-accent p-8 rounded-2xl border border-white/10 shadow-2xl">
                        <h3 class="text-white text-2xl font-heading font-bold mb-3">Student Organizations & Clubs</h3>
                        <p class="text-white/80 text-sm leading-relaxed">
                            Join vibrant student organizations that foster leadership, teamwork, and a sense of belonging in
                            the Claretian community.
                        </p>
                    </div>
                </div>

                {{-- Card 2: Arts, Culture & Sports --}}
                <div class="relative h-[500px] rounded-[2rem] overflow-hidden group shadow-lg" data-aos="fade-up"
                    data-aos-delay="200">
                    <img src="{{ asset('images/arts_sports.jpg') }}" onerror="this.src='{{ asset('images/library.jpg') }}'"
                        alt="Arts & Sports"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div
                        class="absolute bottom-6 left-6 right-6 bg-white p-8 rounded-2xl border border-neutral-100 shadow-2xl">
                        <h3 class="text-neutral-900 text-2xl font-heading font-bold mb-3">Arts, Culture & Sports at SAMCC
                        </h3>
                        <p class="text-neutral-500 text-sm leading-relaxed">
                            Express your creativity and stay active through our programs in arts, cultural activities, and
                            competitive sports.
                        </p>
                    </div>
                </div>

                {{-- Card 3: Volunteer and Lead --}}
                <div class="relative h-[500px] rounded-[2rem] overflow-hidden group shadow-lg" data-aos="fade-up"
                    data-aos-delay="300">
                    <img src="{{ asset('images/volunteer.jpg') }}" onerror="this.src='{{ asset('images/acad.jpg') }}'"
                        alt="Volunteer"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div
                        class="absolute bottom-6 left-6 right-6 bg-white p-8 rounded-2xl border border-neutral-100 shadow-2xl">
                        <h3 class="text-neutral-900 text-2xl font-heading font-bold mb-3">Volunteer and Lead with Impact
                        </h3>
                        <p class="text-neutral-500 text-sm leading-relaxed">
                            Engage in meaningful community service and leadership development that leaves a lasting positive
                            impact.
                        </p>
                    </div>
                </div>

                {{-- Card 4: Campus Events --}}
                <div class="relative h-[500px] rounded-[2rem] overflow-hidden group shadow-lg" data-aos="fade-up"
                    data-aos-delay="400">
                    <img src="{{ asset('images/events.jpg') }}" onerror="this.src='{{ asset('images/clareta.webp') }}'"
                        alt="Campus Events"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div
                        class="absolute bottom-6 left-6 right-6 bg-accent p-8 rounded-2xl border border-white/10 shadow-2xl">
                        <h3 class="text-white text-2xl font-heading font-bold mb-3">Campus Events & Traditions</h3>
                        <p class="text-white/80 text-sm leading-relaxed">
                            Celebrate the unique traditions and annual events that bring the SAMCC family together in faith
                            and joy.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY SAMCC SECTION (PRECISE MATCH) --}}
    <section class="py-24 md:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Header Layout --}}
            <div class="flex flex-col lg:flex-row items-start justify-between mb-24 gap-12" data-aos="fade-up">
                <div class="w-full lg:w-[55%]">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-[#D32F2F] text-xs font-bold tracking-[0.15em] uppercase">WHY SAMCC?</span>
                        <div class="w-20 h-px bg-[#D32F2F]/30"></div>
                    </div>
                    <h2 class="text-4xl md:text-[42px] font-sans font-bold text-[#1A1A1A] leading-[1.2]">
                        Why We Are the Right Fit for <br> Your Educational Future
                    </h2>
                </div>
                <div class="w-full lg:w-[45%] pt-12 md:pt-14 lg:pt-10">
                    <p class="text-[#888888] font-sans text-[15px] leading-[1.8] max-w-lg">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-0 items-stretch">
                {{-- Left: Image with Blue Block --}}
                <div class="w-full lg:w-[42%] relative" data-aos="fade-right">
                    {{-- Blue Rectangle (Behind bottom-left) - Shortened on the right --}}
                    <div class="absolute -bottom-8 -left-32 w-72 h-36 bg-[#0072BB] z-0"></div>

                    {{-- Main Image --}}
                    <div class="relative z-10 w-full rounded-sm overflow-hidden h-[550px]">
                        <img src="{{ asset('images/acad.jpg') }}" onerror="this.src='{{ asset('images/room.jpg') }}'"
                            alt="Success Student" class="w-full h-full object-cover">
                    </div>
                </div>

                {{-- Right: 2x2 Feature Grid (Alternating) --}}
                <div class="w-full lg:w-[58%] grid grid-cols-1 md:grid-cols-2 gap-0">
                    {{-- Card 1: Top-Left (Gray) --}}
                    <div class="bg-[#F0F2F5] p-12 lg:p-14 flex flex-col items-start" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="mb-8">
                            <i data-lucide="building-2" class="w-8 h-8 text-[#D32F2F]"></i>
                        </div>
                        <h3 class="text-lg font-bold text-[#1A1A1A] mb-4 font-sans">Industry Connected Learning</h3>
                        <p class="text-[#777777] font-sans text-sm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>

                    {{-- Card 2: Top-Right (White) --}}
                    <div class="bg-white p-12 lg:p-14 flex flex-col items-start border-b border-neutral-50"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="mb-8">
                            <i data-lucide="school" class="w-8 h-8 text-[#D32F2F]"></i>
                        </div>
                        <h3 class="text-lg font-bold text-[#1A1A1A] mb-4 font-sans">Cutting-Edge Campus Facilities</h3>
                        <p class="text-[#777777] font-sans text-sm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>

                    {{-- Card 3: Bottom-Left (White) --}}
                    <div class="bg-white p-12 lg:p-14 flex flex-col items-start border-r border-neutral-50"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="mb-8">
                            <i data-lucide="users" class="w-8 h-8 text-[#D32F2F]"></i>
                        </div>
                        <h3 class="text-lg font-bold text-[#1A1A1A] mb-4 font-sans">Your Mentors for Success</h3>
                        <p class="text-[#777777] font-sans text-sm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>

                    {{-- Card 4: Bottom-Right (Gray) --}}
                    <div class="bg-[#F0F2F5] p-12 lg:p-14 flex flex-col items-start" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="mb-8">
                            <i data-lucide="globe" class="w-8 h-8 text-[#D32F2F]"></i>
                        </div>
                        <h3 class="text-lg font-bold text-[#1A1A1A] mb-4 font-sans">Collaboration Across Worlds</h3>
                        <p class="text-[#777777] font-sans text-sm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ADMISSIONS SECTION (REDESIGNED) --}}
    <section id="admissions" class="pt-24 md:pt-32 pb-0 bg-[#EBF1FA] overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Header --}}
            <div class="text-center max-w-4xl mx-auto mb-20" data-aos="fade-up">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <div class="w-8 h-[2px] bg-accent"></div>
                    <span class="text-accent text-xs font-bold tracking-[0.2em] uppercase">How to Apply</span>
                    <div class="w-8 h-[2px] bg-accent"></div>
                </div>
                <h2 class="text-4xl md:text-6xl font-heading font-medium text-neutral-900 leading-tight mb-8">
                    Your Journey Starts Here, <br>
                    Steps to Your Educational Success
                </h2>
                <p class="text-neutral-500 font-sans font-light leading-relaxed text-lg max-w-2xl mx-auto">
                    St. Anthony Mary Claret College provides a clear and structured application process to help you begin
                    your academic journey with confidence.
                </p>
            </div>

            {{-- Timeline Process --}}
            <div class="relative max-w-6xl mx-auto px-4 sm:px-0 mb-32">
                {{-- Vertical Dotted Line (Center) --}}
                <div
                    class="absolute left-1/2 top-4 bottom-4 w-px border-l-2 border-dashed border-neutral-200 -translate-x-1/2 hidden lg:block">
                </div>

                <div class="space-y-12 lg:space-y-0 relative">
                    @php
                        $steps = [
                            ['num' => '1', 'title' => 'Choose Your Faculty and Program', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'],
                            ['num' => '2', 'title' => 'Review Admission Requirements', 'desc' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
                            ['num' => '3', 'title' => 'Submit Document Requirements', 'desc' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'],
                            ['num' => '4', 'title' => 'Application Review and Interview', 'desc' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
                            ['num' => '5', 'title' => 'Receive Your Admission Decision', 'desc' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.'],
                        ];
                    @endphp

                    @foreach($steps as $index => $step)
                        <div class="flex flex-col lg:flex-row items-center lg:min-h-[160px] group" data-aos="fade-up"
                            data-aos-delay="{{ $index * 100 }}">
                            {{-- Left Side: Number & Title --}}
                            <div class="w-full lg:w-[45%] flex items-center lg:justify-start gap-6 mb-4 lg:mb-0">
                                <div
                                    class="flex-shrink-0 w-12 h-12 rounded-full bg-accent text-white flex items-center justify-center font-bold text-lg shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    {{ $step['num'] }}
                                </div>
                                <div class="text-left">
                                    <h3
                                        class="text-xl md:text-2xl font-bold font-heading text-neutral-900 leading-tight transition-colors duration-300">
                                        {{ $step['title'] }}
                                    </h3>
                                </div>
                            </div>

                            {{-- Center Dot --}}
                            <div class="w-full lg:w-[10%] flex justify-center relative my-4 lg:my-0">
                                <div
                                    class="w-4 h-4 rounded-full bg-accent border-4 border-white shadow-sm z-10 hidden lg:block group-hover:scale-125 transition-transform duration-300">
                                </div>
                                {{-- Mobile Line --}}
                                <div class="w-px h-8 border-l-2 border-dashed border-neutral-200 lg:hidden"></div>
                            </div>

                            {{-- Right Side: Description --}}
                            <div class="w-full lg:w-[45%] lg:pl-6">
                                <p class="text-neutral-500 font-sans font-light leading-relaxed">
                                    {{ $step['desc'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

        {{-- CTA Banner (Full-width edge-to-edge) --}}
        <div class="w-full bg-gradient-to-r from-[#005DAA] to-[#002147] relative group shadow-xl overflow-hidden mt-20"
            data-aos="fade-up">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row items-center">
                    {{-- Image Side --}}
                    <div class="w-full md:w-1/3 h-56 md:h-[350px] relative overflow-hidden bg-white/10">
                        <img src="{{ asset('images/acad.jpg') }}" alt="Student"
                            class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-60 group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent to-[#005DAA]/50"></div>
                    </div>

                    {{-- Text Side --}}
                    <div class="w-full md:w-2/3 p-8 md:p-12 lg:p-14 text-center md:text-left relative z-10">
                        <h2 class="text-3xl md:text-5xl font-heading text-white font-bold leading-tight mb-6">
                            Embrace Visibility Without <br class="hidden md:block">
                            losing Your Passion for Learning
                        </h2>
                        <p class="text-white/80 font-sans font-light text-lg mb-10 max-w-2xl">
                            Join a community where academic rigor meets spiritual depth. Learn, grow, and become who you
                            were meant to be.
                        </p>
                        <div class="flex flex-wrap items-center justify-center md:justify-start gap-4">
                            <a href="{{ route('admissions') }}"
                                class="inline-flex items-center gap-2 px-10 py-4 bg-accent text-white font-bold text-sm tracking-widest uppercase rounded-sm hover:brightness-110 hover:scale-[1.02] transition-all duration-300 shadow-lg group/btn">
                                LEARN MORE
                                <i data-lucide="arrow-right"
                                    class="ml-1 w-5 h-5 transition-transform group-hover/btn:translate-x-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ACTIVITIES / STUDENT LIFE (REDESIGNED) --}}
    <section id="activities" class="pt-24 md:pt-32 relative overflow-hidden bg-white">

        {{-- TOP BLOCK --}}
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mb-24 md:mb-32">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

                {{-- Left: Dual Image Display --}}
                <div class="w-full lg:w-1/2 flex gap-4 sm:gap-6" data-aos="fade-right">
                    <div
                        class="w-1/2 h-[350px] md:h-[450px] rounded-[2rem] md:rounded-[3rem] overflow-hidden mt-8 md:mt-16 shadow-lg relative group">
                        <img src="{{ asset('images/library.jpg') }}" alt="Student Life"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors duration-500">
                        </div>
                    </div>
                    <div
                        class="w-1/2 h-[350px] md:h-[450px] rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-lg relative group">
                        <img src="{{ asset('images/acad.jpg') }}" onerror="this.src='{{ asset('images/room.jpg') }}'"
                            alt="Student Life"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors duration-500">
                        </div>
                    </div>
                </div>

                {{-- Right: Content & Action --}}
                <div class="w-full lg:w-1/2 lg:pl-8" data-aos="fade-left">
                    <span class="text-accent text-xs font-semibold tracking-[0.3em] uppercase mb-4 block">Campus Life</span>
                    <h2
                        class="text-4xl md:text-5xl lg:text-6xl font-heading font-bold text-neutral-900 leading-[1.15] mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
                    <p class="text-neutral-500 text-lg mb-10 leading-relaxed font-sans max-w-xl">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters.
                    </p>
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="{{ route('activities') }}"
                            class="inline-flex items-center justify-center px-8 py-3.5 bg-accent text-white font-semibold text-sm rounded-full hover:brightness-110 hover:scale-[1.02] hover:-translate-y-1 transition-all duration-300 shadow-[0_10px_20px_-10px_rgba(211,47,47,0.5)]">
                            Read More
                        </a>
                        <a href="{{ route('activities') }}"
                            class="inline-flex items-center justify-center px-8 py-3.5 bg-white border-2 border-neutral-200 text-neutral-800 font-semibold text-sm rounded-full hover:border-accent hover:text-accent hover:-translate-y-1 transition-all duration-300">
                            Get Started Today
                        </a>
                    </div>
                </div>

            </div>
        </div>

        {{-- MIDDLE BLOCK --}}
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mb-24 md:mb-32">
            <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20">

                {{-- Left: Text & Features --}}
                <div class="w-full lg:w-[45%] lg:pr-8" data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-neutral-900 leading-[1.15] mb-6">Lorem ipsum
                        dolor sit amet</h2>
                    <p class="text-neutral-500 text-lg mb-8 leading-relaxed font-sans max-w-xl">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout.
                    </p>

                    <p class="font-bold text-neutral-900 mb-6 text-lg">Contrary to popular belief</p>

                    <ul class="space-y-4 mb-10">
                        @for($i = 0; $i < 3; $i++)
                            <li class="flex items-center gap-4">
                                <div
                                    class="w-6 h-6 rounded-lg bg-accent/10 flex items-center justify-center text-accent flex-shrink-0 border border-accent/20">
                                    <i data-lucide="check" class="w-3.5 h-3.5"></i>
                                </div>
                                <span class="text-neutral-600 font-medium">Lorem Ipsum is simply dummy text</span>
                            </li>
                        @endfor
                    </ul>

                    <a href="{{ route('activities') }}"
                        class="inline-flex items-center justify-center px-8 py-3.5 bg-accent text-white font-semibold text-sm rounded-full hover:brightness-110 hover:scale-[1.02] hover:-translate-y-1 transition-all duration-300 shadow-[0_10px_20px_-10px_rgba(211,47,47,0.5)]">
                        Browse all Courses
                    </a>
                </div>

                {{-- Right: Massive Image --}}
                <div class="w-full lg:w-[55%]" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-full h-[400px] md:h-[500px] rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-2xl relative group border-4 border-white">
                        <img src="{{ asset('images/room.jpg') }}" alt="Student Learning"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>

            </div>
        </div>

        {{-- BOTTOM BLOCK (CARDS GRID) --}}
        <div class="bg-[#F8F9FB] py-24 md:py-32 border-t border-neutral-100">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl md:text-5xl font-heading font-bold text-neutral-900 tracking-tight">Trending Courses
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 mb-16">
                    @for($i = 0; $i < 4; $i++)
                        <div class="bg-white rounded-[1.5rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col h-full hover:-translate-y-2 border border-neutral-100/50"
                            data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">

                            {{-- Image Top --}}
                            <div class="h-48 md:h-56 overflow-hidden relative">
                                <img src="{{ asset('images/clareta.webp') }}"
                                    onerror="this.src='{{ asset('images/library.jpg') }}'"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    alt="Course {{ $i }}">
                                <div
                                    class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors duration-300">
                                </div>
                            </div>

                            {{-- Content Bottom --}}
                            <div class="p-6 md:p-8 flex flex-col flex-1">
                                <h3
                                    class="font-bold text-neutral-900 text-[17px] mb-6 leading-snug group-hover:text-[#5D42F2] transition-colors line-clamp-2">
                                    Lorem Ipsum has been the industry's standard
                                </h3>

                                <div class="flex items-center justify-between mt-auto pt-4 border-t border-neutral-50">
                                    {{-- 5 Stars --}}
                                    <div class="flex text-[#FFC107] gap-[2px]">
                                        @for($j = 0; $j < 5; $j++)
                                            <i data-lucide="star" class="w-[14px] h-[14px] fill-current"></i>
                                        @endfor
                                    </div>

                                    {{-- Arrow Link --}}
                                    <div
                                        class="w-8 h-8 rounded-full bg-accent text-white flex items-center justify-center transform group-hover:scale-110 group-hover:bg-neutral-900 transition-all cursor-pointer shadow-md">
                                        <i data-lucide="arrow-right" class="w-3.5 h-3.5 -rotate-45"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                {{-- Center Bottom Dark Button --}}
                <div class="text-center" data-aos="fade-up">
                    <a href="{{ route('activities') }}"
                        class="inline-flex items-center justify-center px-10 py-4 bg-accent text-white font-bold text-sm tracking-wide rounded-full hover:brightness-110 hover:scale-105 transition-all duration-300 shadow-xl">
                        Browse all Courses
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- ACCREDITATIONS SECTION (NEW) --}}
    <section id="accreditations" class="py-24 md:py-32 bg-[#EBF1FA] relative overflow-hidden">
        {{-- Decorative background element --}}
        <div
            class="absolute top-0 right-0 w-1/3 h-full bg-neutral-50/50 -skew-x-12 transform translate-x-20 pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">

                {{-- Text Content --}}
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/10 text-accent text-xs font-bold tracking-widest uppercase mb-6">
                        <i data-lucide="award" class="w-4 h-4"></i>
                        Excellence Recognized
                    </div>

                    <h2 class="text-5xl md:text-7xl font-heading font-medium leading-[1.1] mb-8 text-neutral-900">
                        Our Commitment to <span class="text-accent italic">Quality Education</span>
                    </h2>

                    <p class="text-neutral-600 text-lg md:text-xl font-light leading-relaxed mb-10 max-w-xl">
                        St. Anthony Mary Claret College is dedicated to maintaining the highest standards of academic
                        excellence. Our programs are recognized and accredited by leading educational bodies, ensuring that
                        our students receive a globally competitive education.
                    </p>

                    <div class="space-y-6 mb-12">
                        <div class="flex items-start gap-5">
                            <div
                                class="w-12 h-12 rounded-2xl bg-accent text-white flex items-center justify-center shrink-0 shadow-lg">
                                <i data-lucide="shield-check" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-neutral-900 text-lg mb-1">CHED Recognized</h4>
                                <p class="text-neutral-500 font-light">Fully compliant with the Commission on Higher
                                    Education (CHED) standards.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-5">
                            <div
                                class="w-12 h-12 rounded-2xl bg-accent text-white flex items-center justify-center shrink-0 shadow-lg">
                                <i data-lucide="university" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-neutral-900 text-lg mb-1">Institutional Excellence</h4>
                                <p class="text-neutral-500 font-light">A community of scholars driven by academic fervor and
                                    Claretian missionary spirit.</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('accreditations') }}"
                        class="inline-flex items-center gap-3 px-10 py-4 bg-accent text-white font-bold text-sm tracking-widest uppercase rounded-full hover:brightness-110 hover:scale-105 transition-all duration-300 shadow-xl group">
                        Know More
                        <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>

                {{-- Visual Representation --}}
                <div class="w-full lg:w-1/2 relative" data-aos="fade-left" data-aos-delay="200">
                    <div
                        class="relative rounded-[3rem] overflow-hidden shadow-2xl skew-y-2 hover:skew-y-0 transition-all duration-700">
                        <img src="{{ asset('images/library.jpg') }}" alt="Accreditation"
                            class="w-full h-[600px] object-cover scale-110 hover:scale-100 transition-all duration-1000">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                        {{-- Floating Badge --}}
                        <div
                            class="absolute bottom-10 left-10 right-10 bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20">
                            <p class="text-white text-2xl font-heading mb-2">Quality & Faith</p>
                            <p class="text-white/80 font-light text-sm">Committed to providing premium education with
                                Claretian values since our foundation.</p>
                        </div>
                    </div>

                    {{-- Soft accents --}}
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-accent/20 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-neutral-900/20 rounded-full blur-3xl"></div>
                </div>

            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="py-24 md:py-32 bg-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Top Row: Info + Form --}}
            <div class="flex flex-col lg:flex-row lg:gap-20 mb-24 md:mb-32">

                {{-- Contact Info Side --}}
                <div class="w-full lg:w-7/12 flex flex-col justify-center mb-12 lg:mb-0" data-aos="fade-right">
                    <h2 class="text-5xl md:text-7xl font-heading font-medium leading-[1.1] mb-6 text-textmain">Contact Us
                    </h2>
                    <p class="text-subtext text-lg font-light leading-relaxed max-w-lg mb-8">
                        Wish to enquire about admissions, syllabus, or anything else? You can walk in during office hours,
                        give us a call, or simply run us a quick message.
                    </p>

                    <div class="mb-12 space-y-2">
                        <p class="text-textmain font-medium text-lg"><a href="mailto:samcc.undergraduate@gmail.com"
                                class="hover:text-accent transition">samcc.undergraduate@gmail.com</a></p>
                        <p class="text-textmain font-medium text-lg">+63-2-89970593 (UGD) | +63-2-89320343 (GD)</p>
                    </div>

                    {{-- Columns for UGD and GD Info to match left layout of reference --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 border-t border-neutral-200/60 pt-10">
                        <div>
                            <h4 class="font-heading font-medium text-lg mb-3 text-textmain">Undergraduate Dept. (UGD)</h4>
                            <p class="text-subtext font-light text-sm leading-relaxed mb-3">48 Cenacle Drive, Sanville
                                Subdivision, Culiat, Quezon City 1128 Philippines</p>
                            <p class="text-subtext font-light text-sm"><a href="mailto:samcc.undergraduate@gmail.com"
                                    class="hover:text-accent transition">samcc.undergraduate@gmail.com</a></p>
                        </div>
                        <div>
                            <h4 class="font-heading font-medium text-lg mb-3 text-textmain">Graduate Dept. (GD)</h4>
                            <p class="text-subtext font-light text-sm leading-relaxed mb-3">526 Tandang Sora Ave., Culiat,
                                Quezon City 1128, Philippines</p>
                            <p class="text-subtext font-light text-sm"><a href="mailto:icla@icla.org.ph"
                                    class="hover:text-accent transition">icla@icla.org.ph</a></p>
                        </div>
                    </div>
                </div>

                {{-- Form Side --}}
                <div class="w-full lg:w-5/12 relative z-10" data-aos="fade-left">
                    <div class="bg-secondary rounded-3xl p-8 md:p-10 shadow-premium border border-neutral-200 h-full">
                        <div class="mb-8">
                            <span class="text-xs font-semibold uppercase tracking-[0.3em] text-accent mb-2 block">Direct
                                Inquiry</span>
                            <h3 class="text-3xl font-heading font-medium text-textmain">Send Us a Message</h3>
                        </div>
                        <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label
                                        class="block mb-2 text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">First
                                        Name</label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-accent focus:border-accent block w-full p-4 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-accent dark:focus:border-accent transition-all shadow-sm">
                                    @error('first_name') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label
                                        class="block mb-2 text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">Last
                                        Name</label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-accent focus:border-accent block w-full p-4 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-accent dark:focus:border-accent transition-all shadow-sm">
                                    @error('last_name') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label
                                    class="block mb-2 text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">Your
                                    Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-accent focus:border-accent block w-full p-4 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-accent dark:focus:border-accent transition-all shadow-sm">
                                @error('email') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label
                                    class="block mb-2 text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">Phone
                                    Number</label>
                                <div class="flex items-center" x-data="{ countryCode: '+63', open: false }">
                                    <!-- Country Selector Button -->
                                    <button @click="open = !open" @click.away="open = false" type="button"
                                        class="flex-shrink-0 z-10 inline-flex items-center py-4 px-4 text-sm font-medium text-center text-gray-900 bg-gray-50 border border-gray-300 rounded-s-xl hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600 transition-all shadow-sm">
                                        <span class="flex items-center gap-2">
                                            <!-- PH Flag SVG -->
                                            <svg class="w-5 h-5" viewBox="0 0 640 480">
                                                <g fill-rule="evenodd" stroke-width="1pt">
                                                    <path fill="#fff" d="M0 0h640v480H0z" />
                                                    <path fill="#0038a8" d="M0 0h640v240H0z" />
                                                    <path fill="#ce1126" d="M0 240h640v240H0z" />
                                                    <path fill="#fcd116" d="M0 0l240 240L0 480z" />
                                                </g>
                                            </svg>
                                            <span x-text="countryCode"></span>
                                        </span>
                                        <i data-lucide="chevron-down" class="ml-2 w-4 h-4 transition-transform"
                                            :class="open ? 'rotate-180' : ''"></i>
                                    </button>

                                    <!-- Dropdown Menu -->
                                    <div x-show="open" x-transition
                                        class="absolute z-20 mt-[200px] bg-white divide-y divide-gray-100 rounded-lg shadow-xl w-44 dark:bg-gray-700 border border-neutral-100 dark:border-neutral-600">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                            <li>
                                                <button @click="countryCode = '+63'; open = false" type="button"
                                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 items-center gap-2">
                                                    <svg class="w-4 h-4" viewBox="0 0 640 480">
                                                        <g fill-rule="evenodd" stroke-width="1pt">
                                                            <path fill="#fff" d="M0 0h640v480H0z" />
                                                            <path fill="#0038a8" d="M0 0h640v240H0z" />
                                                            <path fill="#ce1126" d="M0 240h640v240H0z" />
                                                            <path fill="#fcd116" d="M0 0l240 240L0 480z" />
                                                        </g>
                                                    </svg>
                                                    Philippines (+63)
                                                </button>
                                            </li>
                                            <li>
                                                <button @click="countryCode = '+1'; open = false" type="button"
                                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 items-center gap-2">
                                                    <svg class="w-4 h-4" viewBox="0 0 640 480">
                                                        <path fill="#bd3d44" d="M0 0h640v480H0z" />
                                                        <path stroke="#fff" stroke-width="37"
                                                            d="M0 55.4h640M0 129.2h640M0 203h640M0 277h640M0 350.8h640M0 424.6h640" />
                                                        <path fill="#192f5d" d="M0 0h256v214.5H0z" />
                                                    </svg>
                                                    USA (+1)
                                                </button>
                                                <!-- Saudi Arabia (+966) -->
                                            <li>
                                                <button @click="countryCode = '+966'; open = false" type="button"
                                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 items-center gap-2 text-left">
                                                    <svg class="w-4 h-4" viewBox="0 0 640 480">
                                                        <path fill="#006c35" d="M0 0h640v480H0z" />
                                                        <path fill="#fff"
                                                            d="M433 261c-3-2-21-11-21-22 0-9 16-16 26-16s14 11 10 17l-4 5c4 0 10-4 10-10 0-11-20-22-37-22s-32 9-32 23c0 23 48 29 48 37 0 6-12 7-19 7a31 31 0 0 1-22-10l-6 5c6 9 17 14 29 14 18 0 31-10 31-23 0-11-9-19-13-21c8-2 23 8 23 18s-4 13-10 13l-4-5c3 0 10-4 10-9 0-9-18-18-35-18s-29 7-29 17c0 14 36 21 36 29 0 4-8 5-15 5a25 25 0 0 1-17-7l-6 4c6 9 14 11 24 11 15 0 26-6 26-17 0-9-8-15-11-17zm-126 31V210h-9v111l-38-34-6 6 49 43 49-43-6-6-39 34z" />
                                                    </svg>
                                                    Saudi Arabia (+966)
                                                </button>
                                            </li>

                                            <!-- Japan (+81) -->
                                            <li>
                                                <button @click="countryCode = '+81'; open = false" type="button"
                                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 items-center gap-2 text-left">
                                                    <svg class="w-4 h-4" viewBox="0 0 640 480">
                                                        <path fill="#fff" d="M0 0h640v480H0z" />
                                                        <circle cx="320" cy="240" r="144" fill="#bc002d" />
                                                    </svg>
                                                    Japan (+81)
                                                </button>
                                            </li>

                                            <!-- Australia (+61) -->
                                            <li>
                                                <button @click="countryCode = '+61'; open = false" type="button"
                                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 items-center gap-2 text-left">
                                                    <svg class="w-4 h-4" viewBox="0 0 640 480">
                                                        <path fill="#00008b" d="M0 0h640v480H0z" />
                                                        <path fill="#fff"
                                                            d="m0 0 240 120V0L0 120zm0 0 240 120H0v120l240-120zM0 0v240l480-240H0z" />
                                                        <path stroke="#fff" stroke-width="40"
                                                            d="m0 0 640 320M0 320 640 0" />
                                                        <path stroke="#e8112d" stroke-width="24"
                                                            d="m0 0 640 320M0 320 640 0" />
                                                        <path stroke="#fff" stroke-width="80" d="M320 0v480M0 240h640" />
                                                        <path stroke="#3c3737ff" stroke-width="48" d="M320 0v480M0 240h640" />
                                                        <circle cx="480" cy="360" r="40" fill="#fff" />
                                                    </svg>  
                                                    Australia (+61)
                                                </button>
                                            </li>

                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Phone Input Field -->
                                    <div class="relative w-full">
                                        <input type="text" name="phone_number" value="{{ old('phone_number') }}" required
                                            class="bg-gray-50 border border-s-0 border-gray-300 text-gray-900 text-sm rounded-e-xl focus:ring-accent focus:border-accent block w-full p-4 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:focus:ring-accent dark:focus:border-accent transition-all shadow-sm">
                                        <!-- Hidden input to store combined code + number if needed -->
                                        <input type="hidden" name="phone"
                                            :value="countryCode + ' ' + $el.previousElementSibling.value">
                                    </div>
                                </div>
                                @error('phone') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label
                                    class="block mb-2 text-xs font-bold text-gray-700 dark:text-gray-300 uppercase tracking-wider">Message</label>
                                <textarea name="message" rows="4" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-accent focus:border-accent block w-full p-4 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-accent dark:focus:border-accent transition-all resize-none shadow-sm">{{ old('message') }}</textarea>
                                @error('message') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-accent hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-bold rounded-xl text-sm px-5 py-4 text-center dark:bg-accent dark:hover:bg-red-700 dark:focus:ring-red-900 uppercase tracking-widest transition-all duration-300 shadow-glow hover:scale-[1.01] active:scale-[0.99] mt-2">
                                Send Message
                            </button>
                            <p class="text-center text-[10px] text-gray-500 mt-4 uppercase tracking-widest opacity-70">
                                By contacting us, you agree to our Terms of Service and Privacy Policy.
                            </p>
                        </form>

                    </div>
                </div>

            </div>

            {{-- Map Row (Middle Section of Reference) --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                {{-- Map Side --}}
                <div class="rounded-3xl overflow-hidden shadow-card border border-neutral-200 h-[400px] lg:h-[480px] w-full relative"
                    data-aos="fade-right">
                    <iframe
                        src="https://maps.google.com/maps?q=St.%20Anthony%20Mary%20Claret%20College&t=&z=16&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                {{-- Location Side --}}
                <div class="space-y-8" data-aos="fade-left">
                    <div>
                        <span class="text-textmain text-sm font-semibold mb-2 block tracking-wide">Our Location</span>
                        <h2 class="text-4xl md:text-5xl font-heading font-medium leading-[1.1] mb-6 text-textmain">
                            Connecting Near <br />and Far</h2>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <h4 class="font-heading font-bold text-lg mb-2 text-textmain">Main Campus</h4>
                            <p class="text-subtext font-light leading-relaxed text-sm">
                                St. Anthony Mary Claret College<br>
                                Mahinhin St., U.P. Village, <br>
                                Diliman, Quezon City, Philippines 1101
                            </p>
                        </div>
                        <div>
                            <h4 class="font-heading font-bold text-lg mb-2 text-textmain">Institute for Consecrated Life in
                                Asia</h4>
                            <p class="text-subtext font-light leading-relaxed text-sm">
                                526 Tandang Sora Ave., <br>
                                Culiat, Quezon City, <br>
                                Philippines 1128
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @push('scripts')
        <script>
            // Force replay of hero animations when scrolling back to the top
            document.addEventListener('DOMContentLoaded', () => {
                const topSection = document.getElementById('top');
                if (!topSection) return;

                const animatedElements = topSection.querySelectorAll('[data-aos]');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            // When the hero section comes back into view, force the animations to restart
                            animatedElements.forEach(el => {
                                el.classList.remove('aos-animate');
                                // Small delay to trigger reflow and restart animation
                                setTimeout(() => {
                                    el.classList.add('aos-animate');
                                }, 50);
                            });
                        } else {
                            // Remove class when out of view so it's ready to animate again
                            animatedElements.forEach(el => {
                                el.classList.remove('aos-animate');
                            });
                        }
                    });
                }, {
                    // Trigger when at least 10% of the hero section is visible
                    threshold: 0.1
                });

                observer.observe(topSection);
            });
        </script>
    @endpush

@endsection