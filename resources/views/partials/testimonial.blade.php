@php
$wa = env('WHATSAPP_NUMBER', '243XXXXXXXXX');
$waText = env('WHATSAPP_TEXT', "Bonjour, j'aimerais avoir des informations sur vos services.");
$whatsappLink = 'https://wa.me/' . $wa . '?text=' . urlencode($waText);
@endphp

<section id="contact" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-primary text-white rounded-3xl px-6 py-10 md:px-12 md:py-12 shadow-lg">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-12 text-left">
                    <h2 class="section-title text-white mb-4">Contact</h2>
                    <p class="text-white/90 leading-relaxed">Utilisez nos coordonnees dans le footer ou le bloc "Get In Touch" pour nous joindre.</p>
                </div>
            </div>
        </div>
    </div>
</section>
