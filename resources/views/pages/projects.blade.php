@extends('layouts.app')

@section('title', 'Nos Projets')
@section('meta_description', 'Découvrez quelques projets réalisés par La Manne des Braves en logistique et dédouanement.')

@section('content')
    <section class="section-contrast py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <div class="lg:col-span-4 text-left">
                    <div class="badge mb-4">Projets</div>
                    <h1 class="section-title mb-4">Opérations concrètes et livraisons réussies</h1>
                    <p class="text-slate-600 leading-relaxed">Des missions de dédouanement, de transport et de coordination documentaire menées avec rigueur sur les corridors clés.</p>
                </div>
                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="card overflow-hidden">
                            <img src="{{ asset('img/web1.webp') }}" alt="Transit sécurisé pour matériel industriel" class="w-full h-48 object-cover" loading="lazy" decoding="async" width="480" height="320">
                            <div class="p-5">
                                <h3 class="font-semibold text-slate-900 mb-1">Transit industriel sécurisé</h3>
                                <p class="text-sm text-slate-600">Coordination douanière + transport pour réduire les délais critiques.</p>
                            </div>
                        </div>
                        <div class="card overflow-hidden">
                            <img src="{{ asset('img/web1.webp') }}" alt="Dédouanement multi-sites en RDC" class="w-full h-48 object-cover" loading="lazy" decoding="async" width="480" height="320">
                            <div class="p-5">
                                <h3 class="font-semibold text-slate-900 mb-1">Dédouanement multi-sites</h3>
                                <p class="text-sm text-slate-600">Gestion documentaire et conformité sur plusieurs points d’entrée.</p>
                            </div>
                        </div>
                        <div class="card overflow-hidden">
                            <img src="{{ asset('img/web1.webp') }}" alt="Logistique de dernière ligne" class="w-full h-48 object-cover" loading="lazy" decoding="async" width="480" height="320">
                            <div class="p-5">
                                <h3 class="font-semibold text-slate-900 mb-1">Logistique de dernière ligne</h3>
                                <p class="text-sm text-slate-600">Suivi terrain et coordination transport pour livraisons sensibles.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-6">
                    <div class="card p-8">
                        <div class="badge mb-4">Méthode</div>
                        <h2 class="section-title mb-4">Un processus clair, sans surprise</h2>
                        <p class="text-slate-600 leading-relaxed mb-6">Chaque mission suit un déroulé précis : diagnostic, conformité, exécution et reporting.</p>
                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-full bg-slate-100 text-primary flex items-center justify-center font-semibold">1</div>
                                <div>
                                    <div class="text-sm font-semibold text-slate-900">Analyse & plan d’action</div>
                                    <div class="text-xs text-slate-500">Clarification des contraintes et délais.</div>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-full bg-slate-100 text-primary flex items-center justify-center font-semibold">2</div>
                                <div>
                                    <div class="text-sm font-semibold text-slate-900">Exécution opérationnelle</div>
                                    <div class="text-xs text-slate-500">Coordination douane, transport et logistique.</div>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-full bg-slate-100 text-primary flex items-center justify-center font-semibold">3</div>
                                <div>
                                    <div class="text-sm font-semibold text-slate-900">Suivi & reporting</div>
                                    <div class="text-xs text-slate-500">Visibilité complète jusqu’à livraison.</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="btn-base btn-primary">Démarrer un projet</a>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="card card-muted p-6">
                            <div class="text-sm font-semibold text-slate-900 mb-1">Risques maîtrisés</div>
                            <p class="text-xs text-slate-500">Conformité stricte et anticipation des blocages.</p>
                        </div>
                        <div class="card card-muted p-6">
                            <div class="text-sm font-semibold text-slate-900 mb-1">Délais réduits</div>
                            <p class="text-xs text-slate-500">Coordination proactive pour éviter l’immobilisation.</p>
                        </div>
                        <div class="card card-muted p-6">
                            <div class="text-sm font-semibold text-slate-900 mb-1">Communication claire</div>
                            <p class="text-xs text-slate-500">Un interlocuteur unique, des points réguliers.</p>
                        </div>
                        <div class="card card-muted p-6">
                            <div class="text-sm font-semibold text-slate-900 mb-1">Couverture RDC</div>
                            <p class="text-xs text-slate-500">Présence sur les corridors stratégiques.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
