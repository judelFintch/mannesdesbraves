<section id="services" class="bg-slate-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            <div class="lg:col-span-4">
                <div class="inline-block border border-primary rounded-full text-primary px-3 mb-3 text-sm">Nos services</div>
                <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-slate-900 mb-4">Des solutions complètes pour vos opérations douanières et logistiques</h2>
                <p class="text-slate-600 leading-relaxed mb-6">Nous couvrons l’ensemble de la chaîne import-export, avec des services clairs et orientés résultats. Chaque intervention vise à sécuriser vos flux, réduire les délais et simplifier vos formalités.</p>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a class="rounded-full bg-primary text-white px-6 py-3 text-sm font-semibold shadow-sm" href="#contact">Demander un devis</a>
                    <a class="rounded-full border border-primary text-primary px-6 py-3 text-sm font-semibold" href="{{ route('contact', ['locale' => app()->getLocale()]) }}">Nous contacter</a>
                </div>
            </div>
            <div class="lg:col-span-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-6 hover:shadow-md transition text-left">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 7h10v10H4z"/><path d="M14 9h6v8h-6z"/></svg>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 mb-2">Dédouanement import / export</h5>
                        <p class="text-sm text-slate-600 leading-relaxed">Formalités maîtrisées pour sécuriser vos marchandises et limiter les retards.</p>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="mt-4 inline-flex text-sm font-semibold text-primary">En savoir plus</a>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-6 hover:shadow-md transition text-left">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12h10l2 3h4v4H3z"/><circle cx="7" cy="19" r="2"/><circle cx="17" cy="19" r="2"/></svg>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 mb-2">Transport et logistique</h5>
                        <p class="text-sm text-slate-600 leading-relaxed">Solutions adaptées à vos délais, vos volumes et la nature des cargaisons.</p>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="mt-4 inline-flex text-sm font-semibold text-primary">En savoir plus</a>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-6 hover:shadow-md transition text-left">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M7 3h10v18H7z"/><path d="M9 7h6M9 11h6M9 15h6"/></svg>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 mb-2">Ouverture de licences</h5>
                        <p class="text-sm text-slate-600 leading-relaxed">Accompagnement complet pour obtenir les autorisations en toute conformité.</p>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="mt-4 inline-flex text-sm font-semibold text-primary">En savoir plus</a>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-6 hover:shadow-md transition text-left">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2v8l4 2"/><path d="M4 12a8 8 0 1 0 16 0 8 8 0 0 0-16 0z"/></svg>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 mb-2">Enlèvements d’urgence</h5>
                        <p class="text-sm text-slate-600 leading-relaxed">Réactivité sur les opérations sensibles pour limiter l’immobilisation.</p>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="mt-4 inline-flex text-sm font-semibold text-primary">En savoir plus</a>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-6 hover:shadow-md transition text-left lg:col-span-2">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12h7l2 2h9"/><path d="M7 7h6M7 17h6"/></svg>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 mb-2">Services complémentaires</h5>
                        <p class="text-sm text-slate-600 leading-relaxed">Conseil, suivi documentaire et coordination opérationnelle pour fluidifier votre chaîne logistique.</p>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="mt-4 inline-flex text-sm font-semibold text-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
