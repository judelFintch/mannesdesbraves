<section id="about" class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
                <div class="relative overflow-hidden rounded-2xl shadow-sm ring-1 ring-slate-200 bg-slate-100">
                    <img class="w-full h-auto" src="{{ asset('img/1.webp') }}" alt="Image illustrant notre expertise" loading="lazy">
                </div>
            </div>
            <div class="lg:col-span-6">
                <div class="inline-block border border-primary rounded-full text-primary px-3 mb-3 text-sm">{{ __('home.about_title') }}</div>
                <h2 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4 text-slate-900">{{ __('home.about_subtitle') }}</h2>
                <p class="mb-6 text-slate-600 leading-relaxed text-left">{{ __('home.about_text') }}</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                    <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-6">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-3">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s7-7.5 7-12a7 7 0 0 0-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>
                        </div>
                        <div class="text-sm font-semibold text-slate-900">Implantation locale</div>
                        <div class="text-xs text-slate-500">Lubumbashi & corridors RDC</div>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-6">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-3">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2z"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20"/></svg>
                        </div>
                        <div class="text-sm font-semibold text-slate-900">Vision internationale</div>
                        <div class="text-xs text-slate-500">Import / Export sécurisé</div>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-6">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-3">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z"/></svg>
                        </div>
                        <div class="text-sm font-semibold text-slate-900">Expertise agréée</div>
                        <div class="text-xs text-slate-500">Conformité et rigueur</div>
                    </div>
                </div>
                <div class="flex items-center">
                    <a class="rounded-full bg-primary text-white px-6 py-3 text-sm font-semibold shadow-sm" href="{{ route('contact', ['locale' => app()->getLocale()]) }}">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>
