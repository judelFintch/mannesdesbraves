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
                <h2 class="text-4xl font-bold mb-4">{{ __('home.about_subtitle', 'Découvrez notre histoire, notre agrément officiel et notre engagement.') }}</h2>
                <p class="mb-4 text-justify">{{ __('home.about_text') }}</p>
                <div class="flex items-center mt-4">
                    <a class="inline-block bg-primary text-white rounded-full px-4 py-2 mr-3" href="#">Lire plus</a>
                    <div class="flex space-x-2">
                        <a class="inline-block border border-primary text-primary w-10 h-10 flex items-center justify-center rounded-full" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="inline-block border border-primary text-primary w-10 h-10 flex items-center justify-center rounded-full" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="inline-block border border-primary text-primary w-10 h-10 flex items-center justify-center rounded-full" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
