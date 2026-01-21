<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contact($locale = null)
    {
        $locale = $locale ?: config('app.locale', 'fr');
        if (! in_array($locale, ['fr', 'en'])) {
            $locale = config('app.locale', 'fr');
        }
        \Illuminate\Support\Facades\App::setLocale($locale);
        return view('pages.contact');
    }

    public function contactSubmit(\Illuminate\Http\Request $request, $locale = null)
    {
        $locale = $locale ?: config('app.locale', 'fr');
        \Illuminate\Support\Facades\App::setLocale($locale);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        // Envoi d'email via Mailable
        try {
            $recipient = config('mail.to.address') ?: config('mail.from.address');
            if (! $recipient) {
                throw new \RuntimeException('Missing contact recipient address.');
            }
            \Illuminate\Support\Facades\Mail::to($recipient)->send(new \App\Mail\ContactMessage($data));
        } catch (\Exception $e) {
            // Log et rediriger avec erreur
            \Log::error('Mail send failed: '.$e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de l’envoi.');
        }

        return back()->with('success', 'Message envoyé, nous vous répondrons bientôt.');
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function process($locale = null)
    {
        $locale = $locale ?: config('app.locale', 'fr');
        if (! in_array($locale, ['fr', 'en'])) {
            $locale = config('app.locale', 'fr');
        }
        \Illuminate\Support\Facades\App::setLocale($locale);
        return view('pages.process');
    }

    public function faq($locale = null)
    {
        $locale = $locale ?: config('app.locale', 'fr');
        if (! in_array($locale, ['fr', 'en'])) {
            $locale = config('app.locale', 'fr');
        }
        \Illuminate\Support\Facades\App::setLocale($locale);
        return view('pages.faq');
    }
}
