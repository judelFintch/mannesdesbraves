<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            <div class="lg:col-span-5 text-left">
                <div class="badge mb-4">FAQ</div>
                <h2 class="section-title mb-4">Questions frequentes</h2>
                <p class="text-slate-600 leading-relaxed">Reponses directes aux objections principales avant de demarrer un dossier.</p>
            </div>
            <div class="lg:col-span-7 space-y-4">
                <details class="card p-6">
                    <summary class="cursor-pointer font-semibold text-slate-900">Quels documents sont indispensables pour commencer ?</summary>
                    <p class="mt-3 text-sm text-slate-600 leading-relaxed">Facture commerciale, packing list, BL/AWB et documents d'origine. Nous verifions la conformite avant depot.</p>
                </details>
                <details class="card p-6">
                    <summary class="cursor-pointer font-semibold text-slate-900">Quel est le delai moyen pour un dedouanement ?</summary>
                    <p class="mt-3 text-sm text-slate-600 leading-relaxed">Cela depend du type de marchandise et du point d'entree. Nous donnons un delai cible apres cadrage du dossier.</p>
                </details>
                <details class="card p-6">
                    <summary class="cursor-pointer font-semibold text-slate-900">Couvrez-vous toutes les zones en RDC ?</summary>
                    <p class="mt-3 text-sm text-slate-600 leading-relaxed">Oui, nous intervenons sur les corridors principaux et adaptons la logistique selon la zone.</p>
                </details>
                <div class="pt-4">
                    <a href="#contact" class="btn-base btn-primary">Obtenir un diagnostic</a>
                    <a href="{{ route('faq', ['locale' => app()->getLocale()]) }}" class="ml-4 text-sm font-semibold text-primary underline">Voir toutes les FAQ</a>
                </div>
            </div>
        </div>
    </div>
</section>
