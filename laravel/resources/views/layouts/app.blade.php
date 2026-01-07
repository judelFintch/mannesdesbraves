<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'La Manne des Braves')</title>
    <meta name="description" content="@yield('meta_description', 'La Manne des Braves — transitaire officiel en RDC offrant dédouanement, logistique et transport.')">
    <meta name="keywords" content="@yield('meta_keywords', 'douane, transitaire, logistique, RDC')">
    <meta property="og:title" content="@yield('title', 'La Manne des Braves')">
    <meta property="og:description" content="@yield('meta_description', 'La Manne des Braves — transitaire officiel en RDC offrant dédouanement, logistique et transport.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('img/hero-img.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <link href="{{ asset('assets/main.css') }}" rel="stylesheet">
    @livewireStyles
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="antialiased">
    <a href="#main-content" class="sr-only focus:not-sr-only">Aller au contenu</a>
    @include('partials.nav')
    <main id="main-content" tabindex="-1">
        @yield('content')
    </main>
    @include('partials.footer')
    @livewireScripts
</body>
</html>
