<header id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-white/0 backdrop-blur-md">
    <div class="container mx-auto px-4 py-4">
        <nav class="flex items-center justify-between" role="navigation" aria-label="Main navigation">
            <a href="/" class="flex items-center">
                <img src="{{ asset('logo.png') }}" alt="La Manne des Braves — logo" class="h-10">
            </a>
            <div class="hidden lg:flex items-center space-x-6">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-gray-700 hover:text-blue-600">{{ __('home.nav.home') }}</a>
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}#about" class="text-gray-700 hover:text-blue-600">{{ __('home.nav.about') }}</a>
                <a href="{{ route('projects', ['locale' => app()->getLocale()]) }}" class="text-gray-700 hover:text-blue-600">{{ __('home.nav.projects') }}</a>
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="text-gray-700 hover:text-blue-600">{{ __('home.nav.contact') }}</a>

                <!-- Language switcher -->
                <div class="ml-4 border-l pl-4 flex items-center space-x-2">
                    <a href="{{ route('home', ['locale' => 'fr']) }}" class="text-sm {{ app()->getLocale() === 'fr' ? 'font-semibold' : 'text-gray-500' }}">FR</a>
                    <a href="{{ route('home', ['locale' => 'en']) }}" class="text-sm {{ app()->getLocale() === 'en' ? 'font-semibold' : 'text-gray-500' }}">EN</a>
                </div>
            </div>
            <div class="lg:hidden">
                <button id="mobile-menu-button" class="text-gray-700" aria-controls="mobile-menu" aria-expanded="false" aria-label="Ouvrir le menu">Menu</button>
            </div>
            <div id="mobile-menu" class="lg:hidden hidden bg-white p-4 mt-4 rounded shadow" role="menu" aria-hidden="true">
                <a href="{{ url('/') }}" class="block py-2">Home</a>
                <a href="#about" class="block py-2">About</a>
                <a href="{{ url('/projects') }}" class="block py-2">Projects</a>
                <a href="{{ url('/contact') }}" class="block py-2">Contact</a>
            </div>
        </nav>
    </div>
</header>
