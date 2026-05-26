@extends('layouts.app')

@section('title', 'Contact Us')
@section('meta_description', 'Get in touch with St. Anthony Mary Claret College. Our admissions office is happy to answer your questions about enrollment, programs, and campus life.')

@section('content')

{{-- Hero --}}
<x-samcc.hero 
    variant="page"
    title="Contact Us"
    subtitle="Have questions about admissions, programs, or campus life? Our team is ready to assist you."
/>

<x-samcc.breadcrumbs 
    :items="[
        ['label' => 'Contact Us']
    ]" 
/>

{{-- Contact Section --}}
<section class="section-padding bg-white dark:bg-gray-950">
    <div class="container-xl">
        <div class="flex flex-col lg:flex-row gap-10 lg:gap-16 items-stretch">
            
            {{-- Image Side --}}
            <div class="w-full lg:w-1/2 rounded-2xl overflow-hidden shadow-sm border border-neutral-100 dark:border-gray-800 relative bg-neutral-100 min-h-[400px]">
                {{-- Ensure to upload or change this placeholder to the correct Banyuhay logo image --}}
                <img src="{{ asset('images/acad.jpg') }}" alt="Contact Logo" class="absolute inset-0 w-full h-full object-cover">
            </div>

            {{-- Info Side --}}
            <div class="w-full lg:w-1/2 flex flex-col justify-center py-4 lg:py-8">
                <!-- Subheading -->
                <p class="text-base font-bold text-primary-900 dark:text-primary-400 mb-2">Get In Touch With Us</p>
                
                <!-- Heading -->
                <h2 class="text-4xl md:text-5xl font-bold text-primary-900 dark:text-white mb-6 font-heading">International Academy Manila</h2>
                
                <!-- Description -->
                <p class="text-neutral-600 dark:text-neutral-400 mb-10 text-base leading-relaxed">
                    Have questions or need assistance? The International Academy Manila team is ready to help! Whether you're a student, parent, prospective learner, or partner, feel free to reach out through any of the channels below.
                </p>

                <!-- School Info Title -->
                <h3 class="text-3xl font-bold text-primary-900 dark:text-white mb-6 font-heading">School Info:</h3>
                
                <!-- Contact Details -->
                <div class="space-y-4 mb-10">
                    <div class="flex gap-4 items-center">
                        <i data-lucide="phone" class="w-6 h-6 text-primary-800 flex-shrink-0"></i>
                        <span class="text-neutral-600 dark:text-neutral-300 text-[17px] font-medium">Main Office: (+639) 27 355 3321</span>
                    </div>
                    <div class="flex gap-4 items-center">
                        <i data-lucide="mail" class="w-6 h-6 text-primary-800 flex-shrink-0"></i>
                        <span class="text-neutral-600 dark:text-neutral-300 text-[17px] font-medium">Admissions: admissions@iamanila.edu.ph</span>
                    </div>
                    <div class="flex gap-4 items-start">
                        <i data-lucide="map-pin" class="w-6 h-6 mt-0.5 text-primary-800 flex-shrink-0"></i>
                        <span class="text-neutral-600 dark:text-neutral-300 text-[17px] font-medium leading-relaxed">Level 2, Gallardo Building, Claret School of Quezon City, 8 Mayumi St., UP Village, Diliman, Quezon City</span>
                    </div>
                </div>

                {{-- Map Embed --}}
                <div class="rounded-xl overflow-hidden border border-neutral-200 shadow-sm h-72 lg:h-80 w-full relative">
                    <iframe 
                        src="https://maps.google.com/maps?q=Claret%20School%20of%20Quezon%20City&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
