@extends('layouts.app')

@section('title', 'Contactez-nous')
@section('meta_description', 'Contactez La Manne des Braves pour un accompagnement en douane, logistique et transport en RDC.')

@section('content')
    <section class="section-contrast py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <div class="lg:col-span-7">
                    <div class="badge mb-4">Nous contacter</div>
                    <livewire:contact-form />
                </div>
                <div class="lg:col-span-5">
                    <div class="card p-8 mb-6">
                        <h2 class="text-lg font-semibold text-slate-900 mb-3">Ce que vous obtenez</h2>
                        <ul class="space-y-3 text-sm text-slate-600">
                            <li>Analyse rapide de votre besoin et réponse claire.</li>
                            <li>Checklist documentaire pour un dossier complet.</li>
                            <li>Un point de contact dédié pour le suivi.</li>
                        </ul>
                    </div>
                    <div class="card p-8">
                        <h2 class="text-lg font-semibold text-slate-900 mb-3">Canaux directs</h2>
                        <div class="space-y-3 text-sm text-slate-600">
                            <div class="flex items-center gap-3">
                                <span class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-primary">
                                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="8"/></svg>
                                </span>
                                <div>Réponse sous 24h ouvrées</div>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-primary">
                                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-7.5 7-12a7 7 0 0 0-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                </span>
                                <div>Présence locale à Lubumbashi</div>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-primary">
                                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.5a5.5 5.5 0 0 1-5.5 5.5H9l-5 2 2-5V8.5A5.5 5.5 0 0 1 11.5 3h5A5.5 5.5 0 0 1 22 8.5z"/></svg>
                                </span>
                                <div>WhatsApp disponible pour l'urgence</div>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-primary">
                                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a4 4 0 0 1-4 4h-1l-4 3-1-1-3 1 1-1-1-1-1-1 1-1A6 6 0 1 1 21 15z"/></svg>
                                </span>
                                <div><a href="tel:+243998170745" class="text-slate-700">+243 998 170 745</a></div>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-primary">
                                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16v12H4z"/><path d="M4 6l8 7 8-7"/></svg>
                                </span>
                                <div>
                                    <a href="mailto:info@mannedesbraves.com" class="text-slate-700">info@mannedesbraves.com</a><br>
                                    <a href="mailto:mannedesbraves@yahoo.fr" class="text-slate-700">mannedesbraves@yahoo.fr</a>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-primary">
                                    <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s7-7.5 7-12a7 7 0 0 0-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                </span>
                                <div>960 Chaussee Laurent Desire Kabila, Immeuble Methodiste, 2eme etage, Quartier Makutano, Lubumbashi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
