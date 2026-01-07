<section id="values" class="container-fluid py-12 md:py-16">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-block border border-primary rounded-full text-primary px-3 mb-3 text-sm">{{ __('home.values_title') }}</div>
            <h2 class="section-title mb-4">{{ __('home.values_heading') }}</h2>
            <p class="section-sub">{{ __('home.values_intro') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
            @foreach(__('home.values') as $value)
                <div class="p-6 bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 text-left">
                    <h5 class="font-semibold mb-2 text-slate-900">{{ $value['title'] }}</h5>
                    <p class="text-sm text-slate-600">{{ $value['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
