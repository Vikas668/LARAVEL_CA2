<div xmlns:livewire="http://www.w3.org/1999/html" class="flex flex-col items-center p-6 gap-6 lg:gap-20">
    {{-- Be like water. --}}
    <h1 class="text-center text-2xl font-serif text-kobicha lg:text-4xl">{{config('content.call_to_action.heading')}}</h1>
    <p class="font-sans text-kobicha text-lg text-justify pl-4 pr-4 lg:text-2xl lg:break-words lg:w-[70ch]">{{config('content.call_to_action.description')}}</p>
    <h6 class="font-sans text-kobicha text-xl text-justify italic pl-4 pr-4 lg:text-3xl">{{config('content.call_to_action.call')}}</h6>
    <livewire:button :heading="'Register'" :href="'#'"></livewire:button>
</div>
