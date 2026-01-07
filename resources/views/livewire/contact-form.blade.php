<div>
    <h1 class="section-title mb-3">{{ __('home.contact_title') }}</h1>
    <p class="mb-6 text-slate-600">{{ __('home.contact_intro') }}</p>

    @if(session('success'))
        <div class="p-3 bg-green-100 text-green-800 rounded-xl mb-4">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="p-3 bg-red-100 text-red-800 rounded-xl mb-4">{{ session('error') }}</div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-4" aria-label="Formulaire de contact Live">
        <div>
            <label for="name" class="block text-sm font-medium text-slate-700">{{ __('home.label_name') }}</label>
            <input id="name" type="text" wire:model.defer="name" class="mt-1 block w-full border-slate-200 rounded-xl bg-white focus:border-primary focus:ring-primary" required aria-required="true">
            @error('name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-slate-700">{{ __('home.label_email') }}</label>
            <input id="email" type="email" wire:model.defer="email" class="mt-1 block w-full border-slate-200 rounded-xl bg-white focus:border-primary focus:ring-primary" required aria-required="true">
            @error('email')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label for="message" class="block text-sm font-medium text-slate-700">{{ __('home.label_message') }}</label>
            <textarea id="message" wire:model.defer="message" class="mt-1 block w-full border-slate-200 rounded-xl bg-white focus:border-primary focus:ring-primary" rows="6" required aria-required="true"></textarea>
            @error('message')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <button type="submit" class="btn-base btn-primary" aria-label="Envoyer le message">{{ __('home.button_send') }}</button>
        </div>
    </form>
</div>
