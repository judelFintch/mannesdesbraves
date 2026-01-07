<section class="container mx-auto py-8 photo-slider">
    <div class="mx-auto text-center mb-5" style="max-width: 640px;">
        <div class="inline-block border border-primary rounded-full text-primary px-3 mb-3 text-sm">Découvrez Notre Expertise en Images</div>
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Parcourez nos réalisations</h2>
        <p class="text-gray-600">Aperçu de nos opérations douanières et logistique — images réelles de nos prestations.</p>
    </div>

    <div x-data="{ idx: @entangle('current') }" x-init="() => { setInterval(()=> idx = (idx + 1) % {{ count($slides) }}, 6000); }" tabindex="0" x-on:keydown.arrow-right="$wire.next()" x-on:keydown.arrow-left="$wire.prev()" class="relative max-w-4xl mx-auto focus:outline-none">
        <div class="relative overflow-hidden rounded-lg shadow-lg h-80 md:h-96 bg-gray-100">
            @foreach($slides as $i => $slide)
                <div x-show="idx === {{ $i }}" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="absolute inset-0 w-full h-full">
                    <img class="w-full h-full object-cover" src="{{ asset($slide['image']) }}" alt="{{ $slide['alt'] }}" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex flex-col justify-end p-6 text-white">
                        <h3 class="text-xl font-semibold mb-2">{{ $slide['title'] }}</h3>
                        <p class="text-sm">{{ $slide['excerpt'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Controls -->
        <div class="absolute inset-y-0 left-0 flex items-center">
            <button wire:click="prev" aria-label="Précédent" class="bg-white bg-opacity-90 hover:bg-opacity-100 text-gray-800 rounded-full p-3 ml-2 shadow focus:outline-none focus:ring-2 focus:ring-accent">
                <span class="sr-only">Précédent</span>
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"></path></svg>
            </button>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center">
            <button wire:click="next" aria-label="Suivant" class="bg-white bg-opacity-90 hover:bg-opacity-100 text-gray-800 rounded-full p-3 mr-2 shadow focus:outline-none focus:ring-2 focus:ring-accent">
                <span class="sr-only">Suivant</span>
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 6l6 6-6 6"></path></svg>
            </button>
        </div>

        <!-- Indicators -->
        <div class="mt-4 flex items-center justify-center space-x-2">
            @foreach($slides as $i => $slide)
                <button wire:click="goTo({{ $i }})" :class="idx === {{ $i }} ? 'bg-accent w-4 h-4' : 'bg-gray-300 w-3 h-3'" class="rounded-full border-0 focus:outline-none" aria-label="Aller à la diapositive {{ $i + 1 }}"></button>
            @endforeach
        </div>

        <!-- Live region for screen readers -->
        <div class="sr-only" aria-live="polite" x-text="'Diapositive ' + (idx + 1) + ' sur {{ count($slides) }}'"></div>
    </div>
</section>