<section id="about" class="py-20 section-contrast">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-6">
                <div class="relative overflow-hidden rounded-2xl shadow-sm ring-1 ring-slate-200 bg-slate-100">
                    <img class="w-full h-auto" src="{{ asset('img/1.webp') }}" alt="Image illustrant notre expertise" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="lg:col-span-6">
                <div class="badge mb-4">Presentation</div>
                <h2 class="section-title mb-4">La Manne des Braves SARL</h2>
                <p class="mb-2 text-slate-600 leading-relaxed text-left">Fondee en 2011, La Manne des Braves SARL accompagne importateurs, exportateurs et entreprises avec rigueur et transparence.</p>
                <p class="mb-6 text-slate-600 leading-relaxed text-left">Transitaire agree DGDA 000188 (arrete ministeriel ndeg 011/CAB/MIN/FIN/98), autorise sur tout le territoire national.</p>
                <details class="text-left text-slate-600 leading-relaxed">
                    <summary class="cursor-pointer text-sm font-semibold text-primary">Lire l'historique complet</summary>
                    <div class="mt-4 space-y-4 text-sm text-slate-600">
                        <p>Le parcours professionnel, l'experience ainsi que son entourage commercial ont conduit Monsieur Ghislain BAWOLO BOKANA a exercer comme un rapproche de la Douane tout en etant Directeur Administratif et des Ressources humaines chevronne. Les aleas du parcours l'ont pousse a creer en 2011 cette equipe d'experts conseil en Douane et en ressources humaines pour parer aux lacunes vecues et apporter des innovations dans ce secteur dans le but de satisfaire les importateurs, les exportateurs ainsi que les entreprises a asseoir une gestion des ressources humaines efficiente, moderne, non conflictuelle denommee "La Manne des Braves SARL".</p>
                        <p>Son objet devient ainsi de proceder a toutes les operations de douane et accises autorisees par la legislation congolaise en vigueur (Agence en Douane) import, export, transport, commerce general, entreposage, et generalement toutes les operations de quelque nature qu'elles soient juridiques, economiques et financieres, civiles et commerciales se rattachant a l'objet sus-indique ou a tout autre objet similaire ou connexe de nature a favoriser directement ou indirectement le but poursuivi par la societe, son extension ou son developpement, la sous traitance de la main d'oeuvre locale et expatriee ainsi que tous travaux generaux de construction, de genie civil, publics ou prives, sans exception ni distinction.</p>
                    </div>
                </details>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                    <div class="card card-muted p-6">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-3">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s7-7.5 7-12a7 7 0 0 0-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>
                        </div>
                        <div class="text-sm font-semibold text-slate-900">Implantation locale</div>
                        <div class="text-xs text-slate-500">Lubumbashi & corridors RDC</div>
                    </div>
                    <div class="card card-muted p-6">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-3">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2z"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20"/></svg>
                        </div>
                        <div class="text-sm font-semibold text-slate-900">Vision internationale</div>
                        <div class="text-xs text-slate-500">Import / Export sécurisé</div>
                    </div>
                    <div class="card card-muted p-6">
                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-3">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z"/></svg>
                        </div>
                        <div class="text-sm font-semibold text-slate-900">Expertise agréée</div>
                        <div class="text-xs text-slate-500">Conformité et rigueur</div>
                    </div>
                </div>
                <div class="flex items-center">
                    <a class="btn-base btn-primary" href="{{ route('contact', ['locale' => app()->getLocale()]) }}">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>
