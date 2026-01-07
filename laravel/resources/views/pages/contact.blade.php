@extends('layouts.app')

@section('title', 'Contactez-nous')
@section('meta_description', 'Contactez La Manne des Braves pour un accompagnement en douane, logistique et transport en RDC.')

@section('content')
    <div class="container mx-auto py-12">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded shadow">
            <h1 class="text-2xl font-bold mb-4">Contactez-nous</h1>
            <p class="mb-6 text-gray-600">Remplissez le formulaire ci-dessous pour nous envoyer un message.</p>
            <form method="POST" action="{{ route('contact.send') }}" role="form" aria-label="Formulaire de contact" class="space-y-4">
                @csrf
                @if(session('success'))
                    <div class="p-2 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="p-2 bg-red-100 text-red-800 rounded">{{ session('error') }}</div>
                @endif
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" class="mt-1 block w-full border-gray-200 rounded-md" required aria-required="true">
                    @error('name')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full border-gray-200 rounded-md" required aria-required="true">
                    @error('email')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" class="mt-1 block w-full border-gray-200 rounded-md" rows="6" required aria-required="true">{{ old('message') }}</textarea>
                    @error('message')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
                </div>
                <div>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded" aria-label="Envoyer le message">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
@endsection
