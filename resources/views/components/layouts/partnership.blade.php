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
        <!-- livewire/partnership.blade.php -->
<div class="flex flex-col gap-8 py-12 px-6 max-w-7xl mx-auto">
    <!-- Hero Section -->
    <div class="flex flex-col lg:flex-row gap-8 items-center">
        <div class="lg:w-1/2">
            <h1 class="text-3xl lg:text-5xl font-serif text-kobicha mb-4">Partnership Opportunities</h1>
            <p class="text-xl text-kobicha-800 italic mb-4">Creating impact through meaningful collaboration.</p>
            <p class="text-lg text-kobicha">We believe in the power of partnerships to amplify our impact. By working together with organizations, businesses, and community groups, we can create more inclusive and effective community development initiatives.</p>
        </div>
        <div class="lg:w-1/2 flex justify-center">
            <img src="{{ Vite::asset('storage/app/public/images/partnership.svg') }}" alt="Partnership" class="w-4/5">
        </div>
    </div>

    <!-- Partnership Types Section -->
    <div class="py-10">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-8 text-center">Ways to Partner</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Partnership Type 1 -->
            <div class="bg-kobicha-50 rounded-xl p-6 flex flex-col h-full">
                <h3 class="text-kobicha font-bold text-xl mb-3">Community Organizations</h3>
                <p class="text-kobicha mb-4 flex-grow">Join forces with us to amplify your community impact. We provide frameworks, resources, and support to enhance your existing programs.</p>
                <div class="mt-auto">
                    <livewire:button-secondary :heading="'Learn More'" :href="'#org-section'"></livewire:button-secondary>
                </div>
            </div>

            <!-- Partnership Type 2 -->
            <div class="bg-kobicha-50 rounded-xl p-6 flex flex-col h-full">
                <h3 class="text-kobicha font-bold text-xl mb-3">Corporate Partners</h3>
                <p class="text-kobicha mb-4 flex-grow">Enhance your corporate social responsibility initiatives through strategic partnerships that create meaningful community engagement opportunities.</p>
                <div class="mt-auto">
                    <livewire:button-secondary :heading="'Learn More'" :href="'#corporate-section'"></livewire:button-secondary>
                </div>
            </div>

            <!-- Partnership Type 3 -->
            <div class="bg-kobicha-50 rounded-xl p-6 flex flex-col h-full">
                <h3 class="text-kobicha font-bold text-xl mb-3">Educational Institutions</h3>
                <p class="text-kobicha mb-4 flex-grow">Collaborate on research, service-learning, and community-based projects that enrich student experience while benefiting communities.</p>
                <div class="mt-auto">
                    <livewire:button-secondary :heading="'Learn More'" :href="'#education-section'"></livewire:button-secondary>
                </div>
            </div>
        </div>
    </div>

    <!-- Community Orgs Section -->
    <div id="org-section" class="py-10 scroll-mt-24">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-6">Community Organizations</h2>

        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-2/3">
                <p class="text-kobicha mb-4">We partner with neighborhood associations, advocacy groups, and grassroots organizations to strengthen community voices and participation in local development.</p>

                <h3 class="text-xl font-serif text-kobicha mb-3">How We Work Together</h3>
                <ul class="list-disc pl-5 mb-6 text-kobicha">
                    <li class="mb-2">Co-develop participatory processes tailored to your community's needs</li>
                    <li class="mb-2">Provide training on community engagement techniques</li>
                    <li class="mb-2">Offer facilitation support for community meetings and workshops</li>
                    <li class="mb-2">Share access to our digital participation tools</li>
                </ul>

                <h3 class="text-xl font-serif text-kobicha mb-3">Success Story</h3>
                <div class="bg-ivory-100 p-4 rounded-lg mb-6">
                    <p class="text-kobicha italic">"Working with the HA Foundation transformed how we engage with residents. Their participatory approach helped us gain insights we would have missed using our traditional methods."</p>
                    <p class="text-kobicha font-bold mt-2">— Westside Neighborhood Association</p>
                </div>
            </div>

            <div class="lg:w-1/3 bg-kobicha-50 p-6 rounded-xl self-start">
                <h3 class="text-xl font-serif text-kobicha mb-4">Get Started</h3>
                <p class="text-kobicha mb-4">Interested in exploring a partnership for your community organization?</p>
                <livewire:button :heading="'Contact Us'" :href="'/contact'"></livewire:button>
            </div>
        </div>
    </div>

    <!-- Corporate Section -->
    <div id="corporate-section" class="py-10 scroll-mt-24">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-6">Corporate Partners</h2>

        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-2/3">
                <p class="text-kobicha mb-4">We work with businesses of all sizes to develop meaningful corporate social responsibility initiatives that create lasting positive impact in communities.</p>

                <h3 class="text-xl font-serif text-kobicha mb-3">Partnership Benefits</h3>
                <ul class="list-disc pl-5 mb-6 text-kobicha">
                    <li class="mb-2">Authentic community engagement opportunities for employees</li>
                    <li class="mb-2">Strategic alignment of business goals with community needs</li>
                    <li class="mb-2">Enhanced brand reputation through meaningful social impact</li>
                    <li class="mb-2">Measurement and reporting on social impact outcomes</li>
                </ul>

                <h3 class="text-xl font-serif text-kobicha mb-3">Partner Highlight</h3>
                <div class="bg-ivory-100 p-4 rounded-lg mb-6">
                    <p class="text-kobicha italic">"The HA Foundation helped us move beyond traditional volunteer days to create deeper, more meaningful engagement with our local community. Our employees feel more connected to our CSR initiatives than ever before."</p>
                    <p class="text-kobicha font-bold mt-2">— GreenTech Solutions</p>
                </div>
            </div>

            <div class="lg:w-1/3 bg-kobicha-50 p-6 rounded-xl self-start">
                <h3 class="text-xl font-serif text-kobicha mb-4">Explore Corporate Partnerships</h3>
                <p class="text-kobicha mb-4">Learn how your business can create meaningful social impact through our collaborative approaches.</p>
                <livewire:button :heading="'Schedule a Consultation'" :href="'/contact/corporate'"></livewire:button>
            </div>
        </div>
    </div>

    <!-- Education Section -->
    <div id="education-section" class="py-10 scroll-mt-24">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-6">Educational Institutions</h2>

        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-2/3">
                <p class="text-kobicha mb-4">We partner with schools, colleges, and universities to create experiential learning opportunities that benefit both students and communities.</p>

                <h3 class="text-xl font-serif text-kobicha mb-3">Collaboration Areas</h3>
                <ul class="list-disc pl-5 mb-6 text-kobicha">
                    <li class="mb-2">Service-learning programs that connect classroom learning with community needs</li>
                    <li class="mb-2">Research partnerships to study and improve participatory approaches</li>
                    <li class="mb-2">Student internship and practicum placements</li>
                    <li class="mb-2">Guest lectures and workshops on community engagement</li>
                </ul>

                <h3 class="text-xl font-serif text-kobicha mb-3">Partnership Example</h3>
                <div class="bg-ivory-100 p-4 rounded-lg mb-6">
                    <p class="text-kobicha italic">"Our urban planning students gained invaluable real-world experience through the partnership with HA Foundation. Working directly with community members gave them insights that no textbook could provide."</p>
                    <p class="text-kobicha font-bold mt-2">— Dr. Rivera, Urban Studies Department</p>
                </div>
            </div>

            <div class="lg:w-1/3 bg-kobicha-50 p-6 rounded-xl self-start">
                <h3 class="text-xl font-serif text-kobicha mb-4">Educational Partnerships</h3>
                <p class="text-kobicha mb-4">Interested in creating experiential learning opportunities for your students?</p>
                <livewire:button :heading="'Connect With Us'" :href="'/contact/education'"></livewire:button>
            </div>
        </div>
    </div>

    <!-- Current Partners Section -->
    <div class="py-10">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-8 text-center">Our Partners</h2>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <!-- Partner logos would go here - using placeholders -->
            <div class="h-24 bg-kobicha-50 rounded flex items-center justify-center">Logo 1</div>
            <div class="h-24 bg-kobicha-50 rounded flex items-center justify-center">Logo 2</div>
            <div class="h-24 bg-kobicha-50 rounded flex items-center justify-center">Logo 3</div>
            <div class="h-24 bg-kobicha-50 rounded flex items-center justify-center">Logo 4</div>
            <div class="h-24 bg-kobicha-50 rounded flex items-center justify-center">Logo 5</div>
            <div class="h-24 bg-kobicha-50 rounded flex items-center justify-center">Logo 6</div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-kobicha-100 rounded-xl p-8 flex flex-col items-center text-center">
        <h2 class="text-2xl lg:text-3xl font-serif text-kobicha mb-4">Ready to Partner?</h2>
        <p class="text-lg text-kobicha mb-6 max-w-2xl">Let's explore how we can work together to create meaningful impact in communities.</p>
        <livewire:button :heading="'Start a Conversation'" :href="'/contact'"></livewire:button>
    </div>
</div>
    </main>
    <footer>
        <livewire:footer></livewire:footer>
    </footer>
    </body>
</html>
