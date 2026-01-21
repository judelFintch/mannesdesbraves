@extends('layouts.app')

@section('title', 'Processus - La Manne des Braves')
@section('meta_description', 'Processus detaille de dedouanement et de logistique pour vos operations import-export en RDC.')

@section('content')
    <section class="hero-surface text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="max-w-2xl">
                <div class="badge badge-light mb-3">Processus detaille</div>
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">Un parcours clair, etapes par etapes</h1>
                <p class="text-white/90 mb-6">Du cadrage au reporting final, chaque etape est pilotee avec un interlocuteur unique et des delais annonces.</p>
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="btn-base btn-primary">Demander un devis</a>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <div class="lg:col-span-4">
                    <div class="badge mb-4">Etapes</div>
                    <h2 class="section-title mb-4">Ce que vous pouvez attendre</h2>
                    <p class="text-slate-600 leading-relaxed">Des points de controle clairs, des livrables formels et un suivi transparent.</p>
                </div>
                <div class="lg:col-span-8">
                    <ol class="timeline">
                        <li class="timeline-step">
                            <div class="timeline-badge">01</div>
                            <div class="timeline-content">
                                <h3 class="font-semibold text-slate-900 mb-2">Brief & cadrage</h3>
                                <p class="text-sm text-slate-600 leading-relaxed">Collecte des documents, verification de conformite et estimation des delais.</p>
                                <div class="timeline-meta">Livrables: checklist, planning</div>
                            </div>
                        </li>
                        <li class="timeline-step">
                            <div class="timeline-badge">02</div>
                            <div class="timeline-content">
                                <h3 class="font-semibold text-slate-900 mb-2">Execution douaniere</h3>
                                <p class="text-sm text-slate-600 leading-relaxed">Coordination DGDA, licences, regularisations et validations administratives.</p>
                                <div class="timeline-meta">Livrables: dossiers conformes, rapports</div>
                            </div>
                        </li>
                        <li class="timeline-step">
                            <div class="timeline-badge">03</div>
                            <div class="timeline-content">
                                <h3 class="font-semibold text-slate-900 mb-2">Logistique & transit</h3>
                                <p class="text-sm text-slate-600 leading-relaxed">Enlevement, transit securise et coordination corridor.</p>
                                <div class="timeline-meta">Livrables: suivi terrain, preuves de passage</div>
                            </div>
                        </li>
                        <li class="timeline-step">
                            <div class="timeline-badge">04</div>
                            <div class="timeline-content">
                                <h3 class="font-semibold text-slate-900 mb-2">Reporting final</h3>
                                <p class="text-sm text-slate-600 leading-relaxed">Validation client, recapitulatif complet et recommandations.</p>
                                <div class="timeline-meta">Livrables: rapport final, facturation</div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="section-contrast py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <div class="lg:col-span-4">
                    <div class="badge mb-4">Documents</div>
                    <h2 class="section-title mb-4">Checklist de base</h2>
                    <p class="text-slate-600 leading-relaxed">Nous adaptons la checklist selon la marchandise et le corridor.</p>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="card p-6">
                        <div class="text-sm font-semibold text-slate-900 mb-3">Documents commerciaux</div>
                        <ul class="text-sm text-slate-600 leading-relaxed space-y-2">
                            <li>Facture commerciale</li>
                            <li>Packing list</li>
                            <li>Certificat d'origine</li>
                        </ul>
                    </div>
                    <div class="card p-6">
                        <div class="text-sm font-semibold text-slate-900 mb-3">Transport & douane</div>
                        <ul class="text-sm text-slate-600 leading-relaxed space-y-2">
                            <li>BL / AWB</li>
                            <li>Licences et autorisations</li>
                            <li>Informations techniques</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
