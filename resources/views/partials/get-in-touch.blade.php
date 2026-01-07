@php
$wa = env('WHATSAPP_NUMBER', '243998170745');
$waText = env('WHATSAPP_TEXT', "Bonjour, j'aimerais avoir des informations sur vos services.");
$whatsappLink = 'https://wa.me/' . $wa . '?text=' . urlencode($waText);
@endphp

<section class="py-16 section-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="card p-8 md:p-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7">
                    <div class="badge mb-4">Get In Touch</div>
                    <h2 class="section-title mb-4">Parlons de votre prochaine operation</h2>
                    <p class="text-slate-600 leading-relaxed">Nous repondons sous 24h ouvrables avec une orientation claire sur vos demarches douanieres et logistiques.</p>
                </div>
                <div class="lg:col-span-5">
                    <div class="space-y-3 text-sm text-slate-600">
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
                        <div class="flex flex-col sm:flex-row gap-3 pt-2">
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="btn-base btn-primary">Demander un devis</a>
                            <a href="{{ asset('img/nez.pdf') }}" class="btn-base btn-outline" target="_blank" rel="noopener">Fiche societe (PDF)</a>
                            <a href="{{ $whatsappLink }}" class="btn-base btn-whatsapp" target="_blank" rel="noopener">WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
