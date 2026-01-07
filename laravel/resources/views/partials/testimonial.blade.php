@php
$wa = env('WHATSAPP_NUMBER', '243XXXXXXXXX');
$waText = env('WHATSAPP_TEXT', "Bonjour, j'aimerais avoir des informations sur vos services.");
$whatsappLink = 'https://wa.me/' . $wa . '?text=' . urlencode($waText);
@endphp

<section id="contact" class="container-fluid py-12 md:py-16">
    <div class="container mx-auto px-6">
        <div class="bg-primary text-white rounded-3xl px-6 py-10 md:px-12 md:py-12 text-center shadow-lg">
            <div class="inline-block bg-white/10 rounded-full text-white px-3 mb-3 text-sm">Prêt à avancer ?</div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Contactez La Manne des Braves SARL dès aujourd’hui</h2>
            <p class="text-white/90 mb-6 max-w-2xl mx-auto">Notre équipe est disponible et réactive pour étudier votre besoin et vous proposer une solution claire, efficace et conforme.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-3">
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="btn-outline bg-white text-primary border-white">Demander un devis</a>
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="btn-outline text-white border-white">Nous contacter</a>
                <a href="{{ $whatsappLink }}" class="rounded-full px-6 py-3 font-semibold bg-[#25D366] text-white" target="_blank" rel="noopener">WhatsApp</a>
            </div>
        </div>
    </div>
</section>
