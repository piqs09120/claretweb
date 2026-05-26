@extends('layouts.app')

@section('title', 'Undergraduate Department - AB Philosophy')
@section('meta_description', 'Explore our four-year Undergraduate Bachelor of Arts Major in Philosophy program at St. Anthony Mary Claret College.')

@section('content')

    {{-- ── BANNER ───────────────────────────────────────────────────────────── --}}
    {{-- height set to 60vh for a cinematic video feel --}}
    <section class="relative bg-neutral-900 overflow-hidden" style="margin-top: 90px; min-height: 60vh;" data-aos="fade-in">
        {{-- Background Video --}}
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover pointer-events-none">
            <source src="{{ asset('videos/undergraduate.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        {{-- Subtle dark overlay for text readability --}}
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        {{-- Centered title content --}}
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex items-center justify-center" style="min-height: 60vh; padding-top: 60px; padding-bottom: 60px;">
            <h1 class="text-white text-5xl md:text-8xl font-heading font-medium drop-shadow-2xl" data-aos="zoom-out" data-aos-duration="1500">Undergraduate Department</h1>
        </div>
    </section>

    <x-samcc.breadcrumbs 
        :items="[
            ['label' => 'Academics', 'url' => route('home') . '#academics'],
            ['label' => 'Programs'],
            ['label' => 'Undergraduate Department']
        ]" 
    />

    {{-- ── COMMITMENT TO EXCELLENCE ───────────────────────────────────────────── --}}
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12" data-aos="fade-up">
                <span class="text-neutral-900 font-bold text-sm block mb-4">Our Curriculum Overview</span>
                <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-8 leading-tight">A Commitment to Excellence
                </h2>
                <div class="w-12 h-1 bg-primary-600 mb-10"></div>

                <p class="text-neutral-700 leading-relaxed text-lg">
                    SAMCC stands as a College of Philosophy and a Formation Center committed to academic excellence and
                    Catholic formation. It offers a curriculum where faith and reason work together, nurturing both
                    intellectual growth and spiritual maturity. Rooted in the Claretian tradition, SAMCC emphasizes the
                    value of philosophy as a foundation for critical thinking, responsible leadership, and service to the
                    Church and society. Through study and prayer, the school provides an environment where students are
                    guided to discover truth, deepen their Catholic identity, and prepare for lives of purpose and mission.
                </p>
            </div>

            {{-- CURRICULUM HEADER --}}
            <div class="mt-24 mb-16" data-aos="fade-up">
                <span class="text-neutral-900 font-bold text-sm block mb-4 uppercase tracking-wide">Undergraduate
                    Department</span>
                <h2 class="text-5xl md:text-6xl font-heading text-neutral-900 mb-8">Curriculum 2024</h2>
                <div class="w-12 h-1 bg-primary-600"></div>
            </div>

            @php
                $curriculum = [
                    [
                        'title' => 'FIRST YEAR, FIRST SEMESTER',
                        'units_total' => 23,
                        'subjects' => [
                            ['num' => 'ENG 1', 'title' => 'Purposive Communication 1', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'MATH MOD', 'title' => 'Mathematics in the Modern World', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'PHIL HIST', 'title' => 'Readings in Philippine History', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'PHILO 101', 'title' => 'Introduction to Philosophy', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'PSY 1', 'title' => 'Understanding the Self', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'TH 1', 'title' => 'Theology 1: History of Salvation', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'PE 1', 'title' => 'Physical Education 1: Activities Towards Health & Fitness 1', 'units' => 2, 'pre' => 'none'],
                            ['num' => 'NSTP 1', 'title' => 'National Service Training Program 1 (CWTS)', 'units' => 3, 'pre' => 'none'],
                        ]
                    ],
                    [
                        'title' => 'FIRST YEAR, SECOND SEMESTER',
                        'units_total' => 26,
                        'subjects' => [
                            ['num' => 'ART APP', 'title' => 'Art Appreciation', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'ENG 2', 'title' => 'Purposive Communication 2', 'units' => 3, 'pre' => 'ENG 1'],
                            ['num' => 'CON WORLD', 'title' => 'The Contemporary World', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'PHILO 102', 'title' => 'Logic', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'PHILO 201', 'title' => 'History of Western Philosophy 1 (Ancient Philosophy)', 'units' => 3, 'pre' => 'PHILO 101'],
                            ['num' => 'SCTECHS', 'title' => 'Science, Technology and Society', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'TH 2', 'title' => 'Theology 2: Creed', 'units' => 3, 'pre' => 'TH 1'],
                            ['num' => 'PE 2', 'title' => 'Physical Education 2: Activities Towards Health & Fitness 2', 'units' => 2, 'pre' => 'PE 1'],
                            ['num' => 'NSTP 2', 'title' => 'National Service Training Program 2 (CWTS)', 'units' => 3, 'pre' => 'NSTP 1'],
                        ]
                    ],
                    [
                        'title' => 'SECOND YEAR, FIRST SEMESTER',
                        'units_total' => 23,
                        'subjects' => [
                            ['num' => 'PHILO 103', 'title' => 'Metaphysics', 'units' => 3, 'pre' => 'PHILO 101, PHILO 102'],
                            ['num' => 'PHILO 104', 'title' => 'Epistemology / Theory of Knowledge', 'units' => 3, 'pre' => 'PHILO 101, PHILO 102'],
                            ['num' => 'PHILO 105', 'title' => 'Philosophical Anthropology', 'units' => 3, 'pre' => 'PHILO 101, PHILO 102'],
                            ['num' => 'PHILO 114', 'title' => 'Aesthetics / Theories of Art', 'units' => 3, 'pre' => 'ART APP'],
                            ['num' => 'RIZAL', 'title' => 'Life and Works of Rizal', 'units' => 3, 'pre' => 'PHIL HIST'],
                            ['num' => 'SP 1', 'title' => 'Spanish 1: Elementary Spanish', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'TH 3', 'title' => 'Theology 3: Liturgy and Sacraments', 'units' => 3, 'pre' => 'TH 2'],
                            ['num' => 'PE 3', 'title' => 'Physical Education 3: Activities Towards Health & Fitness 3', 'units' => 2, 'pre' => 'PE 2'],
                        ]
                    ],
                    [
                        'title' => 'SECOND YEAR, SECOND SEMESTER',
                        'units_total' => 23,
                        'subjects' => [
                            ['num' => 'PHILO 106', 'title' => 'Ethics', 'units' => 3, 'pre' => 'PHILO 101, PHILO 102'],
                            ['num' => 'PHILO 115', 'title' => 'Modern Asian Thoughts', 'units' => 3, 'pre' => 'PHILO 101, PHILO 102'],
                            ['num' => 'PHILO 202', 'title' => 'Philosophy of the Church Fathers', 'units' => 3, 'pre' => 'PHILO 201'],
                            ['num' => 'PHILO 203', 'title' => 'History of Western Philosophy 2 (Medieval Philosophy)', 'units' => 3, 'pre' => 'PHILO 202'],
                            ['num' => 'PSY 2', 'title' => 'Personality Theories', 'units' => 3, 'pre' => 'PSY 1'],
                            ['num' => 'SP 2', 'title' => 'Spanish 2: Intermediate Spanish', 'units' => 3, 'pre' => 'SP 1'],
                            ['num' => 'TH 4', 'title' => 'Theology 4: Christian Morality', 'units' => 3, 'pre' => 'TH 3'],
                            ['num' => 'PE 4', 'title' => 'Physical Education 4: Activities Towards Health & Fitness 4', 'units' => 2, 'pre' => 'PE 3'],
                        ]
                    ],
                    [
                        'title' => 'THIRD YEAR, FIRST SEMESTER',
                        'units_total' => 21,
                        'subjects' => [
                            ['num' => 'ENG 3', 'title' => 'Scientific Writing', 'units' => 3, 'pre' => 'ENG 2'],
                            ['num' => 'PHILO 107', 'title' => 'Theodicy / Philosophy of Religion', 'units' => 3, 'pre' => 'PHILO 201'],
                            ['num' => 'PHILO 108', 'title' => 'Cosmology / Philosophy of Science and Technology', 'units' => 3, 'pre' => 'PHILO 101, PHILO 102'],
                            ['num' => 'PHILO 110', 'title' => 'Political and Social Philosophy', 'units' => 3, 'pre' => 'PHILO 203'],
                            ['num' => 'PHILO 111', 'title' => 'History of Chinese Philosophy', 'units' => 3, 'pre' => '6 units of Philosophy'],
                            ['num' => 'PHILO 113', 'title' => 'Philosophy of Language', 'units' => 3, 'pre' => 'PHILO 101, PHILO 102'],
                            ['num' => 'PHILO 204', 'title' => 'Modern Philosophy', 'units' => 3, 'pre' => 'PHILO 203'],
                        ]
                    ],
                    [
                        'title' => 'THIRD YEAR, SECOND SEMESTER',
                        'units_total' => 18,
                        'subjects' => [
                            ['num' => 'PHILO 109', 'title' => 'Existentialism and Phenomenology', 'units' => 3, 'pre' => 'PHILO 205'],
                            ['num' => 'PHILO 112', 'title' => 'History of Indian Philosophy', 'units' => 3, 'pre' => '6 units of Philosophy'],
                            ['num' => 'PHILO 205', 'title' => 'Seminar on Contemporary Philosophy (Enlightenment and Modernity)', 'units' => 3, 'pre' => 'PHILO 204'],
                            ['num' => 'PSY 3', 'title' => 'Introduction to Counseling Theory & Methods with Group Dynamics', 'units' => 3, 'pre' => 'PSY 2'],
                            ['num' => 'SCAN', 'title' => 'Social and Cultural Anthropology', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'TW 1', 'title' => 'Thesis Writing 1: Research Methodology', 'units' => 3, 'pre' => 'ENG 4'],
                        ]
                    ],
                    [
                        'title' => 'FOURTH YEAR, FIRST SEMESTER',
                        'units_total' => 11,
                        'subjects' => [
                            ['num' => 'LAT 1', 'title' => 'Latin 1: Grammar and Syntax', 'units' => 3, 'pre' => 'none'],
                            ['num' => 'SEM-A', 'title' => 'Special Questions on Philosophy: Political Philosophy and Catholic Social Thought', 'units' => 3, 'pre' => 'all subjects'],
                            ['num' => 'SEM-B', 'title' => 'Special Questions on Ethics (Bioethics and Contemporary Ethics)', 'units' => 3, 'pre' => 'all subjects'],
                            ['num' => 'TW 2', 'title' => 'Thesis Writing 2: Thesis Writing', 'units' => 2, 'pre' => 'TW 1'],
                        ]
                    ],
                    [
                        'title' => 'FOURTH YEAR, SECOND SEMESTER',
                        'units_total' => 12,
                        'subjects' => [
                            ['num' => 'LAT 2', 'title' => 'Latin 2: Latin Translation', 'units' => 3, 'pre' => 'LAT 1'],
                            ['num' => 'SEM-C', 'title' => 'Seminar on Filipino and Indigenous Philosophies', 'units' => 3, 'pre' => 'ALL SUBJECTS'],
                            ['num' => 'SEM-D', 'title' => 'Seminar on Aristotle and the Thomistic Tradition', 'units' => 3, 'pre' => 'ALL SUBJECTS'],
                            ['num' => 'SYN', 'title' => 'Comparative Philosophy - East and West (Life Philosophies and Synthesis)', 'units' => 3, 'pre' => 'ALL SUBJECTS'],
                            ['num' => 'TW 3', 'title' => 'Thesis Writing 3: Writing and Defense', 'units' => 1, 'pre' => 'ALL SUBJECTS'],
                        ]
                    ],
                ];
            @endphp

            @foreach($curriculum as $sem)
                <div class="mb-16" data-aos="fade-up">
                    <h3 class="text-sm font-bold text-neutral-900 mb-6 uppercase tracking-widest">{{ $sem['title'] }}</h3>
                    <div class="overflow-hidden rounded-lg border border-neutral-100 shadow-sm">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-neutral-50 text-neutral-900 text-xs font-bold uppercase tracking-wider">
                                    <th class="px-6 py-4 border-b border-neutral-100">Course Number</th>
                                    <th class="px-6 py-4 border-b border-neutral-100">Course Title</th>
                                    <th class="px-6 py-4 border-b border-neutral-100 text-center">Units</th>
                                    <th class="px-6 py-4 border-b border-neutral-100">Pre-requisite</th>
                                </tr>
                            </thead>
                            <tbody class="text-neutral-600 text-sm">
                                @foreach($sem['subjects'] as $sub)
                                    <tr class="hover:bg-neutral-50/50 transition-colors">
                                        <td class="px-6 py-4 border-b border-neutral-50">{{ $sub['num'] }}</td>
                                        <td class="px-6 py-4 border-b border-neutral-50 uppercase">{{ $sub['title'] }}</td>
                                        <td class="px-6 py-4 border-b border-neutral-50 text-center">{{ $sub['units'] }}</td>
                                        <td class="px-6 py-4 border-b border-neutral-50 text-xs italic opacity-75">{{ $sub['pre'] }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="bg-neutral-50 text-neutral-900 font-bold">
                                    <td colspan="2" class="px-6 py-4 text-right">Total Units:</td>
                                    <td class="px-6 py-4 text-center">{{ $sem['units_total'] }}</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            @endforeach

            {{-- SUMMARY OF UNITS --}}
            <div class="mt-24 mb-16" data-aos="fade-up">
                <h3 class="text-sm font-bold text-neutral-900 mb-6 uppercase tracking-widest">SUMMARY OF UNITS</h3>
                <div class="overflow-hidden rounded-lg border border-neutral-100 shadow-sm">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-neutral-50 text-neutral-900 text-xs font-bold uppercase tracking-wider">
                                <th class="px-6 py-4 border-b border-neutral-100">Course Title</th>
                                <th class="px-6 py-4 border-b border-neutral-100 text-center">Number of Units</th>
                                <th class="px-6 py-4 border-b border-neutral-100 text-center">Total Number of Units</th>
                            </tr>
                        </thead>
                        <tbody class="text-neutral-600 text-sm">
                            <tr class="hover:bg-neutral-50/50 transition-colors">
                                <td class="px-6 py-4 border-b border-neutral-50">1st year</td>
                                <td class="px-6 py-4 border-b border-neutral-50 text-center">23 + 26</td>
                                <td class="px-6 py-4 border-b border-neutral-50 text-center font-bold">49</td>
                            </tr>
                            <tr class="hover:bg-neutral-50/50 transition-colors">
                                <td class="px-6 py-4 border-b border-neutral-50">2nd year</td>
                                <td class="px-6 py-4 border-b border-neutral-50 text-center">23 + 23</td>
                                <td class="px-6 py-4 border-b border-neutral-50 text-center font-bold">46</td>
                            </tr>
                            <tr class="hover:bg-neutral-50/50 transition-colors">
                                <td class="px-6 py-4 border-b border-neutral-50">3rd year</td>
                                <td class="px-6 py-4 border-b border-neutral-50 text-center">21 + 18</td>
                                <td class="px-6 py-4 border-b border-neutral-50 text-center font-bold">39</td>
                            </tr>
                            <tr class="hover:bg-neutral-50/50 transition-colors">
                                <td class="px-6 py-4 border-b border-neutral-50">4th year</td>
                                <td class="px-6 py-4 border-b border-neutral-50 text-center">11 + 12</td>
                                <td class="px-6 py-4 border-b border-neutral-50 text-center font-bold">23</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="bg-neutral-900 text-white font-bold">
                                <td colspan="2" class="px-6 py-5 text-right uppercase tracking-widest text-xs">Grand Total
                                </td>
                                <td class="px-6 py-5 text-center text-lg">158</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <p class="mt-6 text-xs text-neutral-500 italic">
                    Note: The Enriched Curriculum 2024 duly approved by CHED on February 28, 2024 for implementation
                    effective AY 2024-2025.
                </p>
            </div>

            {{-- COURSE DESCRIPTIONS --}}
            <div class="mt-32">
                <div class="mb-12" data-aos="fade-up">
                    <h2 class="text-4xl font-heading text-neutral-900 mb-6">Course Descriptions</h2>
                    <div class="w-12 h-1 bg-primary-600"></div>
                </div>

                <div class="space-y-12">
                    @php
                        $descriptions = [
                            [
                                'category' => 'GENERAL EDUCATION CORE COURSES',
                                'items' => [
                                    ['code' => 'UND SELF', 'title' => 'Understanding the Self', 'desc' => 'This course is designed to study human development throughout the years of growth; deal with the nature of identity; and identify the factors and forces that affect the development and maintenance of one\'s identity.'],
                                    ['code' => 'PHIL HIST', 'title' => 'Readings in Philippine History', 'desc' => 'The course analyzes Philippine history from multiple perspectives through the lens of selected primary sources... The end goal is to develop the historical and critical consciousness of the students so that they will become versatile, broad-minded, morally upright and engaged citizens.'],
                                    ['code' => 'CON WORLD', 'title' => 'The Contemporary World', 'desc' => 'This course introduces the students to the contemporary world by examining the multifaceted phenomenon of globalization... It further seeks to inculcate on the wisdom of global citizenship and ethical responsibility.'],
                                    ['code' => 'MATH MOD', 'title' => 'Mathematics in the Modern World', 'desc' => 'This course deals with the nature of mathematics, appreciation of its practical, intellectual, and aesthetic dimensions, and application of mathematical tools in daily life.'],
                                    ['code' => 'ENG 1', 'title' => 'Purposive Communication 1', 'desc' => 'The course provides the opportunities to think critically and creatively and to communicate the outcomes of these thinking processes effectively to a multicultural audience. The outcomes are specifically defined as knowledge, skills and insights which the learners may find useful in the production of oral, written and audio-visual works for academic and non-academic purposes.'],
                                    ['code' => 'ART APP', 'title' => 'Art Appreciation', 'desc' => 'This course deals with the study of the nature of beauty and art... It also surveys the recent debates on aesthetic theories which pertains to the relation of philosophy and art.'],
                                ]
                            ],
                            [
                                'category' => 'PROFESSIONAL COURSES (PHILOSOPHY)',
                                'items' => [
                                    ['code' => 'PHILO 101', 'title' => 'Introduction to Philosophy', 'desc' => 'This course introduces students to key themes in philosophical inquiry—such as reality, knowledge, ethics, and human existence—while fostering a critical mindset.'],
                                    ['code' => 'PHILO 102', 'title' => 'Logic', 'desc' => 'This course is an introduction to the meaning and formation of terms, propositions and logical reasoning. It will acquaint the student with the fundamental properties and methods of valid reasoning.'],
                                    ['code' => 'PHILO 103', 'title' => 'Metaphysics', 'desc' => 'This course invites students into metaphysical inquiry—the deep exploration of being, reality, and the foundational structures that shape our understanding of existence.'],
                                    ['code' => 'PHILO 106', 'title' => 'Ethics', 'desc' => 'This course is a survey of ethical theories across philosophical traditions that problematize moral principles, ethical action and human flourishing through reflection and discourse on contemporary moral issues.'],
                                    ['code' => 'PHILO 201', 'title' => 'Ancient Philosophy', 'desc' => 'This course offers a structured exploration of Western philosophy\'s roots, beginning with the thinkers of classical antiquity—from the Presocratics through Plato and Aristotle to Hellenistic schools like Stoicism and Epicureanism.'],
                                ]
                            ]
                        ];
                    @endphp

                    @foreach($descriptions as $cat)
                        <div data-aos="fade-up" class="mb-16 last:mb-0">
                            <h3
                                class="text-xs font-bold text-primary-600 mb-6 uppercase tracking-widest border-b border-primary-100 pb-2">
                                {{ $cat['category'] }}
                            </h3>
                            <div class="overflow-hidden rounded-lg border border-neutral-100 shadow-sm">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-neutral-50 text-neutral-900 text-xs font-bold uppercase tracking-wider">
                                            <th class="px-6 py-4 border-b border-neutral-100" style="width: 200px;">Course
                                                Number</th>
                                            <th class="px-6 py-4 border-b border-neutral-100">Course Title and Description</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-neutral-600 text-sm">
                                        @foreach($cat['items'] as $item)
                                            <tr class="hover:bg-neutral-50/50 transition-colors align-top">
                                                <td
                                                    class="px-6 py-4 border-b border-neutral-50 font-bold text-neutral-900 whitespace-nowrap">
                                                    {{ $item['code'] }}
                                                </td>
                                                <td class="px-6 py-4 border-b border-neutral-50">
                                                    <div class="mb-2 font-bold text-neutral-900 uppercase">
                                                        {{ $item['title'] }}
                                                    </div>
                                                    <div class="text-neutral-600 leading-relaxed">
                                                        {{ $item['desc'] }}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

@endsection