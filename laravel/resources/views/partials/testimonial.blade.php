@php
$wa = env('WHATSAPP_NUMBER', '243XXXXXXXXX');
$waText = env('WHATSAPP_TEXT', "Bonjour, j'aimerais avoir des informations sur vos services.");
$whatsappLink = 'https://wa.me/' . $wa . '?text=' . urlencode($waText);
@endphp

<section id="contact" class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-primary text-white rounded-3xl px-6 py-10 md:px-12 md:py-12 shadow-lg">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 text-left">
                    <div class="inline-block bg-white/10 rounded-full text-white px-3 mb-3 text-sm">Prêt à avancer ?</div>
                    <h2 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">Contactez La Manne des Braves SARL dès aujourd’hui</h2>
                    <p class="text-white/90 leading-relaxed">Notre équipe est disponible et réactive pour étudier votre besoin et vous proposer une solution claire, efficace et conforme.</p>
                </div>
                <div class="lg:col-span-5">
                    <div class="flex flex-col sm:flex-row lg:flex-col gap-3 lg:items-start">
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="rounded-full bg-white text-primary px-6 py-3 text-sm font-semibold shadow-sm">Demander un devis</a>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="rounded-full border border-white text-white px-6 py-3 text-sm font-semibold">Nous contacter</a>
                        <a href="{{ $whatsappLink }}" class="rounded-full px-6 py-3 text-sm font-semibold bg-[#25D366] text-white" target="_blank" rel="noopener">WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
