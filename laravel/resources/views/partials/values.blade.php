@php
    $valueIcons = [
        '<path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z"/>',
        '<path d="M4 7h16v10H4z"/><path d="M7 10h10M7 14h6"/>',
        '<path d="M12 2v8l4 2"/><path d="M4 12a8 8 0 1 0 16 0 8 8 0 0 0-16 0z"/>',
        '<path d="M7 12l3 3 7-7"/>',
        '<path d="M3 12h7l2 2h9"/>'
    ];
@endphp

<section id="values" class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            <div class="lg:col-span-4 text-left">
                <div class="inline-block border border-primary rounded-full text-primary px-3 mb-3 text-sm">{{ __('home.values_title') }}</div>
                <h2 class="text-3xl md:text-4xl font-semibold tracking-tight text-slate-900 mb-4">{{ __('home.values_heading') }}</h2>
                <p class="text-slate-600 leading-relaxed">{{ __('home.values_intro') }}</p>
            </div>

            <div class="lg:col-span-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach(__('home.values') as $index => $value)
                        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-slate-200 p-6 hover:shadow-md transition text-left">
                            <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-primary mb-4">
                                <svg viewBox="0 0 24 24" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8">
                                    {!! $valueIcons[$index % count($valueIcons)] !!}
                                </svg>
                            </div>
                            <h5 class="font-semibold mb-2 text-slate-900">{{ $value['title'] }}</h5>
                            <p class="text-sm text-slate-600 leading-relaxed">{{ $value['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
