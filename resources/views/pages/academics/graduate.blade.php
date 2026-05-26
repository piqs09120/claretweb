@extends('layouts.app')

@section('title', 'Graduate Program Offerings')
@section('meta_description', 'Institute for Consecrated Life in Asia (ICLA) - Explore our Graduate Program Offerings in Theology, Consecrated Life, Spirituality, and Missiology.')

@section('content')

    {{-- ── BANNER ───────────────────────────────────────────────────────────── --}}
    {{-- Cinematic video banner --}}
    <section class="relative bg-neutral-900 overflow-hidden" style="margin-top: 90px; min-height: 60vh;" data-aos="fade-in">
        {{-- Background Video --}}
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover pointer-events-none">
            <source src="{{ asset('videos/graduate.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        {{-- Subtle dark overlay for text readability --}}
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        {{-- Centered title content --}}
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex items-center justify-center" style="min-height: 60vh; padding-top: 60px; padding-bottom: 60px;">
            <h1 class="text-white text-5xl md:text-8xl font-heading font-medium drop-shadow-2xl" data-aos="zoom-out" data-aos-duration="1500">Graduate Program Offerings</h1>
        </div>
    </section>

    <x-samcc.breadcrumbs 
        :items="[
            ['label' => 'Academics', 'url' => route('home') . '#academics'],
            ['label' => 'Programs'],
            ['label' => 'Graduate Department']
        ]" 
    />

    {{-- ── CONTENT ──────────────────────────────────────────────────────────── --}}
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="mb-12" data-aos="fade-up">
                <span class="text-neutral-400 font-bold uppercase tracking-wider text-sm block mb-2">Institute for
                    Consecrated Life in Asia (ICLA)</span>
                <h2 class="text-4xl md:text-5xl font-heading text-neutral-900 mb-6">Graduate Program Offerings</h2>
                <div class="w-16 h-1 bg-primary-600 mb-10"></div>
            </div>

            {{-- A. PROGRAM DESCRIPTION --}}
            <div class="mb-20" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-neutral-900 mb-6 uppercase tracking-wide">A. PROGRAM DESCRIPTION</h3>
                <div class="text-neutral-600 leading-relaxed text-lg space-y-6">
                    <p>
                        As an institute of higher learning, the Graduate Department of St. Anthony Mary Claret College is
                        recognized by the Commission on Higher Education (CHED) of the Philippine government. It confers the
                        following civil degrees:
                    </p>
                    <ul class="list-none space-y-4 ml-4">
                        <li class="pl-6 relative">
                            <span class="absolute left-0 top-3 w-2 h-2 rounded-full bg-primary-600"></span>
                            <span class="font-bold text-neutral-900">Master of Arts (M.A.) in Theology with majors
                                in:</span>
                            <ul class="list-disc list-inside ml-6 mt-2 text-base">
                                <li>Consecrated Life</li>
                                <li>Spirituality</li>
                                <li>Missiology</li>
                                <li>Biblical Ministry</li>
                            </ul>
                        </li>
                        <li class="pl-6 relative">
                            <span class="absolute left-0 top-3 w-2 h-2 rounded-full bg-primary-600"></span>
                            <span class="font-bold text-neutral-900">Doctor of Philosophy (Ph.D.) in Theology with majors
                                in:</span>
                            <ul class="list-disc list-inside ml-6 mt-2 text-base">
                                <li>Consecrated Life</li>
                                <li>Missiology</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- MA MAJOR IN CONSECRATED LIFE --}}
            <div class="mb-16 pb-16 border-b border-neutral-100" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-neutral-900 mb-6 uppercase tracking-wide">MASTER OF ARTS IN THEOLOGY,
                    MAJOR IN CONSECRATED LIFE</h3>
                <div class="text-neutral-600 leading-relaxed text-lg space-y-4">
                    <p>
                        The program's vision is integrative. Consecrated Life is studied in its essential relationship with
                        other forms of Christian life in the Church, especially that of the laity, and the Godhead
                        Three-in-One: to equip men and women to reflect in faith on Consecrated Life in its various aspects
                        (re-Consecrated Life). In a systematic, dynamic, dialogical, and creative manner.
                    </p>
                    <p>
                        The approach is intercultural and providing with perspectives on Sociology, Psychology and other
                        human sciences for a fuller understanding of Christians nowadays. Guided by the evangelical
                        counsels, the program seeks to achieve a form of Consecrated Life that is lived in diverse and
                        contextual mission, cultural and spiritual traditions.
                    </p>
                </div>
            </div>

            {{-- MA MAJOR IN SPIRITUALITY --}}
            <div class="mb-16 pb-16 border-b border-neutral-100" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-neutral-900 mb-6 uppercase tracking-wide">MASTER OF ARTS IN THEOLOGY,
                    MAJOR IN SPIRITUALITY</h3>
                <div class="text-neutral-600 leading-relaxed text-lg">
                    <p>
                        The Spirituality Program forms religious and lay men and women in Christian spiritual and spiritual
                        discernment. It provides both the theoretical and effective knowledge of Christian spirituality for
                        faith in the Asian context, exposing students to Asian traditions and various Christian spiritual
                        practices. In this way, students learn from diverse and patient dialogical and intercultural
                        resources as experiences God has distributed among the nations of the earth. (Ad Gentes, n. 11).
                    </p>
                </div>
            </div>

            {{-- MA MAJOR IN MISSIOLOGY --}}
            <div class="mb-16 pb-16 border-b border-neutral-100" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-neutral-900 mb-6 uppercase tracking-wide">MASTER OF ARTS IN THEOLOGY,
                    MAJOR IN MISSIOLOGY</h3>
                <div class="text-neutral-600 leading-relaxed text-lg space-y-4">
                    <p>
                        The Missiology Program prepares missiologists and missionaries to serve God's reign, especially in
                        the Philippines, Asia, and the Pacific. It provides the theoretical and practical skills for
                        dialogue with other faiths&mdash;dialogue with cultures, the poor, the marginalized, and people of
                        different religions such as Islam.
                    </p>
                    <p>
                        The growth of emergent churches in Asia and the Pacific challenges local churches to prepare
                        personnel who will sustain and nurture these new communities within the theological reflections of
                        the world&mdash;Missiology is the theology of forming such mission.
                    </p>
                </div>
            </div>

            {{-- MA MAJOR IN BIBLICAL MINISTRY --}}
            <div class="mb-16 pb-16 border-b border-neutral-100" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-neutral-900 mb-6 uppercase tracking-wide">MASTER OF ARTS IN THEOLOGY,
                    MAJOR IN BIBLICAL MINISTRY</h3>
                <div class="text-neutral-600 leading-relaxed text-lg space-y-4">
                    <p>
                        In response to the Church's call that pastoral activity be inspired by the Bible (Dei Verbum n. 24),
                        the Biblical Ministry Program focuses on forming Ministers of the Word with a strong foundation in
                        Scripture: to lead, to encourage, nurture students and proclamation of the Word and cultivate a
                        living relationship with the Scriptures in liturgy, catechesis, and research (Verbum Domini nn. 7,
                        8).
                    </p>
                    <p>
                        Complemented by courses in Missiology and Spirituality, the program prepares students for missionary
                        service of the Word in diverse pastoral settings.
                    </p>
                </div>
            </div>

            {{-- Ph.D. IN THEOLOGY --}}
            <div class="mb-16 pb-16 border-b border-neutral-100" data-aos="fade-up">
                <h3 class="text-3xl font-bold text-neutral-900 mb-8 uppercase tracking-wide">DOCTOR OF PHILOSOPHY (Ph.D.) IN
                    THEOLOGY</h3>
                <div class="text-neutral-600 leading-relaxed text-lg space-y-6">
                    <p>
                        The <span class="font-bold text-neutral-900">Doctor of Philosophy (Ph.D.) in Theology</span> is the
                        highest academic degree of theology and pastoral studies, signifying both intellectual breadth and
                        the ability to contribute original insights. It is not merely an academic pursuit, but a service to
                        community, scholars, and church (Vita Consecrata n. 98).
                    </p>
                    <p>
                        The program moves students beyond knowledge acquisition toward generating new insights through
                        research, critical analysis, and engagement with contemporary problems. Rooted in faith commitment
                        to follow Jesus in meeting and responding to basic conditions in missionary call, cultural, and
                        social contexts of our time in light of Scripture and Tradition in service of the People of God.
                    </p>
                </div>

                {{-- Ph.D. Majors --}}
                <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-12 bg-neutral-50 p-10 rounded-3xl border border-neutral-100">
                    <div>
                        <h4 class="text-xl font-bold text-neutral-900 mb-4">Ph.D. in Theology, Major in Consecrated Life
                        </h4>
                        <p class="text-neutral-600 text-base leading-relaxed">
                            The specialization deepens theological and pastoral reflection on Consecrated Life in dialogue
                            with the multi-cultural and spiritual traditions while integrating Scripture, Tradition, the
                            Magisterium, and the charisms of religious institutes with insights from human sciences. It
                            promotes constant and renewed listening, studying and emerging challenges to consecrated life,
                            committing to its renewal as a "living memorial of Jesus' way of living and acting" (Vita
                            Consecrata n. 22).
                        </p>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-neutral-900 mb-4">Ph.D. in Theology, Major in Missiology</h4>
                        <p class="text-neutral-600 text-base leading-relaxed">
                            This specialization explores the theology and praxis of mission in today's pluralistic and
                            globalized world. Rooted in Scripture, Christian tradition, and the insights of the church, it
                            engages with pressing matters such as religious, ecological crises, secularization, and
                            intercultural dialogue. It contributes toward making the Church's task authentic by proclaiming
                            Christ while recognizing the Spirit's presence in cultures and religions. They are formed to
                            create innovative pastoral approaches that would revitalize and strengthen the Church's mission
                            in Asia and beyond.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection