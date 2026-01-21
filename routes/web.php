<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\PageController;

// Home with optional locale prefix (fr|en)
Route::get('/{locale?}', function ($locale = null) {
    $locale = $locale ?: config('app.locale', 'fr');
    if (! in_array($locale, ['fr', 'en'])) {
        $locale = config('app.locale', 'fr');
    }
    App::setLocale($locale);
    return view('welcome');
})->where('locale', 'fr|en')->name('home');

Route::get('/{locale?}/contact', [PageController::class, 'contact'])->where('locale', 'fr|en')->name('contact');
Route::post('/{locale?}/contact', [PageController::class, 'contactSubmit'])
    ->middleware('throttle:5,5')
    ->where('locale', 'fr|en')
    ->name('contact.send');
Route::get('/{locale?}/projects', [PageController::class, 'projects'])->where('locale', 'fr|en')->name('projects');
Route::get('/{locale?}/process', [PageController::class, 'process'])->where('locale', 'fr|en')->name('process');
Route::get('/{locale?}/faq', [PageController::class, 'faq'])->where('locale', 'fr|en')->name('faq');

// Fallback for 404 (no locale prefix assumed)
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
