@php
$wa = env('WHATSAPP_NUMBER', '243XXXXXXXXX');
$wa_text = env('WHATSAPP_TEXT', "Bonjour, j'aimerais avoir des informations sur vos services.");
@endphp

<a href="https://wa.me/{{ $wa }}?text={{ urlencode($wa_text) }}" aria-label="Contact WhatsApp" class="fixed bottom-6 right-6 z-50 bg-[#25D366] text-white p-3 rounded-full shadow-lg hover:scale-105 transition-transform" target="_blank" rel="noopener">
    <span class="sr-only">Contactez-nous sur WhatsApp</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15a2 2 0 0 1-2 2h-1l-3 3-1-1-3 1 1-1-1-1-1-1 1-1A7 7 0 1 1 21 15z"/></svg>
</a>