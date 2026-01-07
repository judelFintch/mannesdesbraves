@extends('layouts.app')

@section('title', 'Accueil - La Manne des Braves')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.services')
    @include('partials.values')
    <livewire:photo-slider />
    @include('partials.team')
    @include('partials.testimonial')
@endsection
