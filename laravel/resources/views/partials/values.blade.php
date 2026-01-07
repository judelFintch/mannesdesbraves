<section id="values" class="container-fluid bg-light py-5">
    <div class="container mx-auto py-5">
        <div class="lg:col-span-5 text-center">
            <div class="inline-block bg-light rounded-full text-primary px-3 mb-3 text-sm">{{ __('home.values_title', 'Nos engagements') }}</div>
            <h2 class="section-title mb-4">{{ __('home.values_heading', 'Nos valeurs') }}</h2>
            <p class="section-sub">{{ __('home.values_intro', 'Intégrité, transparence et excellence guident chacune de nos actions.') }}</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                @foreach(__('home.values') as $value)
                    <div class="p-6 bg-white rounded-lg text-center">
                        <h5 class="font-semibold mb-2">{{ $value['title'] }}</h5>
                        <p class="text-sm text-muted">{{ $value['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
