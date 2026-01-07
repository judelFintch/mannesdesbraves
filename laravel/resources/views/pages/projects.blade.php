@extends('layouts.app')

@section('title', 'Nos Projets')
@section('meta_description', 'Découvrez quelques projets réalisés par La Manne des Braves en logistique et dédouanement.')

@section('content')
    <div class="container mx-auto py-12">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-2xl font-bold mb-6">Nos Projets</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded shadow overflow-hidden">
                    <img src="{{ asset('img/project-1.jpg') }}" alt="Robotic Automation" class="w-full h-48 object-cover" loading="lazy">
                    <div class="p-4">
                        <h3 class="font-bold">Project One</h3>
                        <p class="text-sm text-gray-600">Robotic Automation</p>
                    </div>
                </div>
                <div class="bg-white rounded shadow overflow-hidden">
                    <img src="{{ asset('img/project-2.jpg') }}" alt="Machine Learning" class="w-full h-48 object-cover" loading="lazy">
                    <div class="p-4">
                        <h3 class="font-bold">Project Two</h3>
                        <p class="text-sm text-gray-600">Machine Learning</p>
                    </div>
                </div>
                <div class="bg-white rounded shadow overflow-hidden">
                    <img src="{{ asset('img/project-3.jpg') }}" alt="Predictive Analysis" class="w-full h-48 object-cover" loading="lazy">
                    <div class="p-4">
                        <h3 class="font-bold">Project Three</h3>
                        <p class="text-sm text-gray-600">Predictive Analysis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
