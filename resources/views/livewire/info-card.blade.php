<div class="pt-5 pb-5 flex flex-col align-middle items-center justify-evenly rounded-xl bg-kobicha-50 max-w-60 min-h-[400px]" >
    <div class="flex justify-center items-center">
        <img src="{{$src}}" alt="card-image" class="size-25">

    </div>
    <div class="flex text-center flex-col justify-center items-center gap-2">
        <div class="flex flex-col">
            <h1 class="text-xl text-kobicha font-serif text-wrap font-semibold break-words w-[20ch] underline decoration-atomic-tangerine-50 underline-offset-0 decoration-4">{{$headingLine1}}</h1>
        </div>
        <div class="flex flex-col">
            <h1 class="text-xl text-kobicha font-serif text-wrap text-center font-semibold break-words w-[15ch] underline decoration-atomic-tangerine-50 underline-offset-1 decoration-4">{{$headingLine2}}</h1>
        </div>

    </div>
    <div class="flex flex-col pr-6 pl-6">
        <p class="text text-kobicha font-sans">{{$description}}</p>
    </div>
</div>
