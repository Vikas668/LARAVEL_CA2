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
        <!-- livewire/inspiration.blade.php -->
<div class="flex flex-col gap-8 py-12 px-6 max-w-7xl mx-auto">
    <!-- Hero Section -->
    <div class="flex flex-col lg:flex-row gap-8 items-center">
        <div class="lg:w-1/2">
            <h1 class="text-3xl lg:text-5xl font-serif text-kobicha mb-4">Inspiration</h1>
            <p class="text-xl text-kobicha-800 italic mb-4">Stories of community transformation.</p>
            <p class="text-lg text-kobicha">Discover how participatory approaches are creating positive change in communities across the country. These stories highlight the power of inclusive community engagement and serve as inspiration for what's possible when people come together.</p>
        </div>
        <div class="lg:w-1/2 flex justify-center">
            <img src="{{ Vite::asset('storage/app/public/images/inspiration.svg') }}" alt="Inspiration" class="w-4/5">
        </div>
    </div>

    <!-- Featured Story Section -->
    <div class="bg-kobicha-50 rounded-xl overflow-hidden">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/2 h-64 lg:h-auto bg-kobicha-200">
                <!-- Featured image would go here -->
            </div>
            <div class="lg:w-1/2 p-8">
                <span class="inline-block px-3 py-1 bg-kobicha-100 text-kobicha rounded-full text-sm mb-4">Featured Story</span>
                <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-3">Riverview Park Transformation</h2>
                <p class="text-kobicha mb-4">When residents of Eastside neighborhood came together to reimagine their neglected local park, something remarkable happened. Through a series of community workshops, design charrettes, and collaborative planning sessions, they transformed a once-forgotten space into a vibrant community hub.</p>
                <livewire:button-secondary :heading="'Read Full Story'" :href="'/inspiration/riverview-park'"></livewire:button-secondary>
            </div>
        </div>
    </div>

    <!-- Success Stories Grid -->
    <div class="py-10">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-8 text-center">Success Stories</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Story Card 1 -->
            <div class="bg-ivory-100 rounded-xl overflow-hidden">
                <div class="h-48 bg-kobicha-200">
                    <!-- Story image would go here -->
                </div>
                <div class="p-6">
                    <span class="inline-block px-3 py-1 bg-kobicha-50 text-kobicha rounded-full text-sm mb-2">Community Spaces</span>
                    <h3 class="text-kobicha font-bold text-xl mb-2">Youth Center Co-Design</h3>
                    <p class="text-kobicha mb-4">How teenagers in Westfield designed and created their own youth center that now serves hundreds of young people weekly.</p>
                    <livewire:button-secondary :heading="'Read More'" :href="'/inspiration/youth-center'"></livewire:button-secondary>
                </div>
            </div>

            <!-- Story Card 2 -->
            <div class="bg-ivory-100 rounded-xl overflow-hidden">
                <div class="h-48 bg-kobicha-200">
                    <!-- Story image would go here -->
                </div>
                <div class="p-6">
                    <span class="inline-block px-3 py-1 bg-kobicha-50 text-kobicha rounded-full text-sm mb-2">Policy</span>
                    <h3 class="text-kobicha font-bold text-xl mb-2">Participatory Budgeting Win</h3>
                    <p class="text-kobicha mb-4">How residents of Northside successfully advocated for participatory budgeting that has transformed local resource allocation.</p>
                    <livewire:button-secondary :heading="'Read More'" :href="'/inspiration/participatory-budgeting'"></livewire:button-secondary>
                </div>
            </div>

            <!-- Story Card 3 -->
            <div class="bg-ivory-100 rounded-xl overflow-hidden">
                <div class="h-48 bg-kobicha-200">
                    <!-- Story image would go here -->
                </div>
                <div class="p-6">
                    <span class="inline-block px-3 py-1 bg-kobicha-50 text-kobicha rounded-full text-sm mb-2">Housing</span>
                    <h3 class="text-kobicha font-bold text-xl mb-2">Community Land Trust</h3>
                    <p class="text-kobicha mb-4">The story of how residents created a community land trust to ensure affordable housing in a rapidly gentrifying neighborhood.</p>
                    <livewire:button-secondary :heading="'Read More'" :href="'/inspiration/land-trust'"></livewire:button-secondary>
                </div>
            </div>
        </div>
    </div>

    <!-- Quote Section -->
    <div class="bg-kobicha-100 rounded-xl p-8 text-center">
        <blockquote class="max-w-3xl mx-auto">
            <p class="text-xl lg:text-2xl text-kobicha italic font-serif mb-4">"The most powerful projects are those where community members aren't just consulted, but are active co-creators throughout the entire process."</p>
            <cite class="text-kobicha font-bold">— Dr. Maya Rodriguez, Community Development Expert</cite>
        </blockquote>
    </div>

    <!-- Community Voices Section -->
    <div class="py-10">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-8 text-center">Community Voices</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Testimonial 1 -->
            <div class="bg-kobicha-50 rounded-xl p-6">
                <p class="text-kobicha italic mb-4">"Before this project, I never thought my voice mattered in community decisions. Now I understand that my perspective is valuable and can help create positive change."</p>
                <p class="text-kobicha font-bold">— Maria Gutierrez, Community Participant</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-kobicha-50 rounded-xl p-6">
                <p class="text-kobicha italic mb-4">"The participatory process helped us find solutions that worked for everyone. Instead of division, we found common ground and built something together."</p>
                <p class="text-kobicha font-bold">— James Washington, Neighborhood Resident</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-kobicha-50 rounded-xl p-6">
                <p class="text-kobicha italic mb-4">"As a local business owner, being part of this community planning process helped me understand my role in the bigger picture of our neighborhood's future."</p>
                <p class="text-kobicha font-bold">— David Kim, Small Business Owner</p>
            </div>

            <!-- Testimonial 4 -->
            <div class="bg-kobicha-50 rounded-xl p-6">
                <p class="text-kobicha italic mb-4">"I've lived here for 40 years and this is the first time I've felt truly heard. The community garden we created has become a gathering place for all generations."</p>
                <p class="text-kobicha font-bold">— Eleanor Thomas, Senior Resident</p>
            </div>
        </div>
    </div>

    <!-- Resources Section -->
    <div class="py-10">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-8 text-center">Inspiring Resources</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Resource 1 -->
            <div class="bg-ivory-100 rounded-xl p-6 flex flex-col h-full">
                <h3 class="text-kobicha font-bold text-xl mb-3">Community Toolkit</h3>
                <p class="text-kobicha mb-4 flex-grow">A practical guide to participatory community development processes, with templates and worksheets.</p>
                <div class="mt-auto">
                    <livewire:button-secondary :heading="'Download'" :href="'/resources/toolkit'"></livewire:button-secondary>
                </div>
            </div>

            <!-- Resource 2 -->
            <div class="bg-ivory-100 rounded-xl p-6 flex flex-col h-full">
                <h3 class="text-kobicha font-bold text-xl mb-3">Case Study Collection</h3>
                <p class="text-kobicha mb-4 flex-grow">In-depth analyses of successful participatory projects from diverse communities across the country.</p>
                <div class="mt-auto">
                    <livewire:button-secondary :heading="'View Cases'" :href="'/resources/case-studies'"></livewire:button-secondary>
                </div>
            </div>

            <!-- Resource 3 -->
            <div class="bg-ivory-100 rounded-xl p-6 flex flex-col h-full">
                <h3 class="text-kobicha font-bold text-xl mb-3">Video Stories</h3>
                <p class="text-kobicha mb-4 flex-grow">Watch community members share their experiences and the impact of participatory approaches.</p>
                <div class="mt-auto">
                    <livewire:button-secondary :heading="'Watch Videos'" :href="'/resources/videos'"></livewire:button-secondary>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="bg-kobicha-50 rounded-xl p-8">
        <div class="flex flex-col lg:flex-row gap-6 items-center">
            <div class="lg:w-2/3">
                <h2 class="text-2xl font-serif text-kobicha mb-3">Get Inspired</h2>
                <p class="text-kobicha">Subscribe to our monthly newsletter to receive inspiring stories, practical resources, and updates on participatory community development.</p>
            </div>
            <div class="lg:w-1/3">
                <form class="flex flex-col sm:flex-row gap-2">
                    <input type="email" placeholder="Your email address" class="px-4 py-2 rounded border border-kobicha-200 flex-grow">
                    <livewire:button :heading="'Subscribe'" :href="'#'"></livewire:button>
                </form>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-kobicha-100 rounded-xl p-8 flex flex-col items-center text-center">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-4">Create Your Own Story</h2>
        <p class="text-lg text-kobicha mb-6 max-w-2xl">Ready to start a participatory project in your community? We're here to help you turn inspiration into action.</p>
        <div class="flex flex-col sm:flex-row gap-4">
            <livewire:button :heading="'Get Started'" :href="'/register'"></livewire:button>
            <livewire:button-secondary :heading="'Talk to an Expert'" :href="'/contact'"></livewire:button-secondary>
        </div>
    </div>
</div>
    </main>
    <footer>
        <livewire:footer></livewire:footer>
    </footer>
    </body>
</html>
