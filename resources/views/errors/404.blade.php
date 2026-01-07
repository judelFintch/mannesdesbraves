@extends('layouts.app')

@section('title', 'Page non trouvée')
@section('meta_description', 'Page non trouvée — La Manne des Braves')

@section('content')
    <div class="container mx-auto py-20 text-center">
        <h1 class="text-4xl font-bold mb-4">404 — Page non trouvée</h1>
        <p class="mb-6 text-gray-600">Désolé, la page demandée est introuvable.</p>
        <a href="{{ url('/') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Retour à l'accueil</a>
    </div>
@endsection
