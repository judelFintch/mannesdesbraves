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
                        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">{{ $s['title'] }}</h1>
                        <h2 class="text-2xl md:text-3xl font-semibold text-white/90 mb-4">{{ $s['subtitle'] }}</h2>
                        <p class="text-white/90 mb-6">{{ $s['lead'] }}</p>
                        <div class="flex flex-col sm:flex-row gap-3 sm:items-center">
                            <a href="{{ __('home.hero_cta_primary_link') }}" class="btn-base btn-primary">{{ __('home.hero_cta_primary') }}</a>
                            <a href="{{ __('home.hero_cta_secondary_link') }}" class="btn-base btn-outline">{{ __('home.hero_cta_secondary') }}</a>
                            <a href="{{ $whatsappLink }}" class="btn-base btn-whatsapp" target="_blank" rel="noopener">WhatsApp</a>
                        </div>
                        <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-3 text-left">
                            <div class="hero-panel">
                                <div class="text-sm font-semibold">Dédouanement rapide</div>
                                <div class="text-xs text-white/80">Procédures sécurisées</div>
                            </div>
                            <div class="hero-panel">
                                <div class="text-sm font-semibold">Suivi continu</div>
                                <div class="text-xs text-white/80">Infos claires, sans délais</div>
                            </div>
                            <div class="hero-panel">
                                <div class="text-sm font-semibold">Couverture RDC</div>
                                <div class="text-xs text-white/80">Corridors clés maîtrisés</div>
                            </div>
                        </div>
                        <div class="mt-6 flex flex-wrap gap-3 text-xs text-white/80">
                            <span class="px-3 py-1 rounded-full border border-white/30 bg-white/10">Dédouanement</span>
                            <span class="px-3 py-1 rounded-full border border-white/30 bg-white/10">Logistique</span>
                            <span class="px-3 py-1 rounded-full border border-white/30 bg-white/10">Transport</span>
                            <span class="px-3 py-1 rounded-full border border-white/30 bg-white/10">Assistance licences</span>
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
