@php
    $isHome = request()->routeIs('home');
    $isProjects = request()->routeIs('projects');
    $isContact = request()->routeIs('contact');
@endphp

<header id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-white/85 border-b border-slate-200 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
        <nav class="flex items-center justify-between" role="navigation" aria-label="Main navigation">
            <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="flex items-center">
                <img src="{{ asset('logo.png') }}" alt="La Manne des Braves — logo" class="h-8">
            </a>
            <div class="hidden lg:flex items-center space-x-6">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-sm font-medium {{ $isHome ? 'text-slate-900' : 'text-slate-600 hover:text-slate-900' }}" @if($isHome) aria-current="page" @endif>{{ __('home.nav.home') }}</a>
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}#about" class="text-sm font-medium text-slate-600 hover:text-slate-900">{{ __('home.nav.about') }}</a>
                <a href="{{ route('projects', ['locale' => app()->getLocale()]) }}" class="text-sm font-medium {{ $isProjects ? 'text-slate-900' : 'text-slate-600 hover:text-slate-900' }}" @if($isProjects) aria-current="page" @endif>{{ __('home.nav.projects') }}</a>
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="text-sm font-medium {{ $isContact ? 'text-slate-900' : 'text-slate-600 hover:text-slate-900' }}" @if($isContact) aria-current="page" @endif>{{ __('home.nav.contact') }}</a>

                <!-- Language switcher -->
                <div class="ml-4 border-l border-slate-200 pl-4 flex items-center space-x-2">
                    <a href="{{ route('home', ['locale' => 'fr']) }}" class="text-sm {{ app()->getLocale() === 'fr' ? 'font-semibold text-slate-900' : 'text-slate-500' }}">FR</a>
                    <a href="{{ route('home', ['locale' => 'en']) }}" class="text-sm {{ app()->getLocale() === 'en' ? 'font-semibold text-slate-900' : 'text-slate-500' }}">EN</a>
                </div>
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="rounded-full bg-primary text-white px-5 py-2.5 text-sm font-semibold shadow-sm hover:opacity-95 transition">Demander un devis</a>
            </div>
            <div class="lg:hidden">
                <button id="mobile-menu-button" class="text-slate-700 font-medium" aria-controls="mobile-menu" aria-expanded="false" aria-label="Ouvrir le menu">Menu</button>
            </div>
            <div id="mobile-menu" class="lg:hidden hidden bg-white p-4 rounded-xl shadow-lg absolute left-0 right-0 top-full mt-2 z-40 border border-slate-100" role="menu" aria-hidden="true">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="block py-2 px-4 text-slate-700">{{ __('home.nav.home') }}</a>
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}#about" class="block py-2 px-4 text-slate-700">{{ __('home.nav.about') }}</a>
                <a href="{{ route('projects', ['locale' => app()->getLocale()]) }}" class="block py-2 px-4 text-slate-700">{{ __('home.nav.projects') }}</a>
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="block py-2 px-4 text-slate-700">{{ __('home.nav.contact') }}</a>
                <div class="mt-3 grid grid-cols-2 gap-2">
                    <a href="{{ route('home', ['locale' => 'fr']) }}" class="text-sm text-center rounded-lg border border-slate-200 py-2 {{ app()->getLocale() === 'fr' ? 'font-semibold text-slate-900 bg-slate-50' : 'text-slate-500' }}">FR</a>
                    <a href="{{ route('home', ['locale' => 'en']) }}" class="text-sm text-center rounded-lg border border-slate-200 py-2 {{ app()->getLocale() === 'en' ? 'font-semibold text-slate-900 bg-slate-50' : 'text-slate-500' }}">EN</a>
                </div>
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="mt-4 block text-center rounded-full bg-primary text-white px-5 py-2.5 text-sm font-semibold shadow-sm">Demander un devis</a>
            </div>
        </nav>
    </div>
</header>
