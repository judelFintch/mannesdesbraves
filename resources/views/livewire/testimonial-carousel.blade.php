<div class="card p-8">
    <div class="relative">
        <div x-data="{ idx: @entangle('current') }" x-init="setInterval(()=> idx = (idx + 1) % {{ count($items) }}, 7000)" tabindex="0" x-on:keydown.arrow-right="$wire.next()" x-on:keydown.arrow-left="$wire.prev()" class="focus:outline-none">
            @foreach($items as $i => $item)
                <div x-show="idx === {{ $i }}" x-cloak x-transition class="space-y-5 text-center">
                    <div class="flex items-center justify-center gap-1 text-amber-400">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.3l-6.2 3.7 1.6-7L2 9.2l7.1-.6L12 2l2.9 6.6 7.1.6-5.4 4.8 1.6 7z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.3l-6.2 3.7 1.6-7L2 9.2l7.1-.6L12 2l2.9 6.6 7.1.6-5.4 4.8 1.6 7z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.3l-6.2 3.7 1.6-7L2 9.2l7.1-.6L12 2l2.9 6.6 7.1.6-5.4 4.8 1.6 7z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.3l-6.2 3.7 1.6-7L2 9.2l7.1-.6L12 2l2.9 6.6 7.1.6-5.4 4.8 1.6 7z"/></svg>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 17.3l-6.2 3.7 1.6-7L2 9.2l7.1-.6L12 2l2.9 6.6 7.1.6-5.4 4.8 1.6 7z"/></svg>
                    </div>
                    <p class="text-lg text-slate-600">{{ $item['text'] }}</p>
                    <div class="flex items-center justify-center mt-4">
                        <img class="w-12 h-12 rounded-full object-cover" src="{{ asset($item['avatar']) }}" alt="Avatar {{ $item['author'] }}" loading="lazy">
                        <div class="pl-3 text-left">
                            <h5 class="font-semibold text-slate-900">{{ $item['author'] }}</h5>
                            <span class="text-sm text-slate-500">{{ $item['role'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="absolute inset-y-0 left-0 flex items-center">
                <button wire:click="prev" class="bg-white p-2 rounded-full shadow focus:ring-2 focus:ring-accent" aria-label="Precedent"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"></path></svg></button>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button wire:click="next" class="bg-white p-2 rounded-full shadow focus:ring-2 focus:ring-accent" aria-label="Suivant"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 6l6 6-6 6"></path></svg></button>
            </div>
        </div>

        <div class="mt-5 flex items-center justify-center space-x-2">
            @foreach($items as $i => $item)
                <button wire:click="goTo({{ $i }})" :class="idx === {{ $i }} ? 'bg-accent w-4 h-4' : 'bg-slate-300 w-3 h-3'" class="rounded-full border-0 focus:outline-none" aria-label="Aller au temoignage {{ $i + 1 }}"></button>
            @endforeach
        </div>

        <div class="sr-only" aria-live="polite" x-text="'Temoignage ' + (idx + 1) + ' sur {{ count($items) }}'"></div>
    </div>
</div>
