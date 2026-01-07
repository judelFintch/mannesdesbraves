@extends('layouts.app')

@section('title', 'Accueil - La Manne des Braves')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.services')
    @include('partials.process')
    @include('partials.values')
    @include('partials.testimonials')
    @include('partials.faq')
    @include('partials.get-in-touch')
    @include('partials.sticky-cta')
@endsection
