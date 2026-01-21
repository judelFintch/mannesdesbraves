@extends('layouts.app')

@section('title', 'FAQ - La Manne des Braves')
@section('meta_description', 'Questions frequentes sur nos services de dedouanement, logistique et transport en RDC.')

@section('content')
    <section class="section-contrast py-20">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-left mb-8">
                <div class="badge mb-4">FAQ</div>
                <h1 class="section-title mb-4">Reponses claires avant de demarrer</h1>
                <p class="text-slate-600 leading-relaxed">Nous recensons les questions les plus courantes de nos clients import-export.</p>
            </div>
            <div class="space-y-4">
                <details class="card p-6">
                    <summary class="cursor-pointer font-semibold text-slate-900">Quels documents sont indispensables pour commencer ?</summary>
                    <p class="mt-3 text-sm text-slate-600 leading-relaxed">Facture commerciale, packing list, BL/AWB et documents d'origine. Nous verifions la conformite avant depot.</p>
                </details>
                <details class="card p-6">
                    <summary class="cursor-pointer font-semibold text-slate-900">Quel est le delai moyen pour un dedouanement ?</summary>
                    <p class="mt-3 text-sm text-slate-600 leading-relaxed">Le delai depend du type de marchandise et du point d'entree. Un planning est donne apres cadrage du dossier.</p>
                </details>
                <details class="card p-6">
                    <summary class="cursor-pointer font-semibold text-slate-900">Couvrez-vous toutes les zones en RDC ?</summary>
                    <p class="mt-3 text-sm text-slate-600 leading-relaxed">Oui, nous intervenons sur les corridors principaux et adaptons la logistique selon la zone.</p>
                </details>
                <details class="card p-6">
                    <summary class="cursor-pointer font-semibold text-slate-900">Pouvez-vous gerer les regularisations urgentes ?</summary>
                    <p class="mt-3 text-sm text-slate-600 leading-relaxed">Oui, notre equipe peut traiter les urgences et mettre en place un suivi accelere selon le dossier.</p>
                </details>
                <details class="card p-6">
                    <summary class="cursor-pointer font-semibold text-slate-900">Fournissez-vous un reporting pendant l'operation ?</summary>
                    <p class="mt-3 text-sm text-slate-600 leading-relaxed">Oui, nous partageons un reporting avec les jalons cles et un recapitulatif final.</p>
                </details>
                <details class="card p-6">
                    <summary class="cursor-pointer font-semibold text-slate-900">Comment obtenir un devis ?</summary>
                    <p class="mt-3 text-sm text-slate-600 leading-relaxed">Contactez-nous avec les informations de base, nous respondons sous 24h ouvrables.</p>
                </details>
            </div>
            <div class="mt-8">
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="btn-base btn-primary">Demander un devis</a>
            </div>
        </div>
    </section>
@endsection
