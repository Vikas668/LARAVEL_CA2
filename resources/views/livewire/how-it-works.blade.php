<div class="flex flex-col items-center bg-sage-50 m-12 p-12 rounded-2xl gap-20">
    <h1 class="text-center text-kobicha text-2xl font-serif lg:text-4xl">{{config('content.how_it_works.heading')}}</h1>
    <div class="flex flex-col items-center justify-evenly gap-20">
        @foreach(config('content.how_it_works.cards') as $card)
            <livewire:step-card :src="Vite::asset($card['src'])" :heading="$card['heading']" :number="$card['number']" :description="$card['description']" ></livewire:step-card>
        @endforeach
    </div>
</div>
