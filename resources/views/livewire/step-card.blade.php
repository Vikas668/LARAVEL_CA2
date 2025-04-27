@php
    $isOdd = $number % 2 !== 0;
@endphp
<div>
    <div class="max-lg:hidden flex flex-row items-center gap-40 max-fit ">
        {{-- The Master doesn't talk, he acts. --}}
        @if($isOdd)
            <div class="flex flex-col w-fit gap-3">
                <div class="flex flex-row gap-3">
                    <h3 class="font-serif text-kobicha text-2xl bg-kobicha-50 rounded-xl p-2">{{$number}}</h3>
                    <h3 class="font-serif text-kobicha text-3xl ">{{$heading}}</h3>
                </div>
                <p class="text-kobicha self-center font-sans text-wrap break-words w-[25ch] left-20">{{$description}}</p>
            </div>
            <div class="">
                <img src="{{$src}}" alt="{{$heading}}" class="h-32 w-auto">
            </div>
        @else
            <div class="flex flex-col w-fit gap-3">
                <img src="{{$src}}" alt="{{$heading}}" class="h-32 w-auto">
            </div>
            <div class="flex flex-col gap-3">
                <div class="flex flex-row gap-3">
                    <h3 class="font-serif text-kobicha text-2xl bg-kobicha-50 rounded-xl p-2">{{$number}}</h3>
                    <h3 class="font-serif text-kobicha text-3xl ">{{$heading}}</h3>
                </div>
                <p class="text-kobicha self-center font-serif text-wrap break-words w-[25ch] left-20">{{$description}}</p>
            </div>
        @endif
    </div>


    <div class="flex flex-col gap-4 lg:hidden">
        <div class="flex">
            <img src="{{$src}}" alt="{{$heading}}" class="h-32 w-auto">
        </div>
        <div class="flex flex-col gap-2">
            <div class="flex flex-row gap-3">
                <h3 class="font-serif text-sage text-lg ">{{$number}}</h3>
                <h3 class="font-serif text-kobicha text-xl ">{{$heading}}</h3>
            </div>
            <p class="text-kobicha font-serif text-wrap break-words w-[25ch] left-20">{{$description}}</p>
        </div>
    </div>
</div>
