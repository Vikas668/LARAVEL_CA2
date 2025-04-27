<div class="flex flex-col gap-5 lg:flex-row justify-evenly lg:h-[85vh]" xmlns:livewire="http://www.w3.org/1999/html">
    <div class="flex w-full justify-center
     lg:w-1/2 p-5 lg:mt-[-5rem]
     ">
        <img src="{{ Vite::asset('storage/app/public/images/hero.svg') }}" class="w-[75%]" alt="hero">
    </div>
    <div class="flex flex-col p-6 gap-3 items-center
    lg:w-1/2 justify-center
    ">
        <h1 class="text-2xl font-bold text-kobicha font-serif
        pr-4 pl-4
        lg:text-5xl self-start lg:font-light
         ">
            {{config('content.hero_section.heading')}}
        </h1>
        <p class="text-justify text-lg text-kobicha italic font-sans
        pr-4 pl-4
        lg:text-2xl self-start

        " >
            {{ config('content.hero_section.subheading') }}
        </p>
        <p class="text-justify font-sans text-kobicha pr-4 pl-4 lg:break-words lg:w-[50ch] self-start text-xl">
            {{ config('content.hero_section.description') }}
        </p>
        <div class="flex flex-row gap-4 w-full justify-evenly p-4 lg:justify-start">
            <livewire:button :heading="'Register'" :href="'#'"></livewire:button>
            <livewire:button-secondary :heading="'Learn More'" :href="'#'"></livewire:button-secondary>
        </div>

    </div>
</div>
