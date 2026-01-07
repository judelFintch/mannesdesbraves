@php
$wa = env('WHATSAPP_NUMBER', '243XXXXXXXXX');
$waText = env('WHATSAPP_TEXT', "Bonjour, j'aimerais avoir des informations sur vos services.");
$whatsappLink = 'https://wa.me/' . $wa . '?text=' . urlencode($waText);
@endphp

<section id="contact" class="container-fluid py-5">
    <div class="container mx-auto py-5">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-block border border-primary rounded-full text-primary px-3 mb-3 text-sm">Prêt à avancer ?</div>
            <h2 class="text-4xl font-bold mb-4">Contactez La Manne des Braves SARL dès aujourd’hui</h2>
            <p class="mb-6">Notre équipe est disponible et réactive pour étudier votre besoin et vous proposer une solution claire, efficace et conforme.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-3">
                <a href="/contact" class="btn-primary">Demander un devis</a>
                <a href="/contact" class="btn-outline">Nous contacter</a>
                <a href="{{ $whatsappLink }}" class="rounded-full px-6 py-3 font-semibold bg-[#25D366] text-white" target="_blank" rel="noopener">WhatsApp</a>
            </div>
        </div>
    </div>
</section>
