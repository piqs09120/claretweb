@extends('layouts.app')

@section('title', 'About Us')
@section('meta_description', 'Learn about Saint Anthony Mary Claret College (SAMCC) — our history, academic formation, CHEERS core values, and Claretian missionary tradition.')

@section('content')

    {{-- ── MODERN HERO SECTION ────────────────────────────────────────────────── --}}
    <section class="relative bg-white pt-32 pb-20 overflow-hidden">
        {{-- Decorative background element --}}
        <div class="absolute top-0 right-0 w-1/3 h-full bg-peach/30 -skew-x-12 translate-x-1/2 z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl">
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-heading text-neutral-900 leading-[1.1] mb-8" data-aos="fade-right">
                Establishment & <br>
                <span class="text-primary-600">Academic Legacy</span>
            </h1>

            <div class="w-24 h-1.5 bg-primary-600 mb-8" data-aos="fade-right" data-aos-delay="100"></div>

            <p class="text-xl text-neutral-600 leading-relaxed max-w-2xl" data-aos="fade-right" data-aos-delay="200">
                Founded in 1985 by Fr. Domingo Moraleda, CMF, dedicated to the intellectual and holistic formation for a missionary life.
            </p>
        </div>
    </div>
</section>

<x-samcc.breadcrumbs 
    :items="[
        ['label' => 'About Us']
    ]" 
/>

    {{-- ── THE LEGACY SECTION ─────────────────────────────────────────────────── --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

                {{-- Left Side: Sticky Navigation/Labels --}}
                <div class="lg:col-span-4 lg:sticky lg:top-40">
                    <span class="text-xs font-bold uppercase tracking-[0.3em] text-primary-600 mb-4 block" data-aos="fade-up">Historical Context</span>
                    <h2 class="text-4xl font-heading text-neutral-900 mb-8" data-aos="fade-up" data-aos-delay="100">Historical & Academic Overview</h2>
                    <div class="h-[1px] w-full bg-neutral-100" data-aos="fade-up" data-aos-delay="200"></div>
                </div>

                {{-- Right Side: Content --}}
                <div class="lg:col-span-8 space-y-12">
                    <div class="prose prose-lg prose-neutral max-w-none text-neutral-600 leading-relaxed" data-aos="fade-up">
                        <p class="text-xl text-neutral-900 font-medium mb-8">
                            Saint Anthony Mary Claret College (SAMCC), formerly known as the Claret Formation Center, was established on June 17, 1985.
                        </p>
                        <p>
                            Led by the late <span class="text-neutral-900 font-bold">Fr. Domingo Moraleda, CMF</span>, who served as the Provincial Superior of the Claretians in the Philippines, along with <span class="text-neutral-900 font-bold">Fr. Angel Ochagavia, CMF</span>, and <span class="text-neutral-900 font-bold">Dr. Beulah D. Nuval, Ed.D.</span>, the academic program was initiated during that academic year.
                        </p>
                        <p>
                            Initially located in Tandang Sora, Quezon City, SAMCC later relocated to its current site in Sanville Subdivision, Culiat, Q.C. on November 30, 1988. The college was recognized by the then Ministry of Education, Culture and Sports and is currently regulated by the Commission on Higher Education.
                        </p>
                        <div class="bg-peach/30 p-8 rounded-2xl border-l-4 border-primary-600 my-10">
                            <p class="m-0 font-medium text-neutral-800">
                                It offers an undergraduate department that grants a <span class="text-primary-600 font-bold">Bachelor of Arts degree in Philosophy</span>, supplemented by Psychology courses. More recently, the 2021 Enriched Curriculum has introduced Education units into the program.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── ACADEMIC FORMATION SECTION ────────────────────────────────────────── --}}
    <section class="py-24 bg-peach/40 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div data-aos="fade-right">
                    <span class="text-xs font-bold uppercase tracking-[0.3em] text-primary-600 mb-6 block">Foundation</span>
                    <h2 class="text-4xl md:text-5xl font-heading mb-8 leading-tight text-neutral-900">Academic Formation <br>& Faculty</h2>
                    <div class="space-y-6 text-neutral-600 text-lg leading-relaxed">
                        <p>
                            Throughout the four-year academic journey, SAMCC lays the necessary foundation to prepare students for their future roles as priests and missionaries.
                        </p>
                        <p>
                            In its early years, SAMCC had a Memorandum of Agreement with the nearby University of the Philippines, allowing faculty members from the university to teach at the seminary college.
                        </p>
                        <p>
                            Over time, in addition to graduates from U.P., faculty members (both lay and religious) also joined from institutions such as:
                        </p>
                    </div>
                </div>

                <div class="bg-white p-10 md:p-14 rounded-3xl border border-neutral-100 shadow-xl" data-aos="fade-left">
                    <h3 class="text-xl font-bold text-neutral-900 mb-8 border-b border-neutral-100 pb-4 uppercase tracking-widest text-sm">Affiliated Institutions</h3>
                    <ul class="space-y-6">
                        @foreach([
                                'Ateneo de Manila University',
                                'Pontifical University of Sto. Tomas',
                                'Miriam College',
                                'Adamson University',
                                'Other local and international educational institutions'
                            ] as $uni)
                                <li class="flex items-center gap-4 group">
                                    <span class="w-2.5 h-2.5 rounded-full bg-primary-600 group-hover:scale-125 transition-transform"></span>
                                    <span class="text-neutral-600 font-medium group-hover:text-primary-600 transition-colors">{{ $uni }}</span>
                                </li>
                        @endforeach
                    </ul>
                    <p class="mt-10 text-sm text-neutral-600 leading-relaxed">
                        These educators contributed significantly to the intellectual formation of the students. In recent years, graduates of SAMCC themselves have become part of the academic staff.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ── INCLUSIVE MISSIONARY EDUCATION ────────────────────────────────────── --}}
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <span class="text-xs font-bold uppercase tracking-[0.3em] text-primary-600 mb-4 block">Our Commitment</span>
                    <h2 class="text-4xl md:text-5xl font-heading text-neutral-900">Inclusive Missionary Education</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start" data-aos="fade-up">
                    <div class="bg-peach/20 p-10 rounded-3xl border border-peach/50 shadow-sm transition-all hover:shadow-md">
                        <p class="text-neutral-700 leading-relaxed m-0 text-lg">
                            Originally established exclusively for Claretian seminarians, <span class="text-primary-600 font-bold">SAMCC now accepts student seminarians</span> from other religious congregations and dioceses as well.
                        </p>
                    </div>
                    <div class="space-y-6">
                        <p class="text-neutral-600 leading-relaxed text-lg">
                            As a Catholic college, SAMCC aims to provide a comprehensive and robust Catholic education, fostering intellectual and holistic formation for a missionary life.
                        </p>
                        <p class="text-neutral-600 leading-relaxed text-lg">
                            It equips students to be responsive and attuned to the pressing and timely needs in an effective manner.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── MISSION AND SERVICE (ENHANCED UI) ────────────────────────────────── --}}
    <section class="py-32 bg-neutral-50/50 relative overflow-hidden">
        {{-- Soft decorative accents --}}
        <div class="absolute top-0 right-0 w-1/2 h-full bg-peach/10 -skew-x-12 translate-x-1/2 z-0"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
                
                {{-- Left Column: Narrative Content --}}
                <div class="lg:col-span-6" data-aos="fade-right">
                    <span class="text-xs font-bold uppercase tracking-[0.4em] text-primary-600 mb-6 block">Our Impact</span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-heading text-neutral-900 mb-10 leading-[1.1]">
                        Mission and <br>
                        <span class="text-primary-600">Service</span>
                    </h2>
                    
                    <div class="prose prose-lg prose-neutral max-w-none text-neutral-600 space-y-8 leading-relaxed">
                        <p class="text-xl text-neutral-900 font-medium leading-relaxed">
                            Many students, having embraced their vocations as priests and religious brothers, are now dedicatedly serving the Church and society through various esteemed institutions, communities, ministries, and organizations in the Philippines and other parts of the world.
                        </p>
                        
                        <p>
                            Others are serving in Claretian institutions in <span class="text-neutral-900 font-bold">Quezon City</span> (CSQC, IHMP, CCFI), <span class="text-neutral-900 font-bold">formation houses</span> (including the novitiate in Ormoc City), and <span class="text-neutral-900 font-bold">ICLA</span>. Additionally, many have been sent to <span class="text-neutral-900 font-bold underline decoration-primary-600/30 underline-offset-4">other countries</span> for mission work and further studies.
                        </p>
                        
                        <div class="pt-8 border-t border-neutral-200">
                            <p class="italic text-neutral-500">
                                Their dedication and service contribute significantly to the mission of the Claretian community in spreading the Gospel to the whole world.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Right Column: Missions Card --}}
                <div class="lg:col-span-6" data-aos="fade-left">
                    <div class="bg-white p-10 md:p-14 rounded-[2.5rem] shadow-2xl shadow-primary-900/5 border border-neutral-100 relative group overflow-hidden transition-all duration-500 hover:-translate-y-2">
                        {{-- Subtle background icon effect --}}
                        <div class="absolute -bottom-10 -right-10 opacity-[0.03] group-hover:scale-110 transition-transform duration-700">
                            <i data-lucide="send" class="w-64 h-64"></i>
                        </div>

                        <div class="relative z-10">
                            <h3 class="text-neutral-900 font-bold text-lg mb-8 border-b border-neutral-50 pb-6">
                                Claretian students are currently assigned to <br>
                                <span class="text-primary-600">diverse missions in:</span>
                            </h3>

                            <ul class="space-y-6">
                                @foreach([
                                    ['loc' => 'Basilan', 'sub' => ''],
                                    ['loc' => 'Zamboanga City', 'sub' => ''],
                                    ['loc' => 'Zamboanga Sibugay', 'sub' => 'southern/southwest Mindanao'],
                                    ['loc' => 'Ormoc', 'sub' => 'Eastern Visayas'],
                                    ['loc' => 'Saranggani', 'sub' => 'southeast Mindanao']
                                ] as $mission)
                                    <li class="flex items-start gap-5 group/item">
                                        <div class="w-10 h-10 rounded-xl bg-primary-50 flex items-center justify-center shrink-0 group-hover/item:bg-primary-600 transition-colors duration-300">
                                            <i data-lucide="map-pin" class="w-5 h-5 text-primary-600 group-hover/item:text-white transition-colors"></i>
                                        </div>
                                        <div>
                                            <span class="block text-neutral-900 font-bold text-lg group-hover/item:text-primary-600 transition-colors">{{ $mission['loc'] }}</span>
                                            @if($mission['sub'])
                                                <span class="text-sm text-neutral-400 font-medium">({{ $mission['sub'] }})</span>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── LAY VOCATION AND VALUES (VISIONARY REDESIGN) ──────────────────────── --}}
    <section class="py-32 bg-white relative overflow-hidden">
        {{-- Fluid background elements --}}
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] pointer-events-none">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0,50 Q25,30 50,50 T100,50 V100 H0 Z" fill="currentColor"></path>
            </svg>
        </div>
        <div class="absolute top-1/2 right-0 w-[500px] h-[500px] bg-primary-600/5 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/4"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-20" data-aos="fade-up">
                    <span class="text-xs font-bold uppercase tracking-[0.4em] text-primary-600 mb-6 block">Our Identity</span>
                    <h2 class="text-5xl md:text-7xl font-heading text-neutral-900 mb-8 leading-tight">
                        Lay Vocation and <span class="text-primary-600">Values</span>
                    </h2>
                    <div class="w-24 h-1.5 bg-primary-600 mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-start">
                    <div class="space-y-8" data-aos="fade-right">
                        <div class="relative">
                            <span class="absolute -top-10 -left-10 text-[10rem] font-heading text-neutral-50 leading-none select-none z-0">"</span>
                            <p class="text-2xl text-neutral-800 font-medium leading-relaxed relative z-10">
                                Those who have embraced their vocation as lay persons remain dedicated Christians, actively contributing to the transformation of society and the revitalization of the Church.
                            </p>
                        </div>
                        <div class="prose prose-lg prose-neutral text-neutral-600 space-y-6">
                            <p>
                                They champion values-based families and excel across various professional domains, embodying their faith through practical actions, alongside those who pursue priestly and religious paths.
                            </p>
                            <p>
                                Guided by the missionary ethos of <span class="text-neutral-900 font-bold">St. Anthony Mary Claret</span>, they wholeheartedly embrace the school's motto:
                            </p>
                        </div>
                    </div>

                    <div class="relative lg:mt-12" data-aos="fade-left">
                        {{-- Motto Feature: Integrated & Fluid --}}
                        <div class="relative py-12 px-8">
                            {{-- Decorative Quote Marks/Icons --}}
                            <div class="absolute top-0 left-0 w-12 h-12 text-primary-600/10">
                                <i data-lucide="quote" class="w-12 h-12"></i>
                            </div>

                            <div class="space-y-6 text-center lg:text-left">
                                <p class="text-3xl md:text-4xl lg:text-5xl font-heading text-neutral-900 leading-tight italic">
                                    Knowledge is best <br>
                                    <span class="text-primary-600">with virtue</span>
                                </p>
                                <div class="flex items-center gap-4 justify-center lg:justify-start">
                                    <span class="h-px w-8 bg-primary-600"></span>
                                    <p class="text-primary-600 font-bold uppercase tracking-widest text-base">
                                        Scientia Maxime Cum Virtute
                                    </p>
                                </div>
                                <p class="text-neutral-500 text-lg leading-relaxed pt-6">
                                    —integrating wisdom and character <br class="hidden lg:block"> in their pursuits.
                                </p>
                            </div>

                            {{-- Subtle background highlight --}}
                            <div class="absolute inset-0 bg-peach/5 -skew-x-6 -z-10 rounded-[3rem]"></div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── INSTITUTIONAL ORGANIZATIONAL CHART ──────────────────────────────── --}}
    <section class="py-24 bg-neutral-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-xs font-bold uppercase tracking-[0.4em] text-primary-600 mb-6 block">St. Anthony Mary Claret College</span>
                <h2 class="text-3xl md:text-5xl font-heading text-neutral-900 leading-tight">Institutional <span class="text-primary-600">Organizational Chart</span></h2>
            </div>

            {{-- Responsive Chart Container --}}
            <div class="overflow-x-auto pb-12" data-aos="zoom-in">
                <div class="min-w-[1000px] flex flex-col items-center">
                    
                    {{-- Level 1: Board --}}
                    <div class="mb-12 relative">
                        <div class="bg-primary-600 text-white px-8 py-3 rounded-md font-bold text-center w-64 shadow-lg ring-4 ring-primary-50">BOARD</div>
                        <div class="h-12 w-px bg-neutral-300 mx-auto"></div>
                    </div>

                    {{-- Level 2: President --}}
                    <div class="mb-12 relative flex justify-center items-center gap-12">
                        <div class="relative">
                            <div class="bg-primary-600 text-white px-8 py-3 rounded-md font-bold text-center w-64 shadow-lg ring-4 ring-primary-50">PRESIDENT</div>
                            <div class="h-12 w-px bg-neutral-300 mx-auto"></div>
                            
                            {{-- Legal Connection --}}
                            <div class="absolute top-1/2 -right-12 w-12 h-px border-t border-dashed border-neutral-400"></div>
                            <div class="absolute top-1/2 -right-60 bg-yellow-500 text-white px-6 py-2 rounded-md font-bold text-center w-48 shadow-md -translate-y-1/2">LEGAL</div>
                        </div>
                    </div>
                    <div class="mb-12 relative">
                        <div class="bg-primary-700 text-white px-8 py-3 rounded-md font-bold text-center w-80 shadow-lg ring-4 ring-primary-50">ADMINISTRATIVE COUNCIL</div>
                        <div class="h-12 w-px bg-neutral-300 mx-auto"></div>
                    </div>

                    {{-- Level 4: VPs & CIQAA --}}
                    <div class="relative w-full">
                        {{-- Horizontal Connector --}}
                        <div class="absolute top-0 left-1/4 right-1/4 h-px bg-neutral-300"></div>
                        
                        <div class="grid grid-cols-3 gap-8">
                            {{-- VP Academic Affairs Branch --}}
                            <div class="flex flex-col items-center pt-12 relative">
                                <div class="absolute top-0 h-12 w-px bg-neutral-300"></div>
                                <div class="bg-primary-600 text-white px-6 py-3 rounded-md font-bold text-center w-full shadow-md">VP FOR ACADEMIC AFFAIRS</div>
                                <div class="h-12 w-px bg-neutral-300"></div>
                                
                                {{-- Academic Council --}}
                                <div class="bg-blue-600 text-white px-6 py-3 rounded-md font-bold text-center w-64 shadow-md">ACADEMIC COUNCIL</div>
                                <div class="h-12 w-px bg-neutral-300"></div>
                                
                                {{-- Academic Branch Split --}}
                                <div class="relative w-full">
                                    <div class="absolute top-0 left-0 right-0 h-px bg-neutral-300"></div>
                                    <div class="grid grid-cols-3 gap-4 pt-12">
                                        {{-- Academic Dev --}}
                                        <div class="flex flex-col items-center">
                                            <div class="absolute top-0 h-12 w-px bg-neutral-300"></div>
                                            <div class="bg-blue-800 text-white p-3 rounded-md font-bold text-xs text-center w-full h-16 flex items-center justify-center uppercase leading-tight">Academic Development Head</div>
                                            <div class="space-y-2 mt-4 w-full">
                                                @foreach(['Research Coordinator', 'Accreditation Coordinator', 'Educational Technology Coordinator', 'Community Extension Service Coordinator'] as $role)
                                                    <div class="bg-emerald-700 text-white p-2 rounded text-[10px] font-bold text-center uppercase tracking-tighter leading-none h-12 flex items-center justify-center">{{ $role }}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                        {{-- Academic Services --}}
                                        <div class="flex flex-col items-center relative">
                                            <div class="absolute top-0 h-12 w-px bg-neutral-300"></div>
                                            <div class="bg-blue-800 text-white p-3 rounded-md font-bold text-xs text-center w-full h-16 flex items-center justify-center uppercase leading-tight">Academic Services Head</div>
                                            <div class="space-y-1 mt-4 w-full h-[300px] overflow-y-auto pr-1">
                                                @foreach(['Registrar', 'Administration and Financial Aid Coordinator', 'Guidance counselor & student placement coordinator', 'Librarian', 'Prefect of discipline', 'Student Development Coordinator', 'Alumni Office Staff'] as $role)
                                                    <div class="bg-emerald-700 text-white p-2 rounded text-[10px] font-bold text-center uppercase tracking-tighter leading-none h-10 flex items-center justify-center">{{ $role }}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                        {{-- Deans --}}
                                        <div class="flex flex-col items-center">
                                            <div class="absolute top-0 h-12 w-px bg-neutral-300"></div>
                                            <div class="bg-blue-800 text-white p-3 rounded-md font-bold text-xs text-center w-full h-16 flex items-center justify-center uppercase leading-tight">Deans</div>
                                            <div class="space-y-2 mt-4 w-full">
                                                @foreach(['Undergraduate Academic Coordinators', 'Graduate Program Coordinators', 'Faculty', 'Administrative Staff'] as $role)
                                                    <div class="bg-emerald-700 text-white p-1 rounded text-[10px] font-bold text-center uppercase tracking-tighter leading-none h-10 flex items-center justify-center">{{ $role }}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- CIQAA Branch --}}
                            <div class="flex flex-col items-center pt-12 relative">
                                <div class="absolute top-0 h-12 w-px bg-neutral-300"></div>
                                <div class="bg-primary-600 text-white px-6 py-3 rounded-md font-bold text-center w-48 shadow-md">CIQAA</div>
                            </div>

                            {{-- VP Admin & Finance Branch --}}
                            <div class="flex flex-col items-center pt-12 relative">
                                <div class="absolute top-0 h-12 w-px bg-neutral-300"></div>
                                <div class="bg-primary-600 text-white px-6 py-3 rounded-md font-bold text-center w-full shadow-md">VP FOR ADMIN & FINANCE</div>
                                <div class="h-12 w-px bg-neutral-300"></div>

                                {{-- Admin Split --}}
                                <div class="relative w-full">
                                    <div class="absolute top-0 left-0 right-0 h-px bg-neutral-300"></div>
                                    <div class="grid grid-cols-4 gap-2 pt-12">
                                        @foreach([
                                            ['head' => 'Procurement', 'subs' => ['Finance Office Coordinator', 'Bookkeeper', 'Cashier']],
                                            ['head' => 'Data Privacy Officer', 'subs' => ['Sales and Marketing Staff', 'Digital and Multimedia Staff', 'Business Development Staff']],
                                            ['head' => 'Accounting Head', 'subs' => ['Facilities Management Staff', 'Security', 'Maintenance']],
                                            ['head' => 'HR Coordinator', 'subs' => []]
                                        ] as $branch)
                                            <div class="flex flex-col items-center">
                                                <div class="absolute top-0 h-12 w-px bg-neutral-300"></div>
                                                <div class="bg-blue-600 text-white p-2 rounded-md font-bold text-[10px] text-center w-full h-16 flex items-center justify-center uppercase leading-tight">{{ $branch['head'] }}</div>
                                                @if(count($branch['subs']) > 0)
                                                    <div class="h-8 w-px bg-neutral-200"></div>
                                                    <div class="space-y-2 w-full">
                                                        @foreach($branch['subs'] as $index => $sub)
                                                            <div class="{{ $index == 0 ? 'bg-blue-800' : 'bg-emerald-700' }} text-white p-2 rounded text-[9px] font-bold text-center uppercase h-10 flex items-center justify-center leading-none">{{ $sub }}</div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center text-neutral-400 text-sm italic" data-aos="fade-up">
                Authorized institutional structure of Saint Anthony Mary Claret College.
            </div>
        </div>
    </section>

    {{-- ── VISION, MISSION & CHARACTER ───────────────────────────────────────── --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-24">
                {{-- Vision --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start" data-aos="fade-up">
                    <div class="lg:col-span-4">
                        <h2 class="text-2xl font-heading text-neutral-900 border-l-4 border-primary-600 pl-6">Vision Statement</h2>
                    </div>
                    <div class="lg:col-span-8">
                        <p class="text-lg text-neutral-600 leading-relaxed italic">
                            "Embracing Claret's missionary spirit, SAMCC is cultivating a nurturing academic community that prepares students for missionary life as priests, religious, and laity through holistic education, personal growth, and a strong sense of mission, all rooted in a deep commitment to the proclamation of the Gospel, aiming to make a transformative impact on the world."
                        </p>
                    </div>
                </div>

                <div class="h-px w-full bg-neutral-100"></div>

                {{-- Mission --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start" data-aos="fade-up">
                    <div class="lg:col-span-4">
                        <h2 class="text-2xl font-heading text-neutral-900 border-l-4 border-primary-600 pl-6">Mission Statements and Goals</h2>
                    </div>
                    <div class="lg:col-span-8">
                        <div class="flex items-start gap-4">
                            <i data-lucide="chevron-right" class="w-6 h-6 text-primary-600 shrink-0 mt-1"></i>
                            <p class="text-lg text-neutral-600 leading-relaxed font-medium">
                                SAMCC is dedicated to fostering a school of philosophy that upholds the pursuit of right reason within a strong Catholic Christian tradition.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="h-px w-full bg-neutral-100"></div>

                {{-- Formative Character --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start" data-aos="fade-up">
                    <div class="lg:col-span-4">
                        <h2 class="text-2xl font-heading text-neutral-900 border-l-4 border-primary-600 pl-6">The Formative Character</h2>
                    </div>
                    <div class="lg:col-span-8 space-y-8">
                        <p class="text-lg text-neutral-600 leading-relaxed">
                            SAMCC serves as a College of Philosophy and a Formation Center, meticulously prioritizing both intellectual training and nurturing Christian vocation, where each aspect mutually supports the other. The inseparability of intellectual life and religious formation is emphasized, fostering a harmonious relationship between faith and reason. As a center of studies with a strong formative focus, SAMCC employs prayer and study as dynamic elements deeply intertwined in the Claretian tradition, representing the distinctive feature of Claretian missionary vocation.
                        </p>
                        <p class="text-lg text-neutral-600 leading-relaxed">
                            Inspired by St. Anthony Mary Claret's example, the Claretian Congregation has consistently embraced the conviction that philosophy holds utmost significance in the initial period of academic formation for future missionaries and priests. The value of philosophy as an academic discipline within the seminary studies' formative program is indispensable in nurturing individuals who wholeheartedly strive to follow the heart of God, contributing to their intellectual formation as they embark on their sacred vocations.
                        </p>
                    </div>
                </div>
                <div class="h-px w-full bg-neutral-100"></div>

                {{-- Core Values --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start" data-aos="fade-up">
                    <div class="lg:col-span-4">
                        <h2 class="text-2xl font-heading text-neutral-900 border-l-4 border-primary-600 pl-6">Core Values: CHEERS</h2>
                    </div>
                    <div class="lg:col-span-8 space-y-10">
                        <div class="prose prose-lg prose-neutral max-w-none text-neutral-600">
                            <p class="text-lg leading-relaxed mb-10">
                                At SAMCC, we uphold core values that guide our actions and shape our community. These values hold immense importance and significance in our pursuit of personal and collective growth.
                            </p>
                            
                            <div class="space-y-12">
                                @php
                                    $values = [
                                        [
                                            'title' => 'Compassion',
                                            'verse' => 'Be kind and compassionate to one another, forgiving each other, just as in Christ God forgave you.',
                                            'ref' => 'Ephesians 4:32',
                                            'desc' => 'We demonstrate empathy and care to all, especially for the marginalized and vulnerable.'
                                        ],
                                        [
                                            'title' => 'Humility',
                                            'verse' => 'Do nothing out of selfish ambition or vain conceit. Rather, in humility value others above yourselves.',
                                            'ref' => 'Philippians 2:3',
                                            'desc' => 'Following the teachings of St. Anthony Mary Claret, we cultivate a spirit of humility in our interactions with others. We recognize our own limitations and value the inherent worth and talents of every individual.'
                                        ],
                                        [
                                            'title' => 'Excellence',
                                            'verse' => 'Whatever you do, work at it with all your heart, as working for the Lord, not for human masters.',
                                            'ref' => 'Colossians 3:23',
                                            'desc' => 'We pursue intellectual and academic growth, aiming to develop our full potential. We also embrace the development of character and virtues, fostering a culture of continuous improvement.'
                                        ],
                                        [
                                            'title' => 'Empowerment',
                                            'verse' => 'Each of you should use whatever gift you have received to serve others, as faithful stewards of God\'s grace in its various forms.',
                                            'ref' => '1 Peter 4:10',
                                            'desc' => 'We empower individuals to reach their full potential by promoting active participation, inclusive decisionmaking, and collaborative teamwork.'
                                        ],
                                        [
                                            'title' => 'Respect for life',
                                            'verse' => 'I have come that they may have life, and have it to the full',
                                            'ref' => 'John 10:10',
                                            'desc' => 'This inspires us to pursue justice, peace, and integrity in all creation, becoming responsible stewards of God\'s gift for a sustainable and harmonious future.'
                                        ],
                                        [
                                            'title' => 'Service to Others',
                                            'verse' => 'For even the Son of Man did not come to be served, but to serve, and to give his life as a ransom for many.',
                                            'ref' => 'Mark 10:45',
                                            'desc' => 'Embracing a service-oriented mindset, we recognize that our purpose extends beyond ourselves. We actively seek opportunities to contribute to the well-being of others, championing justice, peace, and the responsible stewardship of creation.'
                                        ]
                                    ];
                                @endphp

                                @foreach($values as $value)
                                    <div>
                                        <h3 class="text-xl font-bold text-neutral-900 mb-2">{{ $value['title'] }}: <span class="text-neutral-600 font-normal italic"> "{{ $value['verse'] }}" ({{ $value['ref'] }})</span></h3>
                                        <p class="text-neutral-600 leading-relaxed">{{ $value['desc'] }}</p>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-12 pt-8 border-t border-neutral-100">
                                <p class="text-lg leading-relaxed">
                                    By upholding the core values of <span class="font-bold text-primary-600 uppercase">compassion, humility, excellence, empowerment, respect for others, and service to others</span>, SAMCC strives to cultivate an environment that nurtures personal growth, fosters ethical leadership, and instills a profound dedication to the betterment of society.
                                </p>
                                <p class="text-lg leading-relaxed mt-6">
                                    Through these values, we seek to inspire individuals to make a positive impact in the world, embracing their unique talents and virtues while actively serving others with empathy, humility, and a commitment to excellence. Together, we aim to create a community that embodies these values and contributes to the holistic development of individuals and the greater good of society.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
