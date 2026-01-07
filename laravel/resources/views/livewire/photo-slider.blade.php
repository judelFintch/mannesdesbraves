<section class="bg-slate-50 py-12 md:py-16 photo-slider">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div class="order-2 lg:order-1">
                <div x-data="{ idx: @entangle('current') }" x-init="() => { setInterval(()=> idx = (idx + 1) % {{ count($slides) }}, 6000); }" tabindex="0" x-on:keydown.arrow-right="$wire.next()" x-on:keydown.arrow-left="$wire.prev()" class="relative focus:outline-none">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg bg-slate-100 aspect-video ring-1 ring-slate-200">
                        @foreach($slides as $i => $slide)
                            <div x-show="idx === {{ $i }}" x-cloak x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="absolute inset-0 w-full h-full">
                                <img class="w-full h-full object-cover" src="{{ asset($slide['image']) }}" alt="{{ $slide['alt'] }}" loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-slate-900/10 to-transparent flex flex-col justify-end p-6 text-white">
                                    <h3 class="text-lg md:text-xl font-semibold mb-2">{{ $slide['title'] }}</h3>
                                    <p class="text-sm text-white/90">{{ $slide['excerpt'] }}</p>
                                </div>
                            </div>
                        @endforeach

                        <div class="absolute inset-y-0 left-0 flex items-center">
                            <button wire:click="prev" aria-label="Précédent" class="bg-white/90 hover:bg-white text-slate-800 rounded-full p-2 md:p-3 ml-3 shadow focus:outline-none focus:ring-2 focus:ring-accent">
                                <span class="sr-only">Précédent</span>
                                <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"></path></svg>
                            </button>
                        </div>
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <button wire:click="next" aria-label="Suivant" class="bg-white/90 hover:bg-white text-slate-800 rounded-full p-2 md:p-3 mr-3 shadow focus:outline-none focus:ring-2 focus:ring-accent">
                                <span class="sr-only">Suivant</span>
                                <svg class="w-5 h-5 md:w-6 md:h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 6l6 6-6 6"></path></svg>
                            </button>
                        </div>
                    </div>

                    <div class="mt-4 flex items-center justify-center space-x-2">
                        @foreach($slides as $i => $slide)
                            <button wire:click="goTo({{ $i }})" :class="idx === {{ $i }} ? 'bg-accent w-4 h-4' : 'bg-slate-300 w-3 h-3'" class="rounded-full border-0 focus:outline-none" aria-label="Aller à la diapositive {{ $i + 1 }}"></button>
                        @endforeach
                    </div>

                    <div class="sr-only" aria-live="polite" x-text="'Diapositive ' + (idx + 1) + ' sur {{ count($slides) }}'"></div>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-6 md:p-8">
                    <div class="inline-flex items-center gap-2 border border-primary rounded-full text-primary px-3 py-1 text-xs font-semibold uppercase tracking-wide">Présentation</div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-4 mb-4">Parcourez nos réalisations</h2>
                    <p class="text-slate-600 mb-6">Aperçu de nos opérations douanières et logistiques. Des images concrètes qui illustrent notre rigueur sur le terrain.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                        <div class="rounded-xl bg-slate-50 p-4 text-center">
                            <div class="text-primary font-semibold">Flux fiables</div>
                            <div class="text-xs text-slate-500">Suivi et coordination</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-4 text-center">
                            <div class="text-primary font-semibold">Conformité</div>
                            <div class="text-xs text-slate-500">Procédures claires</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-4 text-center">
                            <div class="text-primary font-semibold">Réactivité</div>
                            <div class="text-xs text-slate-500">Délais maîtrisés</div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="btn-primary text-center">Demander un devis</a>
                        <a href="#contact" class="btn-outline text-center">Nous contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
