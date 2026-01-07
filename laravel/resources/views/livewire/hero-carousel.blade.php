<section class="bg-gradient-to-r from-primary/90 to-primary/80 text-white">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div x-data="{ idx: @entangle('current') }" x-init="setInterval(()=> idx = (idx + 1) % {{ count($slides) }}, 7000)" class="relative">
            @foreach($slides as $i => $s)
                <div x-show="idx === {{ $i }}" x-cloak x-transition class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <div class="text-center lg:text-left">
                        <div class="inline-block bg-white/10 rounded-full text-white px-3 py-1 mb-3 text-sm">MDB</div>
                        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">{{ $s['title'] }}</h1>
                        <p class="text-white/90 mb-6">{{ $s['lead'] }}</p>
                        <div class="flex flex-col sm:flex-row gap-3 sm:items-center">
                            <a href="{{ $s['cta_link'] }}" class="btn-primary">{{ $s['cta'] }}</a>
                        </div>
                    </div>
                    <div class="text-center lg:text-right">
                        <img class="mx-auto w-full max-w-md rounded-lg shadow-xl" src="{{ asset($s['image']) }}" alt="{{ $s['title'] }}" loading="lazy">
                    </div>
                </div>
            @endforeach

            <div class="absolute inset-y-0 left-0 flex items-center">
                <button wire:click="prev" class="bg-white p-2 rounded-full shadow focus:ring-2 focus:ring-accent" aria-label="Précédent"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"></path></svg></button>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button wire:click="next" class="bg-white p-2 rounded-full shadow focus:ring-2 focus:ring-accent" aria-label="Suivant"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 6l6 6-6 6"></path></svg></button>
            </div>

            <div class="mt-6 flex items-center justify-center space-x-2">
                @foreach($slides as $i => $s)
                    <button wire:click="goTo({{ $i }})" :class="idx === {{ $i }} ? 'bg-accent w-4 h-4' : 'bg-white/60 w-3 h-3'" class="rounded-full border-0 focus:outline-none" aria-label="Aller à la diapositive {{ $i + 1 }}"></button>
                @endforeach
            </div>

            <div class="sr-only" aria-live="polite" x-text="'Diapositive ' + (idx + 1) + ' sur {{ count($slides) }}'"></div>
        </div>
    </div>
</section>