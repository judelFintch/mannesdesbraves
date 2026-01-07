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
            'message' => 'required|string',
        ]);

        // Envoi d'email via Mailable
        try {
            \Illuminate\Support\Facades\Mail::to(config('mail.from.address') ?: env('MAIL_TO'))->send(new \App\Mail\ContactMessage($data));
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
}
