<section id="services" class="section-surface py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            <div class="lg:col-span-4">
                <div class="badge mb-4">Nos activites</div>
                <h2 class="section-title mb-4">Une expertise complete, adaptee a vos besoins</h2>
                <p class="text-slate-600 leading-relaxed mb-6">Notre agence en douane vous accorde les facilites selon le besoin et les circonstances et vous fournit toutes les informations concernant les formalites en douane en vous proposant les services suivants.</p>
                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm mb-6">
                    <img src="{{ asset('img/1.webp') }}" alt="Une expertise complete, adaptee a vos besoins" class="w-full h-44 object-cover" loading="lazy" decoding="async" width="480" height="260">
                </div>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a class="btn-base btn-primary" href="#contact">Demander un devis</a>
                    <a class="btn-base btn-outline" href="{{ route('contact', ['locale' => app()->getLocale()]) }}">Nous contacter</a>
                </div>
            </div>
            <div class="lg:col-span-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="card p-6 text-left md:col-span-2">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 7h10v10H4z"/><path d="M14 9h6v8h-6z"/></svg>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 mb-2">Dans le domaine de la DGDA</h5>
                        <ul class="text-sm text-slate-600 leading-relaxed space-y-2">
                            <li>Dédouanement IMPORT et EXPORT rapide dans le respect du delai.</li>
                            <li>Enlevement d'urgence en cas de besoin et regularisations.</li>
                            <li>Ouverture des licences pour compte de ses clients et suivi.</li>
                            <li>Prise en charge des envois aeriens de ses clients.</li>
                        </ul>
                    </div>
                    <div class="card p-6 text-left">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12h7l2 2h9"/><path d="M7 7h6M7 17h6"/></svg>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 mb-2">Construction et genie civil</h5>
                        <p class="text-sm text-slate-600 leading-relaxed">Principalement les travaux publics et le batiment (constructions industrielles, usines, entrepots).</p>
                    </div>
                    <div class="card p-6 text-left">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z"/></svg>
                        </div>
                        <h5 class="text-lg font-semibold text-slate-900 mb-2">Sous traitance</h5>
                        <ul class="text-sm text-slate-600 leading-relaxed space-y-2">
                            <li>Identification des postes a pourvoir et profil des futurs occupants.</li>
                            <li>Recrutement du personnel et formation.</li>
                            <li>Logistique (fournitures des biens et divers services).</li>
                            <li>Suivi administratif et gestion des fins de contrat.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
