@php
$wa = env('WHATSAPP_NUMBER', '243XXXXXXXXX');
$waText = env('WHATSAPP_TEXT', "Bonjour, j'aimerais avoir des informations sur vos services.");
$whatsappLink = 'https://wa.me/' . $wa . '?text=' . urlencode($waText);
@endphp

<section class="hero-surface text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div x-data="{ idx: @entangle('current') }" x-init="setInterval(()=> idx = (idx + 1) % {{ count($slides) }}, 7000)" class="relative">
            @foreach($slides as $i => $s)
                <div x-show="idx === {{ $i }}" x-cloak x-transition class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="text-center lg:text-left lg:col-span-7">
                        <div class="badge badge-light mb-2">Transitaire officiel</div>
                        <div class="text-xs text-white/80 mb-4">Agrement DGDA 000188 | RDC</div>
                        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-3">{{ $s['title'] }}</h1>
                        <p class="text-lg md:text-xl font-semibold text-white/90 mb-3">{{ $s['subtitle'] }}</p>
                        <p class="text-white/90 mb-6 max-w-xl mx-auto lg:mx-0">{{ $s['lead'] }}</p>
                        <div class="flex flex-col sm:flex-row gap-3 sm:items-center">
                            <a href="{{ __('home.hero_cta_primary_link') }}" class="btn-base btn-primary">{{ __('home.hero_cta_primary') }}</a>
                        </div>
                        <div class="mt-3 text-sm text-white/80">
                            <a href="{{ __('home.hero_cta_secondary_link') }}" class="underline hover:text-white">{{ __('home.hero_cta_secondary') }}</a>
                        </div>
                        <div class="mt-6 flex flex-wrap gap-3 text-xs text-white/80">
                            <span class="px-3 py-1 rounded-full border border-white/30 bg-white/10">Dedouanement express</span>
                            <span class="px-3 py-1 rounded-full border border-white/30 bg-white/10">Suivi dossier 24/7</span>
                            <span class="px-3 py-1 rounded-full border border-white/30 bg-white/10">Corridors RDC</span>
                        </div>
                        <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-3 text-left">
                            <div class="hero-panel">
                                <div class="stat-number stat-number-light" data-count="12">12+</div>
                                <div class="text-xs text-white/80">annees d'experience</div>
                            </div>
                            <div class="hero-panel">
                                <div class="stat-number stat-number-light" data-count="850">850+</div>
                                <div class="text-xs text-white/80">dossiers par an</div>
                            </div>
                            <div class="hero-panel">
                                <div class="stat-number stat-number-light" data-count="9">9</div>
                                <div class="text-xs text-white/80">corridors couverts</div>
                            </div>
                        </div>
                        <div class="mt-5 text-xs text-white/70">
                            <a href="{{ $whatsappLink }}" class="underline hover:text-white" target="_blank" rel="noopener">Ecrire sur WhatsApp</a>
                        </div>
                    </div>
                    <div class="text-center lg:text-right lg:col-span-5">
                        <img class="mx-auto lg:ml-auto lg:mr-0 w-full max-w-md lg:max-w-none rounded-2xl shadow-xl" src="{{ asset($s['image']) }}" alt="{{ $s['title'] }}" loading="{{ $i === 0 ? 'eager' : 'lazy' }}" fetchpriority="{{ $i === 0 ? 'high' : 'auto' }}" decoding="async" width="640" height="520">
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
