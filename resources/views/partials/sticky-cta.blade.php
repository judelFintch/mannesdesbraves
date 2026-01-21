@php
$wa = env('WHATSAPP_NUMBER', '243998170745');
$waText = env('WHATSAPP_TEXT', "Bonjour, j'aimerais avoir des informations sur vos services.");
$whatsappLink = 'https://wa.me/' . $wa . '?text=' . urlencode($waText);
@endphp

<div class="fixed bottom-4 inset-x-0 px-4 z-40 lg:hidden">
    <div class="max-w-md mx-auto bg-white/95 backdrop-blur border border-slate-200 shadow-lg rounded-2xl p-3 flex items-center gap-3">
        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="flex-1 btn-base btn-primary text-center">Demander un devis</a>
        <a href="{{ $whatsappLink }}" class="btn-base btn-whatsapp px-4" aria-label="WhatsApp" target="_blank" rel="noopener">WA</a>
    </div>
</div>

<div class="hidden lg:block fixed bottom-6 right-6 z-40">
    <div class="bg-white/95 backdrop-blur border border-slate-200 shadow-lg rounded-2xl p-4 w-64">
        <div class="text-xs uppercase tracking-wide text-slate-500 mb-2">Besoin rapide</div>
        <div class="text-sm font-semibold text-slate-900 mb-3">Obtenez un devis sous 24h</div>
        <div class="flex flex-col gap-2">
            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="btn-base btn-primary text-center">Demander un devis</a>
            <a href="{{ $whatsappLink }}" class="btn-base btn-whatsapp text-center" target="_blank" rel="noopener">WhatsApp</a>
        </div>
    </div>
</div>
