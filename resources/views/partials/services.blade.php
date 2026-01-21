<section id="services" class="section-surface py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            <div class="lg:col-span-5">
                <div class="badge mb-4">Offres</div>
                <h2 class="section-title mb-4">Trois offres claires, des livrables concrets</h2>
                <p class="text-slate-600 leading-relaxed mb-6">Nous adaptons chaque dossier a vos contraintes de delai, de conformite et de budget. Vous obtenez un suivi clair, des documents justifies et un interlocuteur unique.</p>
                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm mb-6">
                    <img src="{{ asset('img/web1.webp') }}" alt="Expertise douaniere et logistique" class="w-full h-44 object-cover" loading="lazy" decoding="async" width="480" height="260">
                </div>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a class="btn-base btn-primary" href="#contact">Demander un devis</a>
                    <a class="text-sm font-semibold text-primary underline" href="{{ route('contact', ['locale' => app()->getLocale()]) }}">Poser une question</a>
                </div>
            </div>
            <div class="lg:col-span-7">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="card p-6 text-left group">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 7h10v10H4z"/><path d="M14 9h6v8h-6z"/></svg>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 mb-2">Dedouanement & DGDA</h5>
                        <p class="text-sm text-slate-600 leading-relaxed">Traitement rapide des dossiers import-export avec coordination DGDA et regularisations.</p>
                        <div class="mt-4 text-xs text-slate-500 uppercase tracking-wide">Livrables</div>
                        <ul class="mt-2 text-sm text-slate-600 leading-relaxed space-y-1">
                            <li>Planning de traitement et estimation des delais</li>
                            <li>Suivi documentaire et bordereaux</li>
                            <li>Reporting final conforme</li>
                        </ul>
                    </div>
                    <div class="card p-6 text-left group">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12h7l2 2h9"/><path d="M7 7h6M7 17h6"/></svg>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 mb-2">Logistique & transport</h5>
                        <p class="text-sm text-slate-600 leading-relaxed">Coordination des enlevements, entreposage et acheminement securise sur les corridors cles.</p>
                        <div class="mt-4 text-xs text-slate-500 uppercase tracking-wide">Livrables</div>
                        <ul class="mt-2 text-sm text-slate-600 leading-relaxed space-y-1">
                            <li>Plan de transit et points de controle</li>
                            <li>Suivi terrain et photos etapes</li>
                            <li>Reception et validation</li>
                        </ul>
                    </div>
                    <div class="card p-6 text-left group md:col-span-2">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z"/></svg>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 mb-2">Assistance RH & sous-traitance</h5>
                        <p class="text-sm text-slate-600 leading-relaxed">Selection, contractualisation et gestion administrative pour des equipes locales efficaces.</p>
                        <div class="mt-4 text-xs text-slate-500 uppercase tracking-wide">Livrables</div>
                        <ul class="mt-2 text-sm text-slate-600 leading-relaxed space-y-1">
                            <li>Profils cibles et shortlists</li>
                            <li>Dossiers RH et suivi contractuel</li>
                            <li>Reporting mensuel de performance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
