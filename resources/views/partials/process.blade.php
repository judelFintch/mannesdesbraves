<section class="section-contrast py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-5 text-left">
                <div class="badge mb-4">Processus</div>
                <h2 class="section-title mb-4">Un flux de travail clair, du brief a la livraison</h2>
                <p class="text-slate-600 leading-relaxed">Trois etapes cadrees avec des points de controle et des delais annonces.</p>
                <div class="mt-5">
                    <a href="{{ route('process', ['locale' => app()->getLocale()]) }}" class="text-sm font-semibold text-primary underline">Voir le processus detaille</a>
                </div>
            </div>
            <div class="lg:col-span-7">
                <ol class="timeline">
                    <li class="timeline-step">
                        <div class="timeline-badge">01</div>
                        <div class="timeline-content">
                            <h3 class="font-semibold text-slate-900 mb-2">Cadrage du dossier</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">Analyse des documents, validation des contraintes et planning partage sous 24h.</p>
                            <div class="timeline-meta">Duree moyenne: 1-2 jours</div>
                        </div>
                    </li>
                    <li class="timeline-step">
                        <div class="timeline-badge">02</div>
                        <div class="timeline-content">
                            <h3 class="font-semibold text-slate-900 mb-2">Execution douaniere</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">Coordination DGDA, licences, regularisations et suivi des points de controle.</p>
                            <div class="timeline-meta">Duree moyenne: 3-7 jours</div>
                        </div>
                    </li>
                    <li class="timeline-step">
                        <div class="timeline-badge">03</div>
                        <div class="timeline-content">
                            <h3 class="font-semibold text-slate-900 mb-2">Livraison & reporting</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">Enlevement, acheminement et reporting final avec validation client.</p>
                            <div class="timeline-meta">Duree moyenne: selon corridor</div>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
