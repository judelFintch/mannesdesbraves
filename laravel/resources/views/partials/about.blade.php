<section id="about" class="container-fluid py-12 md:py-16">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div>
                <div class="relative overflow-hidden rounded-2xl shadow-sm ring-1 ring-slate-200 bg-slate-100">
                    <img class="w-full h-auto" src="{{ asset('img/1.webp') }}" alt="Image illustrant notre expertise" loading="lazy">
                </div>
            </div>
            <div>
                <div class="inline-block border border-primary rounded-full text-primary px-3 mb-3 text-sm">{{ __('home.about_title') }}</div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900">{{ __('home.about_subtitle') }}</h2>
                <p class="mb-6 text-slate-600 leading-relaxed">{{ __('home.about_text') }}</p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                    <div class="rounded-xl bg-slate-50 p-4 text-center">
                        <i class="fa fa-map-marker-alt text-primary mb-2" aria-hidden="true"></i>
                        <div class="text-sm font-semibold text-slate-800">Implantation locale</div>
                        <div class="text-xs text-slate-500">Lubumbashi & corridors RDC</div>
                    </div>
                    <div class="rounded-xl bg-slate-50 p-4 text-center">
                        <i class="fa fa-globe-africa text-primary mb-2" aria-hidden="true"></i>
                        <div class="text-sm font-semibold text-slate-800">Vision internationale</div>
                        <div class="text-xs text-slate-500">Import / Export sécurisé</div>
                    </div>
                    <div class="rounded-xl bg-slate-50 p-4 text-center">
                        <i class="fa fa-user-shield text-primary mb-2" aria-hidden="true"></i>
                        <div class="text-sm font-semibold text-slate-800">Expertise agréée</div>
                        <div class="text-xs text-slate-500">Conformité et rigueur</div>
                    </div>
                </div>
                <div class="flex items-center">
                    <a class="btn-primary" href="{{ route('contact', ['locale' => app()->getLocale()]) }}">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>
