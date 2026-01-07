<section id="about" class="container-fluid py-5">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-center">
            <div>
                <div class="relative overflow-hidden">
                    <img class="w-full h-auto" src="{{ asset('img/1.webp') }}" alt="Image illustrant notre expertise" loading="lazy">
                </div>
            </div>
            <div>
                <div class="inline-block border border-primary rounded-full text-primary px-3 mb-3 text-sm">{{ __('home.about_title') }}</div>
                <h2 class="text-4xl font-bold mb-4">{{ __('home.about_subtitle') }}</h2>
                <p class="mb-4 text-justify">{{ __('home.about_text') }}</p>
                <div class="flex items-center mt-4">
                    <a class="inline-block bg-primary text-white rounded-full px-4 py-2" href="/contact">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>
