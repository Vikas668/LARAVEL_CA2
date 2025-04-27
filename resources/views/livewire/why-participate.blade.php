<div class="flex flex-col justify-center items-center p-10 gap-20 lg:gap-40">
    <h1 class=" text-center text-2xl text-kobicha font-serif lg:text-5xl"> {{config('content.why_participate.heading')}}</h1>
    <div class="flex flex-row justify-evenly gap-4 ">
        <div class="flex flex-row justify-evenly gap-12 flex-wrap">
            @foreach(config('content.why_participate.cards') as $card)
                <livewire:info-card :src="Vite::asset($card['src'])" :headingLine1="$card['heading-line1']" :headingLine2="$card['heading-line2']" :description="$card['description']"></livewire:info-card>
            @endforeach
        </div>
    </div>
</div>
