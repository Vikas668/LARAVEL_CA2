<!DOCTYPE html >
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body class="bg-ivory">
    <header class="flex w-full h-fit p-2 pt-4" xmlns:livewire="http://www.w3.org/1999/html">
        <livewire:navbar>
        </livewire:navbar>
    </header>
    <main>
    
<div class="flex flex-col gap-8 py-12 px-6 max-w-7xl mx-auto">
    <!-- Hero Section -->
    <div class="flex flex-col lg:flex-row gap-8 items-center">
        <div class="lg:w-1/2">
            <h1 class="text-3xl lg:text-5xl font-serif text-kobicha mb-4">Our Story</h1>
            <p class="text-xl text-kobicha-800 italic mb-4">Building communities through meaningful participation.</p>
            <p class="text-lg text-kobicha">The HA Foundation was established with a simple yet powerful vision: to create spaces where everyone's voice matters. Our journey began when a group of passionate individuals recognized the need for more inclusive community development practices.</p>
        </div>
        <div class="lg:w-1/2 flex justify-center">
            <img src="{{ Vite::asset('storage/app/public/images/our-story.svg') }}" alt="Our Story" class="w-4/5">
        </div>
    </div>

    <!-- Timeline Section -->
    <div class="py-10">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-8 text-center">Our Journey</h2>

        <div class="flex flex-col gap-12">
            <!-- Timeline Item 1 -->
            <div class="flex flex-col md:flex-row gap-6">
                <div class="md:w-1/3 flex justify-center">
                    <div class="bg-kobicha-50 rounded-xl p-6 text-center">
                        <h3 class="text-kobicha font-bold text-xl mb-2">2019</h3>
                        <p class="text-kobicha">Foundation Established</p>
                    </div>
                </div>
                <div class="md:w-2/3 bg-ivory-100 rounded-xl p-6">
                    <p class="text-kobicha">The HA Foundation was established by a group of community organizers, urban planners, and social entrepreneurs who shared a vision for more participatory approaches to community development.</p>
                </div>
            </div>

            <!-- Timeline Item 2 -->
            <div class="flex flex-col md:flex-row gap-6">
                <div class="md:w-1/3 flex justify-center">
                    <div class="bg-kobicha-50 rounded-xl p-6 text-center">
                        <h3 class="text-kobicha font-bold text-xl mb-2">2021</h3>
                        <p class="text-kobicha">First Community Project</p>
                    </div>
                </div>
                <div class="md:w-2/3 bg-ivory-100 rounded-xl p-6">
                    <p class="text-kobicha">We launched our first community-led initiative, bringing together residents to reimagine public spaces in their neighborhood. This project set the foundation for our participatory approach.</p>
                </div>
            </div>

            <!-- Timeline Item 3 -->
            <div class="flex flex-col md:flex-row gap-6">
                <div class="md:w-1/3 flex justify-center">
                    <div class="bg-kobicha-50 rounded-xl p-6 text-center">
                        <h3 class="text-kobicha font-bold text-xl mb-2">2023</h3>
                        <p class="text-kobicha">National Recognition</p>
                    </div>
                </div>
                <div class="md:w-2/3 bg-ivory-100 rounded-xl p-6">
                    <p class="text-kobicha">Our participatory model gained national attention, and we began expanding our programs to more communities nationwide, creating a network of engaged citizens working together.</p>
                </div>
            </div>

            <!-- Timeline Item 4 -->
            <div class="flex flex-col md:flex-row gap-6">
                <div class="md:w-1/3 flex justify-center">
                    <div class="bg-kobicha-50 rounded-xl p-6 text-center">
                        <h3 class="text-kobicha font-bold text-xl mb-2">Today</h3>
                        <p class="text-kobicha">Growing Impact</p>
                    </div>
                </div>
                <div class="md:w-2/3 bg-ivory-100 rounded-xl p-6">
                    <p class="text-kobicha">We continue to evolve and grow, with active projects in over 50 communities across the country. Our mission remains unchanged: to empower people to shape the future of their communities.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="py-10">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-8 text-center">Our Team</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-ivory-100 rounded-xl overflow-hidden">
                <div class="h-48 bg-kobicha-200"></div>
                <div class="p-6">
                    <h3 class="text-kobicha font-bold text-xl mb-1">Sarah Johnson</h3>
                    <p class="text-kobicha-700 italic mb-3">Executive Director</p>
                    <p class="text-kobicha">With over 15 years of experience in community organizing, Sarah brings passion and expertise to our foundation's leadership.</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-ivory-100 rounded-xl overflow-hidden">
                <div class="h-48 bg-kobicha-200"></div>
                <div class="p-6">
                    <h3 class="text-kobicha font-bold text-xl mb-1">Michael Chen</h3>
                    <p class="text-kobicha-700 italic mb-3">Director of Programs</p>
                    <p class="text-kobicha">Michael's background in urban planning informs our approach to creating meaningful community participation.</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-ivory-100 rounded-xl overflow-hidden">
                <div class="h-48 bg-kobicha-200"></div>
                <div class="p-6">
                    <h3 class="text-kobicha font-bold text-xl mb-1">Aisha Williams</h3>
                    <p class="text-kobicha-700 italic mb-3">Community Relations</p>
                    <p class="text-kobicha">Aisha ensures that our projects truly reflect the diverse needs and voices of community members.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="py-10">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-8 text-center">Our Values</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Value 1 -->
            <div class="bg-kobicha-50 rounded-xl p-6">
                <h3 class="text-kobicha font-bold text-xl mb-3">Inclusivity</h3>
                <p class="text-kobicha">We believe that every voice matters. Our processes are designed to include perspectives from all community members, regardless of background or status.</p>
            </div>

            <!-- Value 2 -->
            <div class="bg-kobicha-50 rounded-xl p-6">
                <h3 class="text-kobicha font-bold text-xl mb-3">Transparency</h3>
                <p class="text-kobicha">Open communication is fundamental to building trust. We share our processes, decisions, and outcomes with all stakeholders.</p>
            </div>

            <!-- Value 3 -->
            <div class="bg-kobicha-50 rounded-xl p-6">
                <h3 class="text-kobicha font-bold text-xl mb-3">Collaboration</h3>
                <p class="text-kobicha">We achieve more when we work together. Our approach brings diverse groups into productive partnerships for community benefit.</p>
            </div>

            <!-- Value 4 -->
            <div class="bg-kobicha-50 rounded-xl p-6">
                <h3 class="text-kobicha font-bold text-xl mb-3">Empowerment</h3>
                <p class="text-kobicha">We provide tools and frameworks that enable communities to take ownership of their development and future direction.</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-kobicha-100 rounded-xl p-8 flex flex-col items-center text-center">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-4">Join Our Mission</h2>
        <p class="text-lg text-kobicha mb-6 max-w-2xl">Become part of our growing community of change-makers who are reshaping how communities develop and thrive together.</p>
        <div class="flex flex-col sm:flex-row gap-4">
            <livewire:button :heading="'Get Involved'" :href="'/register'"></livewire:button>
            <livewire:button-secondary :heading="'Contact Us'" :href="'/contact'"></livewire:button-secondary>
        </div>
    </div>
</div>
    </main>
    <footer>
        <livewire:footer></livewire:footer>
    </footer>
    </body>
</html>
