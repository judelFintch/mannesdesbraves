@php
$wa = env('WHATSAPP_NUMBER', '243XXXXXXXXX');
$waText = env('WHATSAPP_TEXT', "Bonjour, j'aimerais avoir des informations sur vos services.");
$whatsappLink = 'https://wa.me/' . $wa . '?text=' . urlencode($waText);
@endphp

<footer class="bg-gray-50 border-t mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-left text-sm text-gray-600">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-2">
                <img src="{{ asset('logo.png') }}" alt="La Manne des Braves" class="h-9 mb-4">
                <p class="text-gray-600 leading-relaxed">Transitaire officiel en RDC, nous sécurisons vos opérations douanières, logistiques et transport avec un accompagnement rigoureux et transparent.</p>
            </div>
            <div>
                <h3 class="font-semibold text-slate-900 mb-3">Navigation</h3>
                <div class="flex flex-col gap-2">
                    <a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('home.nav.home') }}</a>
                    <a href="{{ route('home', ['locale' => app()->getLocale()]) }}#about">{{ __('home.nav.about') }}</a>
                    <a href="{{ route('projects', ['locale' => app()->getLocale()]) }}">{{ __('home.nav.projects') }}</a>
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}">{{ __('home.nav.contact') }}</a>
                </div>
            </div>
            <div>
                <h3 class="font-semibold text-slate-900 mb-3">Contact rapide</h3>
                <div class="flex flex-col gap-2">
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}">Formulaire de contact</a>
                    <a href="{{ $whatsappLink }}" target="_blank" rel="noopener">WhatsApp</a>
                    <a href="tel:+243998170745">+243 998 170 745</a>
                    <a href="mailto:info@mannedesbraves.com">info@mannedesbraves.com</a>
                    <a href="mailto:mannedesbraves@yahoo.fr">mannedesbraves@yahoo.fr</a>
                </div>
            </div>
        </div>
        <div class="mt-10 border-t border-gray-200 pt-6 text-xs text-gray-500 flex flex-col sm:flex-row justify-between gap-3">
            <span>&copy; {{ date('Y') }} La Manne des Braves. Tous droits réservés.</span>
            <span>960 Chaussee Laurent Desire Kabila, Immeuble Methodiste, 2eme etage, Quartier Makutano, Lubumbashi</span>
        </div>
    </div>
</footer>
